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
    
$data='{
	"records": [';

$query1=mysql_query("select * from users");
while($row=mysql_fetch_array($query1))
{
    $uid=$row["UId"];
    $name=$row["name"];
    $uname=$row['uname'];
    $mobileno=$row['mobileno'];
    $anomobileno=$row['AnotherMobileNo'];
    $address=$row['Address'];
    $emailid=$row['EmailId'];
    
    $data.= '{"userid":"'.$uid.'","name":"'.ucwords($name).'","username":"'.$uname.'","mobno":"'.$mobileno.'","anomobno":"'.$anomobileno.'","address":"'.$address.'","emailid":"'.$emailid.'"},';
}


$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
