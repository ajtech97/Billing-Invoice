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
//$mobileno_emp=$_SESSION['username'];
//$emp_ID=$obj->getemployeeEmpID($mobileno_emp);
$data='{
	"records": [';
    
$query=mysql_query("select *,DATEDIFF(DueDate,CURDATE()) as diff from purchase_table_data where purchase_del_yes_no='yes' and BillingStatus=0 ORDER BY DueDate ASC ");


while($row=mysql_fetch_array($query))
{
    
    $pid=$row['PBId'];
    $vid=$row['Vid'];
    $billno=$row['BillNo'];
    $vname=$obj->vendname($vid);
    $vcont=$obj->getvendorcontact($vid);
    
    $billdate= date("d-m-Y", strtotime($row['BillDate']));
    $billduedate= date("d-m-Y", strtotime($row['DueDate']));

    
    $billstatus= $row['BillingStatus'];
    $sgst= $row['SGST'];
    $cgst= $row['CGST'];
    $igst= $row['IGST'];
    $total= $row['RemainingAmount'];
    $orgTotal=$row['Total'];
    $currdate=$row['CurrDateTime'];
    $diff=$row['diff'];

    $data.= '{"datediff":"'.$diff.'","pid":"'.$pid.'","vid":"'.$vid.'","billno":"'.$billno.'","vname":"'.ucwords($vname).'","vcont":"'.$vcont.'","billdate":"'.$billdate.'","billduedate":"'.$billduedate.'","remAmount":"'.$total.'","orgTotal":"'.$orgTotal.'","SGST":"'.$sgst.'","CGST":"'.$cgst.'","IGST":"'.$igst.'","bilstatus":"'.$billstatus.'","CurrDateTime":"'.$currdate.'"},';

}
$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>