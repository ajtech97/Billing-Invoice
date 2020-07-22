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

//$email = $_REQUEST["em"];
$mob = $_REQUEST["mobile"];
$empid = $_REQUEST["empid"];
//$source = $_REQUEST["source"];

$tablename="employee";
//$columnname="Email";
$colmob="MobileNo";

//
//if($source=="email")
//{
//$em=$obj->checkemailarepresentornot($tablename,$columnname,$email);
//
//if($em=="yes")
//{
//    echo "yes";
//}
//else
//{
//    echo "no";
//}   
//}


//if($source=="mob")
//{
$mobno=$obj->checkempmobnoarepresentornot($tablename,$colmob,$mob,$empid);
if($mobno=="yes")
{
    echo "yes";
}
else
{
    echo "no";
}
}


?>