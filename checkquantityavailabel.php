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
    
$productname=$_REQUEST["product"];
$quantity=$_REQUEST["quantity"];

      $query=mysql_query("select qupur FROM report_purchase where ProductName='$productname'");
      $row=mysql_fetch_array($query);  
      $quantitypur=$row["qupur"];
    
      $query1=mysql_query("select quinv FROM report_invoice where ProductName='$productname'");
      $row1=mysql_fetch_array($query1);
      $quantityinv=$row1["quinv"];        

        if($quantityinv=="")
        {
            $quantityinv=0;
        }   
        
        $availabelstock=$quantitypur-$quantityinv;

            if($quantity<=$availabelstock)
            {
                echo "";    
            }
            else
            {
                echo  "Stock Not Availabel";
            }

    
    
}
?>