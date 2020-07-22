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
    
     $duedate=addslashes($_REQUEST["duedate"]);
    
    $count=$_REQUEST["totalcount"];
    
    $subtotal=$_REQUEST["subtotal"];
    $discount=$_REQUEST["discount"];
    $discounttype=$_REQUEST["discperrs"];
    $total=$_REQUEST["total"];
    
    $photo=$obj->file_upload_function("invoicephoto","InvoiceImages");
    
    $ans=$obj->insertdb("invoices","CustId",$custid,"InvoiceNo",$invoiceno,"InvoiceDate",$invoicedate,"DueDate",$duedate,"Invphoto",$photo,"subtotal",$subtotal,"Discount",$discount,"Disc_Type",$discounttype,"TotalAmount",$total,"RemainingAmount",$total,"InvoiceStatus","0","invoice_del_yes_no","YES","CurrDate",$curdate,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
    
     $inid=$obj->getinvoiceid($invoiceno);
    
    for($i=0;$i<$count;$i++)
    {
        $j=$i+1;
        $pname=$_REQUEST["productlist".$j];
        if($pname)
        {

                $productname=addslashes($_REQUEST["productlist".$j]);  
                $productchangeprice=addslashes($_REQUEST["proprice".$j]);
                $quantity=$_REQUEST["quantity".$j];                    
                $amount=$_REQUEST["amount".$j];    
            
                $prolen=strpos($productname,"(");
                $proname=substr($productname,0,$prolen);
                $query=mysql_query("select PId from product where PName like '$proname' and pro_display_or_not='YES'");
                $row=mysql_fetch_array($query);
                $pid=$row["PId"];
            
                $total_ammount=$_REQUEST["amount".$j];
                $product_ammount=substr($productname,$prolen+1,-1);

            
                $ans2=$obj->insertdb("invoicedata","InvId",$inid,"ProductName",$productname,"ChangeProPrice",$productchangeprice,"ProductId","$pid","Quantity",$quantity,"Amount",$product_ammount,"TotalAmount",$total_ammount,"Discount",$discount,"CurrDate",$curdate,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);   
        }
    }
    
    $custexist=$obj->checkcustexistornot($custid);
    
     
    if($ans=="yes" and $ans2=="yes" and $custexist=="yes")
    {
        echo "<script>alert('Invoice Created Successfully.');</script>";
    }
    else
    {
        echo "<script>alert('Invoice Create Failed');</script>";
    }
    
echo "<script>window.location.href='invoice.php';</script>"; 

}
    
    
if(isset($_REQUEST["updatedata"]))
{

    $invoiceno=$_REQUEST["invoiceno"];
    $invoicedate=addslashes($_REQUEST["invoicedate"]);
    
    $custname=$_REQUEST["cust"];
    $custid=$obj->getcustid($custname);
    
    $duedate=addslashes($_REQUEST["duedate"]);
    $count=$_REQUEST["totalcount"];
    $count2=$_REQUEST["OGtotalCount"];

     $subtotal=$_REQUEST["subtotal"];
     $discount=$_REQUEST["discount"];
     $discounttype=$_REQUEST["discperrs"];
     $total=$_REQUEST["total"];
    
    $photo=$obj->file_upload_function("invoicephoto","InvoiceImages");

    $invoiceUpdate=$obj->updateinvoice("invoices",$custid,$invoicedate,$duedate,$photo,$subtotal,$discount,$discounttype,$total,$curdate,$curtime,$invoiceno);
  
    $inid=$obj->getinvoiceid($invoiceno);
    
    for($i=0;$i<$count;$i++)
  {
    $j=$i+1;
     $pname=$_REQUEST["productlist".$j];
    if($pname)
    {
        $productname=addslashes($_REQUEST["productlist".$j]);
        $productchangeprice=addslashes($_REQUEST["proprice".$j]);
        $quantity=$_REQUEST["quantity".$j];
        $total_ammount=$_REQUEST["amount".$j];
        $prolen=strpos($productname,"(");
        $product_ammount=substr($productname,$prolen+1,-1);
        $proname=substr($productname,0,$prolen);

//Update the existing product
// to check the product already present in purchasbilldata data
        
        
      $pn=mysql_query("select PId from product where PName like '$proname' and pro_display_or_not='YES'");
      $pnm=mysql_fetch_array($pn);
      $pid=$pnm["PId"];
      $chk=$obj->product_present_in_invoice_or_not("invoicedata","InvId",$inid,"ProductId",$pid);
    
    if($chk=="yes")
      {
        $invdid=$obj->getinvproductdataid("invoicedata","InvId",$inid,"ProductId",$pid);

        $upans2=$obj->updateinvoicedata("invoicedata",$productname,$pid,$quantity,$product_ammount,$discount,$curdate,$curtime,$total_ammount,$invdid,$productchangeprice);
      }
      else
      {
        if($chk=="no")
        {
        $upans=$obj->insertdb("invoicedata","InvId",$inid,"ProductName",$productname,"ChangeProPrice",$productchangeprice,"ProductId","$pid","Quantity",$quantity,"Amount",$product_ammount,"TotalAmount",$total_ammount,"Discount",$discount,"CurrDate",$curdate,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
        }
      }
    }
  }
    
    if($invoiceUpdate=="yes" || $upans2=="yes" || $upans=="yes")
    {
          echo "<script>alert('Invoice Updated Successfully');</script>";
    }
    else
    {
        echo "<script>alert('Invoice Update Failed');</script>";
    }    
            
echo "<script>window.location.href='invoice.php';</script>";
}    

}
?>