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
    
$mob=$_SESSION['emp_username'];

$data='{
	"records": [';

$query1=mysql_query("select * from order_table_data where EmpMobileNo='$mob' and Emp_Order_Yes_No='YES' order by OrderNo asc");
while($row=mysql_fetch_array($query1))
{
    $empid=$row["EmpId"];

    $orderid=$row["OId"];
    $orderno=$row['OrderNo'];
    $orderdate=date("d-m-Y",strtotime($row['ODate']));

    $custid=$row['CustId'];
    $cust=$obj->custname($custid);
    $custmob=$obj->getcustmobno($custid);
    
    $totalamt=$row['TotalAmount'];
    
    $data.= '{"OrderId":"'.$orderid.'","OrderNo":"'.$orderno.'","CustName":"'.ucwords($cust).'","CustMobNo":"'.$custmob.'","OrderDate":"'.$orderdate.'","TotalAmount":"'.$totalamt.'"},';
}


$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
