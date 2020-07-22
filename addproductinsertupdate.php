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
        $pname=addslashes($_REQUEST["productname"]);
        $pprice=$_REQUEST["productprice"];
        $sprice=$_REQUEST["sellingproductprice"];
        
$tablename="product";
$columnname="PName";

 $pro=$obj->checkproductarepresentornot($tablename,$columnname,$pname);
   
    if($pro=="no")
    {
        $photo=$obj->file_upload_function("productphoto","ProductImages");
    
        $ans=$obj->insertdb("product","PName",$pname,"PPrice",$pprice,"SPPrice",$sprice,"PPhoto",$photo,"CurrDateTime",$curdate." ".$curtime,"IPAddress",$ip,"pro_display_or_not","YES");
    }
    else
    {
         echo "<script>alert('Product Already Exist');</script>";
    }
    
    if($ans=="yes")
    {
        echo "<script>alert('Product Added Successfully');</script>";
        echo "<script>window.location='addproduct.php';</script>";
    }
    else
    {
        echo "<script>alert('Product Add Failed');</script>";    
        echo "<script>window.location='addproduct.php';</script>";
    }
    }

$PId=$_REQUEST["pid"];

if(isset($_REQUEST["updatedata"]))
    {
    $pname=addslashes($_REQUEST["productname"]);
    $pprice=$_REQUEST["productprice"];
    $sprice=$_REQUEST["sellingproductprice"];
//    $pphoto=addslashes($_REQUEST["photo"]);
    
    $tablename="product";
    $columnname="PName";

    $pro=$obj->checkalreadyproductarepresentornot($tablename,$columnname,$pname,$PId);
   
    if($pro=="no")
    {
        if($_FILES['productphoto']['name']!="")
        {
        
        $photo=$obj->file_upload_function("productphoto","ProductImages");
        $ans=$obj->updateproductdata($tablename,$pname,$pprice,$sprice,$photo,$PId);
        }
        else
        {
        $ans=$obj->updateproductdatawithoutphoto($tablename,$pname,$pprice,$sprice,$PId);
        }
    }
    else
    {
        echo "<script>alert('Product Already Exist');</script>";
    }
    
    if($ans==1)
    {
        echo "<script>alert('Product Updated Successfully');</script>";
        echo "<script>window.location='addproduct.php';</script>";
    }
    else
    {
        echo "<script>alert('Product Update Failed');</script>";
        echo "<script>window.location='addproduct.php';</script>";
    }
}
}

    ?>
   