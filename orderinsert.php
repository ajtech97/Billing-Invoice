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
                $curdate=date('Y-m-d');
                $curtime=date('H:i:s');

if(isset($_REQUEST["insertdata"]))
{

    $invoiceno=$_REQUEST["invoiceno"];
    $invoicedate=addslashes($_REQUEST["invoicedate"]);
    $custname=$_REQUEST["cust"];
    $custid=$obj->getcustid($custname);
    
//    $cust=$obj->custname($custid);
    
    $duedate=addslashes($_REQUEST["duedate"]);
    
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
    $discount=$_REQUEST["discount"];
    $discounttype=$_REQUEST["discperrs"];
    $total=$_REQUEST["total"];
    
    $photo=$obj->file_upload_function("invoicephoto","InvoiceImages");
    
    $ans=$obj->insertdb("invoices","CustId",$custid,"InvoiceNo",$invoiceno,"InvoiceDate",$invoicedate,"DueDate",$duedate,"Invphoto",$photo,"subtotal",$subtotal,"Discount",$discount,"Disc_Type",$discounttype,"TotalAmount",$total,"RemainingAmount",$total,"InvoiceStatus","0","invoice_del_yes_no","YES","CurrDate",$curdate,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
    
    $inid=$obj->getinvoiceid($invoiceno);
    
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
        
        if($proname[$i]!="")
        {
        
        $ans2=$obj->insertdb("invoicedata","InvId",$inid,"ProductName",$productname[$i],"ChangeProPrice",$productchangeprice[$i],"ProductId","$pid","Quantity",$quantity[$i],"Amount",$amount[$i],"TotalAmount",$total,"Discount",$discount,"CurrDate",$curdate,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
        }
        else
        {
            
        }
    }
    
    $oid=$_REQUEST["orderid"];
   
    $custexist=$obj->checkcustexistornot($custid);
    
    if($custexist=="yes")
    {
    
    $ans3=mysql_query("UPDATE `orders` SET `order_del_yes_no`='NO' WHERE OId=$oid");
    
    if($ans=="yes" and $ans2=="yes" and $ans3==1)
    {
        echo "<script>alert('Invoice Created Successfully.');</script>";
    }
    else
    {
        echo "<script>alert('Invoice Create Failed');</script>";
    }
    }
    else
    {
        echo "<script>alert('Invoice Create Failed');</script>";
    }
    
echo "<script>window.location.href='order.php';</script>"; 
    
}
}

?>