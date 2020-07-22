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
    
$invoiceid=$_REQUEST["invi"];

$data='{
	"records": ['; 
    
$query=mysql_query("select * from employee_assign_table where InvId='$invoiceid'");

while($row=mysql_fetch_array($query))
{
    $count++;

    $invid=$row["InvId"];
    $invoiceno=$row['InvoiceNo'];
    $empid=$row['EmpId'];
    $custid=$row['CustId'];

    $data.= '{"InvoiceId":"'.$invid.'","InvoiceNo":"'.$invoiceno.'","EmpId":"'.$empid.'","CustId":"'.$custid.'","counti":"'.$count.'"},';

}

$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
