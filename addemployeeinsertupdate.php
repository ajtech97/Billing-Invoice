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




if(isset($_REQUEST["insertdata"]))
    {
        $empname=addslashes($_REQUEST["empname"]);
        $email=addslashes($_REQUEST["email"]);
        $mobno=$_REQUEST["mobno"];
        $password=addslashes(md5($_REQUEST["password"]));
        $confpassword=addslashes(md5($_REQUEST["confpassword"]));
        $eaddress=addslashes($_REQUEST["eaddress"]);
        
$tablename="employee";
//$columnname="Email";
$colmob="MobileNo";


//$em=$obj->checkemailarepresentornot($tablename,$columnname,$email);
$mobnoe=$obj->checkmobnoarepresentornotemployee($tablename,$colmob,$mobno);
//    $em=="no"
//     and strlen($password)>=6
if($mobnoe=="no")
{
    if($password==$confpassword)
    {
    $photo=$obj->file_upload_function("employeephoto","EmployeeImages");
    
   $ans=$obj->insertdb("employee","EmpName",$empname,"Email",$email,"MobileNo",$mobno,"Password",$password,"ConfPassword",$confpassword,"Address",$eaddress,"EmpPhoto",$photo,"emp_display_or_not","YES","CurrDateTime",$curdate." ".$curtime,"IPAddress",$ip);
    }
}
else
{
//    echo "<script>alert('Email or Mobile No Already Exist');</script>";
    echo "<script>alert('Mobile No Already Exist');</script>";
}
    
    
    if($ans=="yes")
    {
        echo "<script>alert('Employee Added Successfully');</script>";
        echo "<script>window.location='addemployee.php';</script>";
    }
    else
    {
        echo "<script>alert('Employee Add Failed');</script>";    
        echo "<script>window.location='addemployee.php';</script>";
    }
    }


    
$empid=$_REQUEST["EmpId"];

if(isset($_REQUEST["updatedata"]))
    {
        $empname=addslashes($_REQUEST["empname"]);
        $email=addslashes($_REQUEST["email"]);
        $mobno=$_REQUEST["mobno"];
//        $password=addslashes(md5($_REQUEST["password"]));
        $eaddress=addslashes($_REQUEST["eaddress"]);
    
$tablename="employee";
//$columnname="Email";
$colmob="MobileNo";

$mobnoc=$obj->checkempmobnoarepresentornot($tablename,$colmob,$mobno,$empid);

if($mobnoc=="no")
{
    if($_FILES['employeephoto']['name']!="")
    {
    $photo=$obj->file_upload_function("employeephoto","EmployeeImages");
    
    $ans=$obj->updateemployeedata($tablename,$empname,$email,$mobno,$eaddress,$photo,$empid);
    }
    else
    {
        $ans=$obj->updateemployeedatawithoutphoto($tablename,$empname,$email,$mobno,$eaddress,$empid);
    }
}
else
{
     echo "<script>alert('Mobile No Already Exist');</script>";
}
    if($ans==1)
    {
        echo "<script>alert('Employee Updated Successfully');</script>";
        echo "<script>window.location='addemployee.php';</script>";
    }
    else
    {
        echo "<script>alert('Employee Update Failed');</script>";
        echo "<script>window.location='addemployee.php';</script>";
    }
}
}
    ?>
   

