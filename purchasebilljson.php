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

$data='{
	"records": [';


$query1=mysql_query("select * from purchase_table_data where purchase_del_yes_no='YES' order by BillNo asc");
while($row=mysql_fetch_array($query1))
{
    
    
    $billid=$row['PBId'];
    $billno=$row['BillNo'];
    $billdate=date("d-m-Y",strtotime($row['BillDate']));
    $duedate=date("d-m-Y",strtotime($row['DueDate']));
    $vendid=$row['Vid'];
    $vend=$obj->vendname($vendid);
    $vendmobno=$obj->getvendmobno($vendid);
    $totalamt=$row['Total'];
    $remamt=$row['RemainingAmount'];
    $billstatus=$row['BillingStatus'];
    $billingstatus=$obj->getbillingstatus($billno);
    $discount=$row['Discount'];
    
        $data.= '{"BillNo":"'.$billno.'","BillDatet":"'.$billdate.'","DueDatet":"'.$duedate.'","VendorNamet":"'.ucwords($vend).'","VendorMobileNo":"'.$vendmobno.'","TotalAmountt":"'.$totalamt.'","RemainingAmount":"'.$remamt.'","BillStatus":"'.$billingstatus.'"},';

}

//$query2=mysql_query("select EmpId from inv_and_emp where InvId=$invoiceid");
//while($row=mysql_fetch_array($query1))
    

$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
