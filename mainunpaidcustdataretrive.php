<?php
session_start();
error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");   
}
else{
include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();
//$mobileno_emp=$_SESSION['username'];
//$emp_ID=$obj->getemployeeEmpID($mobileno_emp);
    
    
$data='{
	"records": [';
    
    
$query=mysql_query("select *,DATEDIFF(DueDate,CURDATE()) as diff,GROUP_CONCAT(`EmpId`) AS EmployeeId from invoice_table_data where invoice_del_yes_no='yes' and InvoiceStatus=0 GROUP BY `InvoiceNo` ORDER BY DueDate ASC;");


while($row=mysql_fetch_array($query))
{
    $empnames="";
    $invid=$row['InvId'];
    $empid=$row['EmployeeId'];
    $cars = array($empid);
    $myString = $empid;
    $myArray = explode(',', $myString);
   
    $arrlength = count($myArray);
    for($x = 0; $x < $arrlength; $x++) {
        $temp=$myArray[$x];
        $employeename=$obj->getemployeename($temp);
        $empnames.=ucwords($employeename.",");
    }
    if($x>0){$empnames=ucwords(substr($empnames,0, -1));}
    
    $custid=$row['CustId'];
    $custmobno=$obj->getcustmobno($custid);
    $custna=$obj->custname($custid);
    $invno= $row['InvoiceNo'];
    
    $invdate= date("d-m-Y", strtotime($row['InvoiceDate']));
    $invduedate= date("d-m-Y", strtotime($row['DueDate']));
    
    
    $sgst= $row['SGST'];
    $cgst= $row['CGST'];
    $igst= $row['IGST'];
    $orgtotalamt= $row['TotalAmount'];
    $remamt= $row['RemainingAmount'];
//    $invstatus= $row['InvoiceStatus'];
    $invoivestatus=$obj->getinvoicestatus($invid);
    $currdate=$row['CurrDateTime'];
    $diff=$row['diff'];
//    
    $data.= '{"datediff":"'.$diff.'","EmpName":"'.$empnames.'","InvId":"'.$invid.'","CustId":"'.$custid.'","CustMobNo":"'.$custmobno.'","CustName":"'.ucwords($custna).'","InvoiceNo":"'.$invno.'","InvoiceDate":"'.$invdate.'","DueDate":"'.$invduedate.'","SGST":"'.$sgst.'","CGST":"'.$cgst.'","IGST":"'.$igst.'","RemainingAmount":"'.$remamt.'","orgTotal":"'.$orgtotalamt.'","InvoiceStatus":"'.$invoivestatus.'","CurrDateTime":"'.$currdate.'"},';

}
$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>