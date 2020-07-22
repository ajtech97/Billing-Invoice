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

$proname = $_REQUEST["proname"];

$tablename="vendorproduct";
$columnname="PName";

$pro=$obj->checkproductarepresentornot($tablename,$columnname,$proname);

if($pro=="yes")
{
    echo "yes";
}
else
{
    echo "no";
}
}
?>