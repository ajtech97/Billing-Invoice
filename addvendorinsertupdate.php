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

//$CId=$_REQUEST["cid"];

$VId=$_REQUEST["vid"];

if(isset($_REQUEST["submit"]))
    {
        $vfname=addslashes($_REQUEST["vfirstname"]);
        $vlname=addslashes($_REQUEST["vlastname"]);
        $vendfullname=$_REQUEST["vfirstname"]."".$_REQUEST["vlastname"];
        $vendfn=str_replace(' ','',$vendfullname);
        $vaddress=addslashes($_REQUEST["vaddress"]);
        $vmobno=$_REQUEST["mobno"];
        $vanomob=$_REQUEST["anomobno"];
        
$tablename="vendor";
$colmob="VMobile";
//$colmob2="VAnotherContact";
$mobnoc=$obj->checkmobnoarepresentornotvendor($tablename,$colmob,$vmobno);
//$mobno=$obj->checkmobnoarepresentornot($tablename,$colmob,$colmob2,$vmobno);
if($mobnoc=="no")
{
    $photo=$obj->file_upload_function("vendorphoto","VendorImages");
    
     $ans=$obj->insertdb("vendor","VFName",$vfname,"VLName",$vlname,"FullName",$vendfn,"VPhoto",$photo,"VAddress",$vaddress,"VMobile",$vmobno,"VAnotherContact",$vanomob,"ven_display_or_not","YES","CurrDateTime",$curdate." ".$curtime,"IPAddress",$ip);
}
else
{
    echo "<script>alert('Mobile No Already Exist');</script>";
}
    
    if($ans=="yes")
    {
        echo "<script>alert('Vendor Added Successfully');</script>";
        echo "<script>window.location='addvendor.php';</script>";
    }
    else
    {
        echo "<script>alert('Vendor Add Failed');</script>";    
        echo "<script>window.location='addvendor.php';</script>";
    }
    }


if(isset($_REQUEST["updatedata"]))
    {
        $vfname=addslashes($_REQUEST["vfirstname"]);
        $vlname=addslashes($_REQUEST["vlastname"]);
        $vendfullname=$_REQUEST["vfirstname"]."".$_REQUEST["vlastname"];
        $vendfn=str_replace(' ','',$vendfullname);
        $vaddress=addslashes($_REQUEST["vaddress"]);
        $vmobno=$_REQUEST["mobno"];
        $vanomob=$_REQUEST["anomobno"];
        
$tablename="vendor";
$colmob="VMobile";
//$colmob2="VAnotherContact";

$mobno=$obj->checkvendormobnoarepresentornot($tablename,$colmob,$vmobno,$VId);
if($mobno=="no")
{
    if($_FILES['vendorphoto']['name']!="")
    {
        $photo=$obj->file_upload_function("vendorphoto","VendorImages");
    
        $ans=$obj->updatevendordata($tablename,$vfname,$vlname,$vendfn,$photo,$vaddress,$vmobno,$vanomob,$VId);
    }
    else
    {
        $ans=$obj->updatevendordatawithoutphoto($tablename,$vfname,$vlname,$vendfn,$vaddress,$vmobno,$vanomob,$VId);
    }
}
else
{
     echo "<script>alert('Mobile No Already Exist');</script>";
}
    if($ans==1)
    {
        echo "<script>alert('Vendor Updated Successfully');</script>";
        echo "<script>window.location='addvendor.php';</script>";
    }
    else
    {
        echo "<script>alert('Vendor Update Failed');</script>";
        echo "<script>window.location='addvendor.php';</script>";
    }
}
}

    ?>
   