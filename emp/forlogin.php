<?php session_start();?>
<?php
if(isset($_REQUEST['login']))
{
   $username=$_REQUEST['username'];
   $password=md5($_REQUEST['password']);
    if($username!="" && $password!="")
    {
        include("Classes/db.class.php");
        $obj=new maindbfunctions();
        $obj->connect();
        
        $ip=$obj->ipaddress();

            date_default_timezone_set('Asia/kolkata');
                $curdate=date('Y-m-d');
                $curtime=date('H:i:s');
        
        include("Classes/user.class.php");
        $userobj=new user();
        $ans=$userobj->userlogin($username,$password);
        
        if($ans!="no")
        {
            $_SESSION['emp_username']=$username;
            
            $usermob=$_SESSION['emp_username'];
            $usern=$obj->getemployeename($usermob);
            $empid=$obj->getemployeeEmpID($usermob);
            
            $obj->insertdb("employeelogs","EmpId",$empid,"Username",$usern,"LoginDateTime",$curdate." ".$curtime,"IpAddress",$ip);
            header("location:loading.php");   
        }
        else
        {
            echo "<script>alert('Username or Password is wrong.');window.location.href='login.php';</script>";
        }
        
    }
    else
    {
        header("location:login.php");   
    }
}
else
{
    header("location:login.php");   
}
?>