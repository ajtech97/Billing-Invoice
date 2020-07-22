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
$empcount=0;
$BillNo=$_REQUEST["billno"];

$data='{
	"records": [';

$query=mysql_query("select * from purchase_bills_data where BillNo='$BillNo'");

while($row=mysql_fetch_array($query))
{
    $count++;
    
    $purid=$row["Purchaseid"];
    $billno=$row['BillNo'];
    $billdate=$row['BillDate'];
    $duedate=$row['DueDate'];
    $vendid=$row['VendorID'];
    $vendname=$obj->vendname($vendid);
    $totalamt=$row['Total'];
    $subtotal=$row['SubTotal'];
    $BillingStatus=$row['BillingStatus'];
    $productname=$row['ProductName'];
    $prdctid=$row['PurchaseDataId'];
    $quantity=$row['Quantity'];
    $amount=$row['Amount'];
    $discount=$row['Discount'];
    $discounttype=$row['Disc_Type'];
    $changeproprice=$row['ChangeProPrice'];
    
    $data.= '{"Purchaseid":"'.$purid.'","ChangeProPrice":"'.$changeproprice.'","BillNo":"'.$billno.'","BillDate":"'.$billdate.'","DueDate":"'.$duedate.'","PurchaseDataId":"'.$prdctid.'","VendorID":"'.$vendid.'","VendorName":"'.$vendname.'","SubTotal":"'.$subtotal.'","TotalAmount":"'.$totalamt.'","BillingStatus":"'.$BillingStatus.'","ProductName":"'.$productname.'","Quantity":"'.$quantity.'","Amount":"'.$amount.'","Discount":"'.$discount.'","Discounttype":"'.$discounttype.'","counti":"'.$count.'"},';

}

$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
