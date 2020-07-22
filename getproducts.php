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

$vend=$_REQUEST["vend"];

$query=mysql_query("select * from vendor where cust_display_or_not like 'YES' and  VId='$vend'");
while($row=mysql_fetch_array($query))
{
    echo $vid=$row['VId'];
    echo $pid= $row['PId'];
//    $lname= $row['LName'];
//    $address= $row["Address"];
//    $mobile= $row["Mobile"];
//    $mobile2= $row["Mobile2"];
//    $aadhar= $row["AadharCard"];
//    $pancard= $row["PanCard"];
//    $photo= $row["Photo"];
//    $city= $row["City"];
//    $emailid= $row['Emailid'];
//    $custdob= $row['CustDOB'];
//    $pincode= $row['Pincode'];
//    $currdate=$row['CurrDate'];
//    
//    mob2
//aadhar
//pan
//photo
//    $currdate=date("d-m-Y",strtotime($row['currdate']));

//    echo "<script>alert('$vid');</script>";
//    echo "<script>alert('$pid');</script>";
    
//    $data.= '{"CustID":"'.$custid.'","date":"'.$currdate.'","mob1":"'.$mobile.'","mob2":"'.$mobile2.'","aadhar":"'.$aadhar.'","pan":"'.$pancard.'","photo":"'.$photo.'","fname":"'.$fname.'","lname":"'.$lname.'","add":"'.$address.'","city":"'.$city.'","pincode":"'.$pincode.'","email":"'.$emailid.'","currdate":"'.$currdate.'","dob":"'.$custdob.'"},';
//    $counter++;
}
}
?>