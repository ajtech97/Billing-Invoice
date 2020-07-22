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
$Ven_Id=$_REQUEST['val'];
$query="UPDATE `vendor` SET `ven_display_or_not`='NO' WHERE VId=$Ven_Id";
$ans=mysql_query($query);
echo $ans;
}
?>
