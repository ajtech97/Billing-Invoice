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
$query=mysql_query("select count(*) as cou,CustId,SUM( TotalAmount ) as toamt,SUM( RemainingAmount ) as remamt from invoices where invoice_del_yes_no like 'YES' group by CustId  order by InvoiceNo asc");
while($row=mysql_fetch_array($query))
{
    
    $custid=$row['CustId'];
    $customername=$obj->custname($custid);
    $customermobile=$obj->getcustmobno($custid);
    $totalinvcount=$row['cou'];
    $totalamount=$row["toamt"];
    $remamount=$row["remamt"];
    
    $currdate=date("d-m-Y h:i:s A",strtotime($row['CurrDateTime']));
    
    $data.= '{"CustID":"'.$custid.'","date":"'.$currdate.'","customermob":"'.$customermobile.'","custname":"'.ucwords($customername).'","totalinvcount":"'.$totalinvcount.'","totalamount":"'.$totalamount.'","RemainingAmount":"'.$remamount.'"},';

}
$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
