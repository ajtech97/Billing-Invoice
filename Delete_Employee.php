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
$empid=$_REQUEST['val'];
$query="UPDATE `employee` SET `emp_display_or_not`='NO' WHERE EmpId=$empid";
$ans=mysql_query($query);
echo $ans;
}
?>
