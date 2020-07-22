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
$custid = $_REQUEST["cid"];
//$source = $_REQUEST["source"];

$tablename="customer";
//$columnname="Emailid";
$colmob="Mobile";
//$colmob2="Mobile2";


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
$mobno=$obj->checkcustmobnoarepresentornot($tablename,$colmob,$mob,$custid);
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