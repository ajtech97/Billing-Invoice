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
$Cust_Id=$_REQUEST['val'];
$query="UPDATE `customer` SET `cust_display_or_not`='NO' WHERE CustID=$Cust_Id";
$ans=mysql_query($query);
echo $ans;
}
?>
