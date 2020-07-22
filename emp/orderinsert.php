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

if(isset($_REQUEST["insertdata"]))
{
    $orderno=$_REQUEST["invoiceno"];
    $odate=addslashes($_REQUEST["invoicedate"]);
//    $custid=$_REQUEST["cust"];
//    $cust=$obj->custname($custid);
    
    $custname=$_REQUEST["cust"];
    $custid=$obj->getcustid($custname);
    
    
    $count=$_REQUEST["totalcount"];
            for($i=0;$i<$count;$i++)
                {
                $j=$i+1;
                $productname[$i]=addslashes($_REQUEST["productlist".$j]);
                $productchangeprice[$i]=addslashes($_REQUEST["proprice".$j]);
                $quantity[$i]=$_REQUEST["quantity".$j];                    
                $amount[$i]=$_REQUEST["amount".$j];      

                }
    $subtotal=$_REQUEST["subtotal"];
 
    $total=$_REQUEST["total"];
    $mob=$_SESSION['emp_username'];
    $empid=$obj->getemployeeEmpID($mob);

    $custexist=$obj->checkcustexistornot($custid);
    
    if($custexist=="yes")
    {
    
    $ans=$obj->insertdb("orders","OrderNo","$orderno","EmpId","$empid","EmpMobileNo","$mob","CustId",$custid,"CustName",$custname,"ODate",$odate,"SubTotal",$subtotal,"TotalAmount",$total,"order_del_yes_no","YES","Emp_Order_Yes_No","YES","CurrDate",$curdate,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
    
     $orid=$obj->getorderid($orderno);
    
    for($i=0;$i<$count;$i++)
    {
//        $pid=$obj->getproductid($productname[$i])
        
        $prolen[$i]=strpos($productname[$i],"(");
        $proname[$i]=substr($productname[$i],0,$prolen[$i]);
        $query=mysql_query("select PId from product where PName like '$proname[$i]' and pro_display_or_not='YES'");
        $row=mysql_fetch_array($query);
        $pid=$row["PId"];
        
//        $query=mysql_query("select PId from product where PName like '$productname[$i]'");
//        $row=mysql_fetch_array($query);
//        $pid=$row["PId"];
        
        $ans2=$obj->insertdb("orderdata","OId","$orid","CustId",$custid,"ProductName",$productname[$i],"ChangeProPrice",$productchangeprice[$i],"ProductId","$pid","Quantity",$quantity[$i],"TotalAmount",$total,"SubTotal",$subtotal,"Amount",$amount[$i],"CurrDate",$curdate,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
    }
        
    
    
    if($ans=="yes" and $ans2=="yes")
    {
        echo "<script>alert('Order Taken Successfully.');</script>";
    }
    else
    {
        echo "<script>alert('Order Taken Failed');</script>";
    }
        
    }
    else
    {
         echo "<script>alert('Order Taken Failed');</script>";
    }
    
echo "<script>window.location.href='order.php';</script>"; 
}
}
?>