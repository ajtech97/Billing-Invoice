<?php 
error_reporting(0);
//if($_SESSION['username']=="")
//{
//    header("location:login.php");   
//}

 include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();

$mob = $_REQUEST["mobile"];
$vid = $_REQUEST["vid"];
    
$tablename="vendor";
$colmob="VMobile";

$mobno=$obj->checkvendormobnoarepresentornot($tablename,$colmob,$mob,$vid);

if($mobno=="yes")
{
    echo "yes";
}
else
{
    echo "no";
}



?>