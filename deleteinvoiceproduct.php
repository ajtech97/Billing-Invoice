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
    
        $tablename="invoicedata";
        $col1="ProductName";
        $col2="InvId";
        
        $ProductName=$_REQUEST["productname"];
        $invid=$_REQUEST["invid"];
      
        $invdid=$obj->getinvproductdataid($tablename,$col1,$ProductName,$col2,$invid);
        
        $sql="DELETE FROM `$tablename` WHERE `InvDataId` = '$invdid'";
        $query=mysql_query($sql);
    }
}
 ?>




