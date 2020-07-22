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

$query=mysql_query("select * from vendor where ven_display_or_not like 'YES' order by (CurrDateTime)");
while($row=mysql_fetch_array($query))
{
    $vid=$row['VId'];
    $vfname= $row['VFName'];
    $vlname= $row['VLName'];
    $vaddress= $row["VAddress"];
    $vmobile= $row["VMobile"];
    $vanomobile= $row["VAnotherContact"];
    $photo= $row["VPhoto"];
//    $currdate=$row['CurrDateTime'];
    
    
    $currdate=date("d-m-Y h:i:s A",strtotime($row['CurrDateTime']));
    
    $data.= '{"vid":"'.$vid.'","vfname":"'.ucwords($vfname).'","vlname":"'.ucwords($vlname).'","vaddress":"'.$vaddress.'","vmobile":"'.$vmobile.'","vanomobile":"'.$vanomobile.'","VPhoto":"'.$photo.'","date":"'.$currdate.'"},';
//    $counter++;
}
$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
