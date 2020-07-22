<?php
session_start();
error_reporting(0);
if($_SESSION['emp_username']=="")
{
    header("location:login.php");   
}
else{
include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();
    $mobileno_emp=$_SESSION['emp_username'];

$paid=$_REQUEST["paid_no"];

$emp_ID=$obj->getemployeeEmpID($mobileno_emp);
$data='{
	"records": [';

if($paid=="1"){    
$query=mysql_query("select *,DATEDIFF(DueDate,CURDATE()) as diff,GROUP_CONCAT(`EmpId`) AS EmployeeId from invoice_table_data where (invoice_del_yes_no='YES' and InvoiceStatus=0) and EmpId='".$emp_ID."' GROUP BY `InvoiceNo` ORDER BY DueDate ASC;");
}
if($paid=="2"){
$query=mysql_query("select *,DATEDIFF(DueDate,CURDATE()) as diff,GROUP_CONCAT(`EmpId`) AS EmployeeId from invoice_table_data where (invoice_del_yes_no='YES' and InvoiceStatus=1) and EmpId='".$emp_ID."' GROUP BY `InvoiceNo` ORDER BY DueDate ASC;");
}
if($paid=="3"){
$query=mysql_query("select *,GROUP_CONCAT(`EmpId`) AS EmployeeId from invoice_table_data where (invoice_del_yes_no='YES' and InvoiceStatus=2) and EmpId='".$emp_ID."'  GROUP BY `InvoiceNo` ORDER BY DueDate ASC;");
}

while($row=mysql_fetch_array($query))
{
    
    $invid=$row['InvId'];

    $paidquery=mysql_query("SELECT sum(`PaidAmount`) as paid FROM `paymenthistory` WHERE `InvId`='$invid'");
    $paidrow=mysql_fetch_array($paidquery);
    $paidamount=$paidrow['paid'];
    
    $empid=$row['EmployeeId'];
    $custid=$row['CustId'];
    $custmobno=$obj->getcustmobno($custid);
    $custna=$obj->custname($custid);
    $invno= $row['InvoiceNo'];
    
    $invdate= date("d-m-Y", strtotime($row['InvoiceDate']));
    $invduedate= date("d-m-Y", strtotime($row['DueDate']));
    
    
    $paymentdate= date("d-m-Y", strtotime($row['PaymentDate']));
    $sgst= $row['SGST'];
    $cgst= $row['CGST'];
    $igst= $row['IGST'];
    $remamt= $row['RemainingAmount'];
    $orgtotalamt= $row['TotalAmount'];
//    $invstatus= $row['InvoiceStatus'];
    $invoivestatus=$obj->getinvoicestatus($invid);
    $currdate=$row['CurrDateTime'];
    $diff=$row['diff'];

//    
    $data.= '{"datediff":"'.$diff.'","InvId":"'.$invid.'","emp":"'.$empid.'","CustId":"'.$custid.'","CustMobNo":"'.$custmobno.'","CustName":"'.ucwords($custna).'","InvoiceNo":"'.$invno.'","InvoiceDate":"'.$invdate.'","DueDate":"'.$invduedate.'","PaymentDate":"'.$paymentdate.'","SGST":"'.$sgst.'","CGST":"'.$cgst.'","IGST":"'.$igst.'","RemainingAmount":"'.$remamt.'","paidAmount":"'.$paidamount.'","orgTotal":"'.$orgtotalamt.'","InvoiceStatus":"'.$invoivestatus.'","CurrDateTime":"'.$currdate.'"},';

}
$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
