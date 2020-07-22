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

$count=$_REQUEST['val'];
$_SESSION['display']=$_SESSION['display']+$count;
$data='{
	"records": [';
//$counter=1;
$query=mysql_query("select * from customer where cust_display_or_not like 'YES' order by (CurrDateTime)");
while($row=mysql_fetch_array($query))
{
    
    $custid=$row['CustId'];
    $fname= $row['FName'];
    $lname= $row['LName'];
    $address=preg_replace( "/\r|\n/"," ",$row["Address"]);
//    $address= $row["Address"];
    $mobile= $row["Mobile"];
    $mobile2= $row["Mobile2"];
    $aadhar= $row["AadharCard"];
    $photo= $row["Photo"];
    $city= $row["City"];
    $emailid= $row['Emailid'];
//    $currdate=$row['CurrDateTime'];
    
//    mob2
//aadhar
//pan
//photo
    $currdate=date("d-m-Y h:i:s A",strtotime($row['CurrDateTime']));
    
    $data.= '{"CustID":"'.$custid.'","date":"'.$currdate.'","mob1":"'.$mobile.'","mob2":"'.$mobile2.'","aadhar":"'.$aadhar.'","photo":"'.$photo.'","fname":"'.ucwords($fname).'","lname":"'.ucwords($lname).'","add":"'.$address.'","city":"'.$city.'","email":"'.$emailid.'","currdate":"'.$currdate.'"},';
//    $counter++;
}
$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
