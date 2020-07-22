<?php session_start();?>
    <?php error_reporting(0);

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


if(isset($_REQUEST["submit"]))
    {
        $billno=$_REQUEST['billno'];
        $vendid=$_REQUEST['vendorId'];
        $totalamount=$_REQUEST["totalamount"];
        $paidamount=$_REQUEST["paidamount"];
        $remainingamount=$_REQUEST["remainingamount"];
        $reason=$_REQUEST["reason"];
        $nextpaydate=$_REQUEST["nextpaydate"];
        $billstats=$_REQUEST["billstats"];
        $checkinvid=$obj->checkrecorsarepresentornot("vendorpaymenthistory","Billno",$billno);
        if($checkinvid=="yes")
        {
            
            if($remainingamount>"0")
            {
            $ansuphis=$obj->insertdb("vendorpaymenthistory","VendorId",$vendid,"Billno",$billno,"NextPayDate",$nextpaydate,"PreviousPaymentDate",$curdate,"Reason",$reason,"PaymentRemaining",$remainingamount,"PaymentDate",$curdate,"TotalAmount",$totalamount,"PaidAmount",$paidamount,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
                $ansupinv=mysql_query("update purchasebills set BillingStatus='1',RemainingAmount='".$remainingamount."',DueDate='".$nextpaydate."',PaymentDate='".$curdate."' where BillNo='".$billno."'");
                
                 if($ansuphis=="yes" and $ansupinv=="1")
                 {
                     echo "<script>alert('Payment Successfully updated');</script>";
                     echo "<script>window.location='vendorpayment.php';</script>";
                 }
                 else
                 {
                     echo "<script>alert('Something went wrong, Please try again !!!!!');</script>";    
                     echo "<script>window.location='vendorpayment.php';</script>";
                 }
            }
            else
            {
            $ansupinv=mysql_query("update purchasebills set BillingStatus='2',RemainingAmount='".$remainingamount."',DueDate='".$nextpaydate."',PaymentDate='".$curdate."' where BillNo='".$billno."'");
                
            $ansuphis=$obj->insertdb("vendorpaymenthistory","VendorId",$vendid,"Billno",$billno,"NextPayDate",$nextpaydate,"PaymentDate",$curdate,"PreviousPaymentDate",$curdate,"Reason",$reason,"PaymentRemaining",$remainingamount,"TotalAmount",$totalamount,"PaidAmount",$paidamount,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);  
                if($ansuphis=="yes" and $ansupinv=="1")
                 {
                     echo "<script>alert('Payment completely paid');</script>";
                     echo "<script>window.location='vendorpayment.php';</script>";
                 }
                 else
                 {
                     echo "<script>alert('Something went wrong, Please try again !!!!!');</script>";    
                     echo "<script>window.location='vendorpayment.php';</script>";
                 }
            }
        }
        else
        {
            $ans=$obj->insertdb("vendorpaymenthistory","VendorId",$vendid,"Billno",$billno,"NextPayDate",$nextpaydate,"PreviousPaymentDate",$curdate,"Reason",$reason,"PaymentRemaining",$remainingamount,"PaymentDate",$curdate,"TotalAmount",$totalamount,"PaidAmount",$paidamount,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
             if($remainingamount=="0")
            {
                $ansupinv=mysql_query("update purchasebills set BillingStatus='2',RemainingAmount='".$remainingamount."',DueDate='".$curdate."',PaymentDate='".$curdate."' where Billno='".$billno."'");
             }
            else
            {
                $ansupinv=mysql_query("update purchasebills set BillingStatus='1',RemainingAmount='".$remainingamount."',DueDate='".$nextpaydate."',PaymentDate='".$curdate."' where Billno='".$billno."'");
            }
            if($ans=="yes" and $ansupinv=="1")
            {
                echo "<script>alert('Payment Successfully inserted');</script>";
                echo "<script>window.location='vendorpayment.php';</script>";
            }
            else
            {
                echo "<script>alert('Something went wrong, Please try again !!!!!');</script>";    
                echo "<script>window.location='vendorpayment.php';</script>";
            }
            
        }    
    }
}
?>