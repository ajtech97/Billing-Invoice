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
   
//    if($_REQUEST['src']=='prdct')
//    {
    
        

        
        $tablename="inv_and_emp";
        $col1="EmpId";
        $col2="InvId";
        
        $epid=$_REQUEST["empid"];
        $invid=$_REQUEST["invid"];
      
        $invempid=$obj->getinvempid($tablename,$col1,$epid,$col2,$invid);
        
        $sql="DELETE FROM `$tablename` WHERE `InvEmpId` = '$invempid'";
        $query=mysql_query($sql);
//    }
}
 ?>




