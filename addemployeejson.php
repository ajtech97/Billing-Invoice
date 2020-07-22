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
//$counter=1;
$query=mysql_query("select * from employee where emp_display_or_not like 'YES' order by (CurrDateTime)");
while($row=mysql_fetch_array($query))
{
    
    $empid=$row['EmpId'];
    $empname=$row['EmpName'];
    $email= $row['Email'];
    $mobno= $row['MobileNo'];
    $address=preg_replace( "/\r|\n/"," ",$row["Address"]);
//    $address= $row["Address"];
    $password= $row["Password"];
    $confpassword= $row["ConfPassword"];
    $photo= $row["EmpPhoto"];
//    $currdate=$row['CurrDateTime'];
     $currdate=date("d-m-Y h:i:s A",strtotime($row['CurrDateTime']));
    
    $data.= '{"EmpId":"'.$empid.'","EmpName":"'.ucwords($empname).'","Email":"'.$email.'","MobileNo":"'.$mobno.'","photo":"'.$photo.'","Address":"'.$address.'","Password":"'.$password.'","ConfPassword":"'.$confpassword.'","CurrDateTime":"'.$currdate.'"},';
//    $counter++;
}
$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
