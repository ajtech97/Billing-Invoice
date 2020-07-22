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



//SELECT *,GROUP_CONCAT(`EmpId`) AS EmployeeId FROM `invoice_table_data` GROUP BY EmpId;
//$query1=mysql_query("select *,GROUP_CONCAT(`EmpId`) AS EmployeeId from invoice_table_data where invoice_del_yes_no='YES' GROUP BY `InvoiceNo` order by InvoiceNo desc");
$query1=mysql_query("select *,GROUP_CONCAT(`EmpId`) AS EmployeeId from employee_assign_table where invoice_del_yes_no='YES' GROUP BY `InvoiceNo` order by InvoiceNo asc");
while($row=mysql_fetch_array($query1))
{
    $empnames="";
    $invoiceid=$row['InvId'];
    $empid=$row['EmployeeId'];
    $cars = array($empid);
    $myString = $empid;
    $myArray = explode(',', $myString);
   
    $arrlength = count($myArray);
    for($x = 0; $x < $arrlength; $x++) {
        $temp=$myArray[$x];
        $employeename=$obj->getemployeename($temp);
        $empnames.=$employeename.",";
    }
    if($x>0){$empnames=substr($empnames,0, -1);}
    
    $invoiceno=$row['InvoiceNo'];
//    $invoicedate=$row['InvoiceDate'];
        $invoicedate=date("d-m-Y",strtotime($row['InvoiceDate']));
//    $duedate=$row['DueDate'];
        $duedate=date("d-m-Y",strtotime($row['DueDate']));
    $custid=$row['CustId'];
    $cust=$obj->custname($custid);
    $custmob=$obj->getcustmobno($custid);
    $totalamt=$row['TotalAmount'];
    $remamt=$row['RemainingAmount'];
    $invoicestatus=$row['InvoiceStatus'];
    $invstatus=$obj->getinvoicestatus($invoiceid);
    $discount=$row['Discount'];
    $photo=$row['Invphoto'];
    
    $data.= '{"EmpNamet":"'.$empnames.'","InvoiceIdt":"'.$invoiceid.'","InvoiceNot":"'.$invoiceno.'","CustMobNo":"'.$custmob.'","InvoiceDatet":"'.$invoicedate.'","photo":"'.$photo.'","DueDatet":"'.$duedate.'","CustNamet":"'.ucwords($cust).'","TotalAmountt":"'.$totalamt.'","RemainingAmount":"'.$remamt.'","InvoiceStatust":"'.$invstatus.'","Discountt":"'.$discount.'"},';
//"EmpNamet":"'.$empnames.'",
}

//$query2=mysql_query("select EmpId from inv_and_emp where InvId=$invoiceid");
//while($row=mysql_fetch_array($query1))
    

$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
