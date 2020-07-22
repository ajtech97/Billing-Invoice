<?php
    include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();

//invoices,orders
//    $query=mysql_query("TRUNCATE TABLE  adminlogs");
//    $query=mysql_query("TRUNCATE TABLE  assigncustomers");
//    $query=mysql_query("TRUNCATE TABLE  employeelogs");
//    $query=mysql_query("TRUNCATE TABLE  invoicedata");
//    $query=mysql_query("TRUNCATE TABLE  invoices");
//    $query=mysql_query("TRUNCATE TABLE  inv_and_emp");
//    $query=mysql_query("TRUNCATE TABLE  orderdata");
//    $query=mysql_query("TRUNCATE TABLE  orders");
//    $query=mysql_query("TRUNCATE TABLE  paymenthistory");
//    $query=mysql_query("TRUNCATE TABLE  purchasebilldata");
//    $query=mysql_query("TRUNCATE TABLE  purchasebills");
//    $query=mysql_query("TRUNCATE TABLE  vendorpaymenthistory");
//    echo $query;

//    $query=mysql_query("ALTER TABLE invoices ADD PaymentDate date null;");
//    $query=mysql_query("ALTER TABLE purchasebills ADD PaymentDate date null;");
//    $query=mysql_query("ALTER TABLE paymenthistory ADD PaymentDate date null;");
//    $query=mysql_query("ALTER TABLE vendorpaymenthistory ADD PaymentDate date null;");
//echo $query;

    $query=mysql_query("ALTER VIEW `invoice_table_data` AS select `invoices`.`InvId` AS `InvId`,`invoices`.`CustId` AS `CustId`,`inv_and_emp`.`EmpId` AS `EmpId`,`invoices`.`InvoiceNo` AS `InvoiceNo`,`invoices`.`InvoiceDate` AS `InvoiceDate`,`invoices`.`DueDate` AS `DueDate`,`invoices`.`PaymentDate` AS `PaymentDate`,`invoices`.`SGST` AS `SGST`,`invoices`.`CGST` AS `CGST`,`invoices`.`IGST` AS `IGST`,`invoices`.`SubTotal` AS `SubTotal`,`invoices`.`Discount` AS `Discount`,`invoices`.`TotalAmount` AS `TotalAmount`,`invoices`.`RemainingAmount` AS `RemainingAmount`,`invoices`.`invoice_del_yes_no` AS `invoice_del_yes_no`,`invoices`.`InvoiceStatus` AS `InvoiceStatus`,`invoices`.`CurrDateTime` AS `CurrDateTime`,`invoices`.`IpAddress` AS `IpAddress` from (`invoices` left join `inv_and_emp` on((`invoices`.`InvId` = `inv_and_emp`.`InvId`)))");
    //$query=mysql_query("ALTER VIEW `purchase_table_data` AS select `purchasebills`.`PBId` AS `PBId`,`purchasebills`.`BillNo` AS `BillNo`,`purchasebills`.`Vid` AS `Vid`,`purchasebills`.`BillDate` AS `BillDate`,`purchasebills`.`DueDate` AS `DueDate`,`purchasebills`.`PaymentDate` AS `PaymentDate`,`purchasebills`.`SGST` AS `SGST`,`purchasebills`.`CGST` AS `CGST`,`purchasebills`.`IGST` AS `IGST`,`purchasebills`.`TotalTax` AS `TotalTax`,`purchasebills`.`Discount` AS `Discount`,`purchasebills`.`SubTotal` AS `SubTotal`,`purchasebills`.`Total` AS `Total`,`purchasebills`.`RemainingAmount` AS `RemainingAmount`,`purchasebills`.`BillingStatus` AS `BillingStatus`,`purchasebills`.`purchase_del_yes_no` AS `purchase_del_yes_no`,`purchasebills`.`CurrDateTime` AS `CurrDateTime`,`purchasebills`.`IpAddress` AS `IpAddress` from `purchasebills`");
    echo $query;
    
?>