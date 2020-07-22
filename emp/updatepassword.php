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
        
        if(isset($_REQUEST['submit']))
        {
            $ppass=md5($_REQUEST['ppass']);
            $npass=md5($_REQUEST['npass']);
            $rnpass=md5($_REQUEST['rnpass']);
            if($npass!=$rnpass)
            {
                 echo "<script>alert('Enter Same password');window.location.href='accountsetting.php';</script>";
            }
            $ans=$obj->checkrecorsarepresentornot("users","pass",$ppass);
            if($ans==1)
            {
                $ans=$obj->updatedata("users","pass",$ppass,"pass",$rnpass);
                if($ans=="yes")
                {
                     echo "<script>alert('Password Successfully Updated.');window.location.href='accountsetting.php';</script>";
                }
            }
            else
            {
                echo "<script>alert('Enter Correct Previous Password.');window.location.href='accountsetting.php';</script>";
            }
        }
}
?>