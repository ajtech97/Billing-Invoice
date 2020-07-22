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

$CId=$_REQUEST["cid"];
if(isset($_REQUEST["submit"]))
    {
        $fname=addslashes($_REQUEST["fname"]);
        $lname=addslashes($_REQUEST["lname"]);
        $custfullname=$_REQUEST["fname"]."".$_REQUEST["lname"];
        $custfn=str_replace(' ','',$custfullname);
        $email=addslashes($_REQUEST["email"]);
        $city=addslashes($_REQUEST["city"]);
        $address=addslashes($_REQUEST["address"]);
        $mobno=$_REQUEST["mobno"];
        $anomobno=addslashes($_REQUEST["anomobno"]);
        $state=addslashes($_REQUEST["state"]);
        $country=addslashes($_REQUEST["country"]);
//        $photo=$_REQUEST["photo"];
        $aadharcard=$_REQUEST["aadharcard"];
    

$tablename="customer";
//$columnname="Emailid";
$colmob="Mobile";
//$colmob2="Mobile2";


//$em=$obj->checkemailarepresentornot($tablename,$columnname,$email);
$mobnoc=$obj->checkmobnoarepresentornotcustomer($tablename,$colmob,$mobno);
//   $em=="no" and  
if($mobnoc=="no")
{
    $photo=$obj->file_upload_function("customerphoto","CustomerImages");
    
   $ans=$obj->insertdb("customer","FName",$fname,"LName",$lname,"FullName",$custfn,"Address",$address,"City",$city,"Emailid",$email,"Mobile",$mobno,"Mobile2",$anomobno,"Photo",$photo,"State",$state,"Country",$country,"AadharCard",$aadharcard,"cust_display_or_not","YES","CurrDateTime",$curdate." ".$curtime,"IPAddress",$ip);
}
else
{
    echo "<script>alert('Mobile No Already Exist');</script>";
}
    
    
// echo "<script>alert('$mobno');</script>";
//     if($mobno==10)
//     {
//     $ans=$obj->insertdb("customer","FName",$fname,"LName",$lname,"Address",$address,"City",$city,"Emailid",$email,"Mobile",$mobno,"Mobile2",$anomobno,"Photo",$photo,"State",$state,"Country",$country,"AadharCard",$aadharcard,"cust_display_or_not","YES","CurrDateTime",$curdate." ".$curtime,"IPAddress",$ip);
//     }
//     else
//     {//
//         echo "<script>alert('Please Enter 10 Digit Mobile No');</script>";   
//     }
    
    if($ans=="yes")
    {
        echo "<script>alert('Customer Added Successfully');</script>";
        echo "<script>window.location='addcustomer.php';</script>";
    }
    else
    {
        echo "<script>alert('Customer Add Failed');</script>";    
        echo "<script>window.location='addcustomer.php';</script>";
    }
    }

    

if(isset($_REQUEST["updatedata"]))
    {
   
        $fname=addslashes($_REQUEST["fname"]);
        $lname=addslashes($_REQUEST["lname"]);
        $custfullname=$_REQUEST["fname"]."".$_REQUEST["lname"];
        $custfn=str_replace(' ','',$custfullname);
        $email=addslashes($_REQUEST["email"]);
        $city=addslashes($_REQUEST["city"]);
        $address=addslashes($_REQUEST["address"]);
        $mobno=$_REQUEST["mobno"];
        $anomobno=addslashes($_REQUEST["anomobno"]);
        $state=addslashes($_REQUEST["state"]);
        $country=addslashes($_REQUEST["country"]);
        $aadharcard=$_REQUEST["aadharcard"];
        
    
$tablename="customer";
//$columnname="Emailid";
$colmob="Mobile";
//$colmob2="Mobile2";


//$em=$obj->checkemailarepresentornot($tablename,$columnname,$email);
$mobnoc=$obj->checkcustmobnoarepresentornot($tablename,$colmob,$mobno,$CId);
//   $em=="no" and  
if($mobnoc=="no")
{
    
    if($_FILES['customerphoto']['name']!="")
    {
    $photo=$obj->file_upload_function("customerphoto","CustomerImages");
    $ans=$obj->updatecustomerdata($tablename,$fname,$lname,$custfn,$email,$city,$address,$mobno,$anomobno,$state,$country,$photo,$aadharcard,$CId);
    }
    else
    {
        $ans=$obj->updatecustomerdatawithoutphoto($tablename,$fname,$lname,$custfn,$email,$city,$address,$mobno,$anomobno,$state,$country,$aadharcard,$CId);
    }
}
else
{
     echo "<script>alert('Mobile No Already Exist');</script>";
}
    if($ans==1)
    {
        echo "<script>alert('Customer Updated Successfully');</script>";
        echo "<script>window.location='addcustomer.php';</script>";
    }
    else
    {
        echo "<script>alert('Customer Update Failed');</script>";
        echo "<script>window.location='addcustomer.php';</script>";
    }
}
}
    ?>
   