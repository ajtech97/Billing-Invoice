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
$ip=$obj->ipaddress();
date_default_timezone_set('Asia/kolkata');
$empid=$_REQUEST['empid'];
$que=mysql_query("SELECT custid FROM assigncustomers WHERE empid=$empid");
$outp = "";
$a=0;
while($rs = mysql_fetch_array($que)) {
    if ($outp != "") {$outp .= ",";}
        $outp .='{"custid":"'   . $rs["custid"] .'"}' ;
        $a=$a+1;
}
$outp ='{"records":['.$outp.']}';
echo ($outp);   
}
?>