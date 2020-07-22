<?php session_start();?>
    <?php error_reporting(0);

if($_SESSION['emp_username']=="")
{
    header("location:login.php");   
}
else{
    include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();
    

    $mobileno_emp=$_SESSION['emp_username'];
    $emp_ID=$obj->getemployeeEmpID($mobileno_emp);

    $ip=$obj->ipaddress();

 date_default_timezone_set('Asia/kolkata');
                $curdate=date('Y-m-d');
                $curtime=date('H:i:s');


if(isset($_REQUEST["submit"]))
    {
        $invid=$_REQUEST['InvId'];
        $custid=$_REQUEST['custid'];
        $empid=$_REQUEST['employeeid'];
        $totalamount=$_REQUEST["totalamount"];
        $paidamount=$_REQUEST["paidamount"];
        $remainingamount=$_REQUEST["remainingamount"];
        $reason=addslashes($_REQUEST["reason"]);
        $nextpaydate=$_REQUEST["nextpaydate"];
    
    
        $checkinvid=$obj->checkrecorsarepresentornot("paymenthistory","InvId",$invid);
        if($checkinvid=="yes")
        {
            
            
            if($remainingamount>"0")
            {
                
            $ansuphis=$obj->insertdb("paymenthistory","CustId",$custid, "InvId",$invid, "EmpId",$emp_ID,"NextPaymentDate",$nextpaydate,"PreviousPaymentDate",$curdate,"Reason",$reason,"PaymentRemaining",$remainingamount,"PaymentDate",$curdate,"TotalAmount",$totalamount,"PaidAmount",$paidamount,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
               $ansupinv=mysql_query("update invoices set InvoiceStatus='1',RemainingAmount='".$remainingamount."',DueDate='".$nextpaydate."',PaymentDate='".$curdate."' where InvId='".$invid."'");
                
                 if($ansuphis=="yes" and $ansupinv=="1")
                 {
                     echo "<script>alert('Payment Successfully updated');</script>";
                     echo "<script>window.location='index.php';</script>";
                 }
                 else
                 {
                     echo "<script>alert('Something went wrong, Please try again !!!!!');</script>";    
                     echo "<script>window.location='index.php';</script>";
                 }
            }
            else
            {
                $ansuphis=$obj->insertdb("paymenthistory","CustId",$custid, "InvId",$invid, "EmpId",$emp_ID,"PreviousPaymentDate",$curdate,"NextPaymentDate",$nextpaydate,"Reason",$reason,"PaymentDate",$curdate,"PaymentRemaining",$remainingamount,"TotalAmount",$totalamount,"PaidAmount",$paidamount,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
                $ansupinv=mysql_query("update invoices set InvoiceStatus='2',RemainingAmount='".$remainingamount."',DueDate='".$nextpaydate."',PaymentDate='".$curdate."' where InvId='".$invid."'");
                if($ansuphis=="yes" and $ansupinv=="1")
                 {
                     echo "<script>alert('Payment completely paid');</script>";
                     echo "<script>window.location='index.php';</script>";
                 }
                 else
                 {
                     echo "<script>alert('Something went wrong, Please try again !!!!!');</script>";    
                     echo "<script>window.location='index.php';</script>";
                 }
            }
        }
        else
        {
            $ans=$obj->insertdb("paymenthistory","CustId",$custid,"InvId",$invid, "EmpId",$emp_ID,"NextPaymentDate",$nextpaydate,"PreviousPaymentDate",$curdate,"Reason",$reason,"PaymentRemaining",$remainingamount,"PaymentDate",$curdate,"TotalAmount",$totalamount,"PaidAmount",$paidamount,"CurrDateTime",$curdate." ".$curtime,"IpAddress",$ip);
             if($remainingamount=="0")
            {
                 $ansupinv=mysql_query("update invoices set InvoiceStatus='2',RemainingAmount='".$remainingamount."',DueDate='".$curdate."',PaymentDate='".$curdate."' where InvId='".$invid."'");
             }
            else
            {
                $ansupinv=mysql_query("update invoices set InvoiceStatus='1',RemainingAmount='".$remainingamount."',DueDate='".$nextpaydate."',PaymentDate='".$curdate."' where InvId='".$invid."'");
            }
            if($ans=="yes" and $ansupinv=="1")
            {
                echo "<script>alert('Payment Successfully inserted');</script>";
                echo "<script>window.location='index.php';</script>";
            }
            else
            {
                echo "<script>alert('Something went wrong, Please try again !!!!!');</script>";    
                echo "<script>window.location='index.php';</script>";
            }
        }    
    }
}
?>
