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
//$eid=$_REQUEST["editid"];
$invoiceid=$_REQUEST["invi"];

//echo "<script>alert('$invoicenoo');</script>";

$data='{
	"records": [';

$query1=mysql_query("select Invphoto from invoices where InvId='$invoiceid'");
$row1=mysql_fetch_array($query1);
$photo=$row1["Invphoto"];    
    
    
$query=mysql_query("select * from invoice_product_data where InvId='$invoiceid'");

while($row=mysql_fetch_array($query))
{
    $count++;

    $invid=$row["InvId"];
    $invoiceno=$row['InvoiceNo'];
    $invoicedate=$row['InvoiceDate'];
    $duedate=$row['DueDate'];
    $custid=$row['CustId'];
    $cust=$obj->custname($custid);
    $totalamt=$row['TotalAmount'];
    $invoicestatus=$row['InvoiceStatus'];
    $productname=$row['ProductName'];
    $prdctid=$row['InvDataId'];
    $quantity=$row['Quantity'];
    $amount=$row['Amount'];
    $subtotal=$row['SubTotal'];
    $discount=$row['Discount'];
    $discounttype=$row['Disc_Type'];
    $changeproprice=$row['ChangeProPrice'];
//    $photo=$row['Invphoto'];

    $data.= '{"InvoiceId":"'.$invid.'","ChangeProPrice":"'.$changeproprice.'","InvoiceNo":"'.$invoiceno.'","InvoiceDate":"'.$invoicedate.'","photo":"'.$photo.'","ProductID":"'.$prdctid.'","DueDate":"'.$duedate.'","CustId":"'.$custid.'","CustName":"'.$cust.'","SubTotal":"'.$subtotal.'","TotalAmount":"'.$totalamt.'","InvoiceStatus":"'.$invoicestatus.'","ProductName":"'.$productname.'","Quantity":"'.$quantity.'","Amount":"'.$amount.'","Discount":"'.$discount.'","Discounttype":"'.$discounttype.'","counti":"'.$count.'"},';

}




$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
