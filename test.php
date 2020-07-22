<?php

include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();



//$query=mysql_query("alter table customer add FullName varchar(255)");
//echo $query;


//$query=mysql_query("select CustId,FName,LName from customer where cust_display_or_not='yes'");
//while($row=mysql_fetch_array($query))
//{
//    
//    $custid=$row["CustId"];
//    $custfullname=$row["FName"]."".$row["LName"];
//    $custfn=str_replace(' ','',$custfullname);
//
//    $qu=mysql_query("update customer set FullName='$custfn' where CustId=$custid");
//    echo $qu;
//}


//$query=mysql_query("alter table vendor add FullName varchar(255)");
//echo $query;

//$query=mysql_query("select VId,VFName,VLName from vendor where ven_display_or_not='yes'");
//
//while($row=mysql_fetch_array($query))
//{
//    
//    $vid=$row["VId"];
//    $vendfullname=$row["VFName"]."".$row["VLName"];
//    $venfn=str_replace(' ','',$vendfullname);
//
//    $qu=mysql_query("update vendor set FullName='$venfn' where VId=$vid");
//    echo $qu;
//}

//$query=mysql_query("delete from customer where CustId=17");
//echo $query;

/**/

//$query=mysql_query("delete from invoicedata where CurrDate between '2017-01-01' and '2018-07-13'");
//select * from invoices where `InvoiceDate` between '2018-07-14' and '2018-10-28'
//$query=mysql_query("delete from paymenthistory where InvoiceDate between '2017-01-01 00:00:00' and '2018-07-13 00:00:00'");
//$query=mysql_query("delete from inv_and_emp where InvId between 1 and 73");
//1-7
//$query=mysql_query("delete from purchasebills where CurrDate between '2017-01-01' and '2018-07-13'");
//echo $query;

//$str = "Hari om TradersVikas";
//echo str_replace(' ','',$str);

//$query=mysql_query("truncate table adminlogs");
//$query=mysql_query("truncate table assigncustomers");
//$query=mysql_query("truncate table employeelogs");
//$query=mysql_query("truncate table invoicedata");
//$query=mysql_query("truncate table inv_and_emp");
//$query=mysql_query("truncate table orderdata");
//$query=mysql_query("truncate table paymenthistory");
//$query=mysql_query("truncate table purchasebilldata");
//$query=mysql_query("truncate table vendorpaymenthistory");
echo $query;
?>