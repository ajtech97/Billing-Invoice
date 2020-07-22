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
$orderid=$_REQUEST['val'];
$query="UPDATE `orders` SET `order_del_yes_no`='NO' ,Emp_Order_Yes_No='NO' WHERE OId=$orderid";
$ans=mysql_query($query);
echo $ans;
$query1="DELETE FROM `orderdata` WHERE OId=$orderid";
$ans2=mysql_query($query1);
echo $ans2;
}
?>
