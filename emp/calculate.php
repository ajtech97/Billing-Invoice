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

$product=$_REQUEST["product"];
$query=mysql_query("select SPPrice from product where PName='$product' and pro_display_or_not='YES'");
$pr=mysql_fetch_array($query);
$price=$pr["SPPrice"];
echo $price;
}
?>