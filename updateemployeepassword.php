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

$empid=$_REQUEST["UpdEmpId"];

//echo "<script>alert('$empid');</script>";


if(isset($_REQUEST["updatepass"]))
{
        $pass=addslashes(md5($_REQUEST["passwordd"]));
        $confpass=addslashes(md5($_REQUEST["confirmpasswordd"]));
    
    
    
    $tablename="employee";
        if($pass==$confpass)
        {
            $ans=$obj->updateemplyeepassword($tablename,$pass,$confpass,$empid);
//            $ans=$obj->insertdb("employee","Password",$pass,"LName","CurrDateTime",$curdate." ".$curtime,"IPAddress",$ip);
        }
        else
        {
        echo "<script>alert('Password Changed Failed');</script>";
        echo "<script>window.location='addemployee.php';</script>"; 
        }
    
    if($ans==1)
    {
        echo "<script>alert('Password Changed Successfully');</script>";
        echo "<script>window.location='addemployee.php';</script>";
    }
    else
    {
        echo "<script>alert('Password Changed Failed');</script>";    
        echo "<script>window.location='addemployee.php';</script>";
    }
}
}
    ?>
   