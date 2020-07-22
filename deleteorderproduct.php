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
//    if($_REQUEST['src']=='emp')
//    {
//      $empid=$_REQUEST["empid"];
//      $invoiceid=$_REQUEST["id"];
//      $sql="DELETE FROM `inv_and_emp` WHERE `InvId` = '$invoiceid' AND `EmpId` = '$empid'";
//      mysql_query($sql);
//    }
    if($_REQUEST['src']=='prdct')
    {
    
        $tablename="orderdata";
        $col1="ProductName";
        $col2="OId";    
        
        $ProductName=$_REQUEST["productname"];
        $orderid=$_REQUEST["orderid"];
        
        $orderdid=$obj->getorderproductdataid($tablename,$col1,$ProductName,$col2,$orderid);
        
        $sql="DELETE FROM `$tablename` WHERE `OrderDataId` = '$orderdid'";
        $query=mysql_query($sql);
        
//      $productid=$_REQUEST["product"];
//      $invoiceid=$_REQUEST["id"];
//      $sql="DELETE FROM `invoicedata` WHERE `OId` = '$orderid' AND `ProductName` like '$productid'";
//      $query=mysql_query($sql);
    }
}
 ?>






