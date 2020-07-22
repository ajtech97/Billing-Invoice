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

$ip=$obj->ipaddress();

date_default_timezone_set('Asia/kolkata');
                $curdate=date('Y-m-d');
                $curtime=date('H:i:s');

if(isset($_REQUEST["insertdata"]))
{
    $invoiceno=$_REQUEST["invno"];
  
    $inid=$obj->getinvoiceid($invoiceno);
    
//    $tablename="invoices";
//    $empyesno="YES";
    
    $empcount=$_REQUEST["emptotalcount"];
        for($i=0;$i<$empcount;$i++)
        {
            $j=$i+1;
            $assignempid[$i]=$_REQUEST["employee".$j];
        }
    
    for($i=0;$i<$empcount;$i++)
    {        
        $ans3=$obj->insertdb("inv_and_emp","InvId",$inid,"EmpId",$assignempid[$i]);
//        $updateemployee=$obj->updateemployee($tablename,$empyesno,$inid);
    }

    if($ans3=="yes")
    {
        echo "<script>alert('Employee Assigned Successfully');</script>";
       
    }
    else
    {
        echo "<script>alert('Employee Assigned Failed');</script>";
    
    }
    

 echo "<script>window.location.href='assignemployee.php';</script>"; 

}
}

?>