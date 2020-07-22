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
   
    if($_REQUEST['src']=='prdct')
    {
    
        $tablename="purchasebilldata";
        $col1="ProductName";
        $col2="BillNo";
        
        $ProductName=$_REQUEST["productname"];
        $BillNo=$_REQUEST["billno"];
      
        $pbdid=$obj->getproductdataid($tablename,$col1,$ProductName,$col2,$BillNo);
        
        $sql="DELETE FROM `$tablename` WHERE `PBDId` = '$pbdid'";
        $query=mysql_query($sql);
    }
}
 ?>
