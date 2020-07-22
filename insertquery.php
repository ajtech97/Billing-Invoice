<?php
   include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();

//$ans=mysql_query("INSERT INTO `bd`.`paymenthistory` (`CustId`, `InvId`, `EmpId`, `PreviousPaymentDate`, `NextPaymentDate`, `Reason`, `PaymentRemaining`, `TotalAmount`, `PaidAmount`, `CurrDateTime`,`IpAddress`) VALUES ('40', '25', '1', '2018-07-20', '2018-07-30','', '10100', '14100', '4000', '2018-07-29 11:28:00','1.186.109.189')");
//$ans=mysql_query("INSERT INTO `bd`.`paymenthistory` (`CustId`, `InvId`, `EmpId`, `PreviousPaymentDate`, `NextPaymentDate`, `Reason`, `PaymentRemaining`, `TotalAmount`, `PaidAmount`, `CurrDateTime`,`IpAddress`) VALUES ('41', '2', '1', '2018-06-20', '2018-07-30', '', '4000', '6290', '2290', '2018-07-29 01:10:00', '1.186.109.189')");
$ans=mysql_query("DELETE FROM `paymenthistory` WHERE `InvId`='2' order by `PHId` desc limit 1");
echo $ans;
?>

