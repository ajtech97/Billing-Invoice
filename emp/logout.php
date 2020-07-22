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
            
    $ip=$obj->ipaddress();

    date_default_timezone_set('Asia/kolkata');
                $curdate=date('Y-m-d');
                $curtime=date('H:i:s');
    
    $mobno=$_SESSION['emp_username'];
    $usern=$obj->getemployeename($mobno);

$query=mysql_query("select LogId from employeelogs where Username='$usern' and LogoutDateTime is NULL order by LogId desc limit 1");
$row=mysql_fetch_array($query);
$logid=$row["LogId"];

mysql_query("UPDATE `employeelogs` SET `LogoutDateTime`='$curdate $curtime' where LogId=$logid") ;
        

unset($_SESSION['emp_username']);
header("location:index.php");
}
?>