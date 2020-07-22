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

$PId=$_REQUEST["product"];
$query=mysql_query("select PName from product where PId='$PId'");
$pr=mysql_fetch_array($query);
$product=$pr["PName"];
echo $product;
}
?>