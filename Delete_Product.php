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
$Pro_Id=$_REQUEST['val'];
$query="UPDATE `product` SET `pro_display_or_not`='NO' WHERE PId=$Pro_Id";
$ans=mysql_query($query);
echo $ans;
}
?>
