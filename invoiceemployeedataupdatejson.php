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

$empcount=0;
//$eid=$_REQUEST["editid"];
$invoiceid=$_REQUEST["einvi"];
//$invoiceid="21";

//echo "<script>alert('$invoicenoo');</script>";

$data='{
	"records": [';


$query=mysql_query("select * from inv_and_emp where InvId='$invoiceid'");

while($row=mysql_fetch_array($query))
{
    $empcount++;

    $empid=$row["EmpId"];
    $invempid=$row["InvEmpId"];
    $empname=$obj->employeename($empid);

//    $empid=$row["InvId"];

    $data.= '{"EmpId":"'.$empid.'","InvEmpId":"'.$invempid.'","EmpName":"'.$empname.'","empcounti":"'.$empcount.'"},';

}


$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
