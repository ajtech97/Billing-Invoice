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
$invid=$_REQUEST['val'];
$query="UPDATE `invoices` SET `invoice_del_yes_no`='NO' WHERE InvId=$invid";
$ans=mysql_query($query);
echo $ans;
$query1="DELETE FROM `invoicedata` WHERE `InvId` = '$invid'";
$ans2=mysql_query($query1);
echo $ans2;
$query2="DELETE FROM `paymenthistory` WHERE `InvId` = '$invid'";
$ans3=mysql_query($query2);
echo $ans3;    
}
?>


