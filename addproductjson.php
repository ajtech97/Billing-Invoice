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

$query=mysql_query("select * from product where pro_display_or_not like 'YES' order by (CurrDateTime)");
while($row=mysql_fetch_array($query))
{
    $pid=$row['PId'];
    $pname= $row['PName'];
    $pprice= $row['PPrice'];
    $sprice= $row['SPPrice'];
    $pphoto= $row['PPhoto'];
//    $currdate=$row['CurrDateTime'];
    
//    date_default_timezone_set('Asia/kolkata');
    $currdate=date("d-m-Y h:i:s A",strtotime($row['CurrDateTime']));
    
    $data.= '{"pid":"'.$pid.'","pname":"'.ucwords($pname).'","pprice":"'.$pprice.'","sellingpprice":"'.$sprice.'","PPhoto":"'.$pphoto.'","date":"'.$currdate.'"},';
//    $counter++;
}
$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
