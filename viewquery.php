<?php
    include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();

//    $query=mysql_query("drop view employee_assign_table");
//    echo $query;

//$query=mysql_query("create VIEW `employee_assign_table` AS select `invoices`.`InvId` AS `InvId`,`invoices`.`CustId` AS `CustId`,`inv_and_emp`.`EmpId` AS `EmpId`,`invoices`.`InvoiceNo` AS `InvoiceNo`,`invoices`.`InvoiceDate` AS `InvoiceDate`,`invoices`.`DueDate` AS `DueDate`,`invoices`.`Invphoto` AS `Invphoto`,`invoices`.`SGST` AS `SGST`,`invoices`.`CGST` AS `CGST`,`invoices`.`IGST` AS `IGST`,`invoices`.`SubTotal` AS `SubTotal`,`invoices`.`Discount` AS `Discount`,`invoices`.`Disc_Type` AS `Disc_Type`,`invoices`.`TotalAmount` AS `TotalAmount`,`invoices`.`RemainingAmount` AS `RemainingAmount`,`invoices`.`invoice_del_yes_no` AS `invoice_del_yes_no`,`invoices`.`InvoiceStatus` AS `InvoiceStatus`,`invoices`.`CurrDate` AS `CurrDate`,`invoices`.`CurrDateTime` AS `CurrDateTime`,`invoices`.`IpAddress` AS `IpAddress` from (`invoices` left join `inv_and_emp` on((`invoices`.`InvId` = `inv_and_emp`.`InvId`)))");
//echo $query;


//old ALTER ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employee_assign_table` AS select `invoices`.`InvId` AS `InvId`,`invoices`.`CustId` AS `CustId`,`invoices`.`InvoiceNo` AS `InvoiceNo`,`invoices`.`InvoiceDate` AS `InvoiceDate`,`invoices`.`DueDate` AS `DueDate`,`invoices`.`Invphoto` AS `Invphoto`,`invoices`.`SGST` AS `SGST`,`invoices`.`CGST` AS `CGST`,`invoices`.`IGST` AS `IGST`,`invoices`.`SubTotal` AS `SubTotal`,`invoices`.`Discount` AS `Discount`,`invoices`.`Disc_Type` AS `Disc_Type`,`invoices`.`TotalAmount` AS `TotalAmount`,`invoices`.`RemainingAmount` AS `RemainingAmount`,`invoices`.`invoice_del_yes_no` AS `invoice_del_yes_no`,`invoices`.`InvoiceStatus` AS `InvoiceStatus`,`invoices`.`CurrDate` AS `CurrDate`,`invoices`.`CurrDateTime` AS `CurrDateTime`,`invoices`.`IpAddress` AS `IpAddress` from `invoices` where (`invoices`.`Assign_Emp` = 'NO')

?>