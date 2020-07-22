<?php
session_start();
include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();

$eid=$_REQUEST["editid"];

$data='{
	"records": [';

if($eid==1)
{
$query=mysql_query("select * from invoice_product_data");
}

while($row=mysql_fetch_array($query))
{
    
    $invoiceno=$row['InvoiceNo'];
    $invoicedate=$row['InvoiceDate'];
    $duedate=$row['DueDate'];
    $custid=$row['CustId'];
    $cust=$obj->custname($custid);
    $totalamt=$row['TotalAmount'];
    $invoicestatus=$row['InvoiceStatus'];
    $productname=$row['ProductName'];
    $quantity=$row['Quantity'];
    $amount=$row['Amount'];
    $discount=$row['Discount'];
    
    $data.= '{"InvoiceNo":"'.$invoiceno.'","InvoiceDate":"'.$invoicedate.'","DueDate":"'.$duedate.'","CustName":"'.$cust.'","TotalAmount":"'.$totalamt.'","InvoiceStatus":"'.$invoicestatus.'","ProductName":"'.$productname.'","Quantity":"'.$quantity.'","Amount":"'.$amount.'","Discount":"'.$discount.'"},';

}

$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
?>