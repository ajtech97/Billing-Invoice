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
$bill_no=$_REQUEST['val'];
$query="UPDATE `purchasebills` SET `purchase_del_yes_no`='NO' WHERE BillNo=$bill_no";
$ans=mysql_query($query);
echo $ans;
$query1="DELETE FROM `purchasebilldata` WHERE `BillNo` = '$bill_no'";
$ans2=mysql_query($query1);
echo $ans2;
$query2="DELETE FROM `vendorpaymenthistory` WHERE `BillNo` = '$bill_no'";
$ans3=mysql_query($query2);
echo $ans3;    
}
?>
