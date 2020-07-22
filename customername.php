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

$cust=$_REQUEST["cust"];
$query=mysql_query("select FName,LName from customer where CustId='$cust'");
$cu=mysql_fetch_array($query);
$custname=$cu["FName"]." ".$cu["LName"];
echo $custname;
}
?>