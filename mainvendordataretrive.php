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
    $mobileno_emp=$_SESSION['username'];

$paid=$_REQUEST["paid_no"];
$emp_ID=$obj->getemployeeEmpID($mobileno_emp);
$data='{
	"records": [';
    
if($paid=="1"){
    $query=mysql_query("select *,DATEDIFF(DueDate,CURDATE()) as diff from purchase_table_data where purchase_del_yes_no='yes' and BillingStatus=0 ORDER BY DueDate ASC");
}
if($paid=="2"){
    $query=mysql_query("select *,DATEDIFF(DueDate,CURDATE()) as diff from purchase_table_data where purchase_del_yes_no='yes' and BillingStatus=1 ORDER BY DueDate ASC");
}
if($paid=="3"){
    $query=mysql_query("select * from purchase_table_data where purchase_del_yes_no='yes' and BillingStatus=2 ORDER BY DueDate ASC");
}

while($row=mysql_fetch_array($query))
{
    
    $pid=$row['PBId'];
    $vid=$row['Vid'];
    $billno=$row['BillNo'];

    $paidquery=mysql_query("SELECT sum(`PaidAmount`) as paid FROM `vendorpaymenthistory` WHERE `Billno`='$billno'");
    $paidrow=mysql_fetch_array($paidquery);
    $paidamount=$paidrow['paid'];
    
    $vname=$obj->vendname($vid);
    $vcont=$obj->getvendorcontact($vid);
    
    $billdate= date("d-m-Y", strtotime($row['BillDate']));
    $billduedate= date("d-m-Y", strtotime($row['DueDate']));
    
    
    $paymentdate= date("d-m-Y", strtotime($row['PaymentDate']));
    $billstatus= $row['BillingStatus'];
    $sgst= $row['SGST'];
    $cgst= $row['CGST'];
    $igst= $row['IGST'];
    $total= $row['RemainingAmount'];
    $orgTotal=$row['Total'];
    $currdate=$row['CurrDateTime'];
    $diff=$row['diff'];
    

    $data.= '{"datediff":"'.$diff.'","pid":"'.$pid.'","vid":"'.$vid.'","billno":"'.$billno.'","vname":"'.ucwords($vname).'","vcont":"'.$vcont.'","billdate":"'.$billdate.'","billduedate":"'.$billduedate.'","PaymentDate":"'.$paymentdate.'","remAmount":"'.$total.'","paidAmount":"'.$paidamount.'","orgTotal":"'.$orgTotal.'","SGST":"'.$sgst.'","CGST":"'.$cgst.'","IGST":"'.$igst.'","bilstatus":"'.$billstatus.'","CurrDateTime":"'.$currdate.'"},';
}
$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
