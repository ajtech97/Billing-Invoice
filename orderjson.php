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

//$eid=$_REQUEST["editid"];
//$invoiceid=$_REQUEST["invid"];

//echo "<script>alert('$invoicenoo');</script>";

$data='{
	"records": [';

//SELECT *,GROUP_CONCAT(`EmpId`) AS EmployeeId FROM `invoice_table_data` GROUP BY EmpId;
$query1=mysql_query("select * from order_table_data where order_del_yes_no='YES' order by OrderNo asc");
//$query1=mysql_query("select * from invoice_table_data where invoice_del_yes_no='YES' GROUP BY `InvoiceNo` order by InvoiceNo asc");
while($row=mysql_fetch_array($query1))
{
    $empid=$row["EmpId"];
    $empname=$obj->getemployeename($empid);

    $orderid=$row["OId"];
    $orderno=$row['OrderNo'];
    $orderdate=date("d-m-Y",strtotime($row['ODate']));

    $custid=$row['CustId'];
    $cust=$obj->custname($custid);
    $custmob=$obj->getcustmobno($custid);
    
    $totalamt=$row['TotalAmount'];
    
    $data.= '{"OrderId":"'.$orderid.'","EmpName":"'.ucwords($empname).'","OrderNo":"'.$orderno.'","CustName":"'.ucwords($cust).'","CustMobNo":"'.$custmob.'","OrderDate":"'.$orderdate.'","TotalAmount":"'.$totalamt.'"},';
}


$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
