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

if(isset($_REQUEST["create"]))
{
    $billno=$_REQUEST["invoiceno"];
    $purchasedate=addslashes($_REQUEST["invoicedate"]);

    $vendorname=$_REQUEST["cust"];
    $vendorid=$obj->getvendid($vendorname);

    $duedate=addslashes($_REQUEST["duedate"]);

    $count=$_REQUEST["totalcount"];

    $Subtotal=$_REQUEST["Subtotal"];
    $discount=$_REQUEST["discount"];
    $discounttype=$_REQUEST["discperrs"];
    $total=$_REQUEST["total"];

    $ans=$obj->insertdb("purchasebills","Vid",$vendorid,"BillNo",$billno,"BillDate",$purchasedate,"DueDate",$duedate,"Discount",$discount,"Disc_Type",$discounttype,"Total",$total,"RemainingAmount",$total,"BillingStatus","0","SubTotal",$Subtotal,"purchase_del_yes_no","YES","CurrDate",$curdate,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);

    $purchaseid=$obj->getpurchasebillid($billno);

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

        $ans2=$obj->insertdb("purchasebilldata","PBId",$purchaseid,"BillNo",$billno,"ProductName",$productname,"ChangeProPrice",$productchangeprice,"ProductId","$pid","Quantity",$quantity,"Amount",$product_ammount,"Total",$total_ammount,"Discount",$discount,"CurrDate",$curdate,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
    }
  }
    
        $vendexist=$obj->checkvendexistornot($vendorid);

    if($ans=="yes" and $ans2=="yes" and $vendexist=="yes")
    {
        echo "<script>alert('Purchase Bill Created Successfully.');</script>";
    }
    else
    {
        echo "<script>alert('Purchase Bill Create Failed');</script>";
    }

echo "<script>window.location.href='purchasebill.php';</script>";
}

if(isset($_REQUEST["updatedata"]))
{
    
  $invoiceno=$_REQUEST["invoiceno"];
  $invoicedate=addslashes($_REQUEST["invoicedate"]);

  $vendorname=$_REQUEST["cust"];
  $custid=$obj->getvendid($vendorname);
  $duedate=addslashes($_REQUEST["duedate"]);
  $count=$_REQUEST["totalcount"];
  $count2=$_REQUEST["OGtotalCount"];

  $subtotal=$_REQUEST["Subtotal"];
  $discount=$_REQUEST["discount"];
  $discounttype=$_REQUEST["discperrs"];
  $total=$_REQUEST["total"];

  $purchasebillUpdate=$obj->updatepurchasebill("purchasebills",$custid,$invoicedate,$duedate,$subtotal,$discount,$discounttype,$total,$curdate,$curtime,$invoiceno);

  $purchaseid=$obj->getpurchasebillid($invoiceno);
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
      $chk=$obj->product_present_in_purchaseBill_or_not("purchasebilldata","BillNo",$invoiceno,"ProductId",$pid);

      if($chk=="yes")
      {
        $pbdid=$obj->getproductdataid("purchasebilldata","BillNo",$invoiceno,"ProductId",$pid);

        $upans2=$obj->updatepurchasebilldata("purchasebilldata",$productname,$pid,$quantity,$product_ammount,$discount,$curdate,$curtime,$total_ammount,$pbdid,$productchangeprice);
      }
      else{
        if($chk=="no")
        {
        $upans=$obj->insertdb("purchasebilldata","PBId",$purchaseid,"BillNo",$invoiceno,"ProductName",$productname,"ChangeProPrice",$productchangeprice,"ProductId","$pid","Quantity",$quantity,"Amount",$product_ammount,"Total",$total_ammount,"Discount",$discount,"CurrDate",$curdate,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
        }
      }
    }
  }
    if($purchasebillUpdate=="yes" || $upans2=="yes" || $upans=="yes")
    {
          echo "<script>alert('Purchase Bill Updated Successfully');</script>";
    }
    else
    {
        echo "<script>alert('Purchase Bill Update Failed');</script>";
    }

echo "<script>window.location.href='purchasebill.php';</script>";
}


}
?>
