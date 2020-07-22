<?php
session_start();
error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");   
}
else{
include("Classes/db.class.php");
$cnt=0;
$obj=new maindbfunctions();
$obj->connect();
$ip=$obj->ipaddress();
date_default_timezone_set('Asia/kolkata');
$json=$_REQUEST['getjson'];
$empid=$_REQUEST['empid'];
$obj1=json_decode($json);
//echo $cnt;
foreach($obj1 as $getdata)
{
        $obj->deleterecord('assigncustomers','empid',$empid);
 }
foreach($obj1 as $getdata)
{
        $curdate=date('Y-m-d');
        $curtime=date('H:i:s');       
        $obj->insertdb('assigncustomers','custid',$getdata->{'customerlistID'},'empid',$empid,'curdate',$curdate,'curtime',$curtime,'ipadd',$ip);
        $cnt++;
}
echo $cnt;
}
?>
