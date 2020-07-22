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

$count=0;
//$empcount=0;
//$eid=$_REQUEST["editid"];
$orderid=$_REQUEST["orderid"];
//$orderid="1";

//echo "<script>alert('$invoicenoo');</script>";
//create view order_product_data as select * from orderdata
$data='{
	"records": [';

$query=mysql_query("select * from order_product_data where OId='$orderid'");

while($row=mysql_fetch_array($query))
{
    $count++;

    $Oid=$row["OId"];
    $totalamt=$row['TotalAmount'];
    $productname=$row['ProductName'];
    $quantity=$row['Quantity'];
    $amount=$row['Amount'];
    $subtotal=$row['SubTotal'];
    $prdctid=$row['OrderDataId'];
    $custid=$row['CustId'];
    $cust=$obj->custname($custid);
    $changeproprice=$row['ChangeProPrice'];
    
    $data.= '{"OrderDataId":"'.$prdctid.'","ChangeProPrice":"'.$changeproprice.'","orderId":"'.$Oid.'","CustId":"'.$custid.'","CustName":"'.$cust.'","SubTotal":"'.$subtotal.'","TotalAmount":"'.$totalamt.'","ProductName":"'.$productname.'","Quantity":"'.$quantity.'","Amount":"'.$amount.'","counti":"'.$count.'"},';

}

$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
