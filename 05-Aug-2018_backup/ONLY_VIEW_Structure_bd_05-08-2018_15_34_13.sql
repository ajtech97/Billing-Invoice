

CREATE VIEW `employee_assign_table` AS select `invoices`.`InvId` AS `InvId`,`invoices`.`CustId` AS `CustId`,`inv_and_emp`.`EmpId` AS `EmpId`,`invoices`.`InvoiceNo` AS `InvoiceNo`,`invoices`.`InvoiceDate` AS `InvoiceDate`,`invoices`.`DueDate` AS `DueDate`,`invoices`.`Invphoto` AS `Invphoto`,`invoices`.`SGST` AS `SGST`,`invoices`.`CGST` AS `CGST`,`invoices`.`IGST` AS `IGST`,`invoices`.`SubTotal` AS `SubTotal`,`invoices`.`Discount` AS `Discount`,`invoices`.`Disc_Type` AS `Disc_Type`,`invoices`.`TotalAmount` AS `TotalAmount`,`invoices`.`RemainingAmount` AS `RemainingAmount`,`invoices`.`invoice_del_yes_no` AS `invoice_del_yes_no`,`invoices`.`InvoiceStatus` AS `InvoiceStatus`,`invoices`.`CurrDate` AS `CurrDate`,`invoices`.`CurrDateTime` AS `CurrDateTime`,`invoices`.`IpAddress` AS `IpAddress` from (`invoices` left join `inv_and_emp` on((`invoices`.`InvId` = `inv_and_emp`.`InvId`)));






CREATE VIEW `invoice_product_data` AS select `invoices`.`InvId` AS `InvId`,`invoices`.`CustId` AS `CustId`,`invoices`.`InvoiceNo` AS `InvoiceNo`,`invoices`.`InvoiceDate` AS `InvoiceDate`,`invoices`.`DueDate` AS `DueDate`,`invoices`.`Discount` AS `Discount`,`invoices`.`Disc_Type` AS `Disc_Type`,`invoices`.`SubTotal` AS `SubTotal`,`invoices`.`TotalAmount` AS `TotalAmount`,`invoices`.`InvoiceStatus` AS `InvoiceStatus`,`invoices`.`SGST` AS `SGST`,`invoices`.`IGST` AS `IGST`,`invoices`.`CGST` AS `CGST`,`invoices`.`CurrDateTime` AS `CurrDateTime`,`invoicedata`.`InvDataId` AS `InvDataId`,`invoicedata`.`ProductName` AS `ProductName`,`invoicedata`.`ChangeProPrice` AS `ChangeProPrice`,`invoicedata`.`ProductId` AS `ProductId`,`invoicedata`.`Quantity` AS `Quantity`,`invoicedata`.`Amount` AS `Amount` from (`invoices` join `invoicedata`) where (`invoices`.`InvId` = `invoicedata`.`InvId`);






CREATE VIEW `invoice_table_data` AS select `invoices`.`InvId` AS `InvId`,`invoices`.`CustId` AS `CustId`,`inv_and_emp`.`EmpId` AS `EmpId`,`invoices`.`InvoiceNo` AS `InvoiceNo`,`invoices`.`InvoiceDate` AS `InvoiceDate`,`invoices`.`DueDate` AS `DueDate`,`invoices`.`PaymentDate` AS `PaymentDate`,`invoices`.`SGST` AS `SGST`,`invoices`.`CGST` AS `CGST`,`invoices`.`IGST` AS `IGST`,`invoices`.`SubTotal` AS `SubTotal`,`invoices`.`Discount` AS `Discount`,`invoices`.`TotalAmount` AS `TotalAmount`,`invoices`.`RemainingAmount` AS `RemainingAmount`,`invoices`.`invoice_del_yes_no` AS `invoice_del_yes_no`,`invoices`.`InvoiceStatus` AS `InvoiceStatus`,`invoices`.`CurrDateTime` AS `CurrDateTime`,`invoices`.`IpAddress` AS `IpAddress` from (`invoices` left join `inv_and_emp` on((`invoices`.`InvId` = `inv_and_emp`.`InvId`)));






CREATE VIEW `order_product_data` AS select `orderdata`.`OrderDataId` AS `OrderDataId`,`orderdata`.`OId` AS `OId`,`orderdata`.`CustId` AS `CustId`,`orderdata`.`ProductName` AS `ProductName`,`orderdata`.`ChangeProPrice` AS `ChangeProPrice`,`orderdata`.`ProductId` AS `ProductId`,`orderdata`.`Quantity` AS `Quantity`,`orderdata`.`Amount` AS `Amount`,`orderdata`.`SubTotal` AS `SubTotal`,`orderdata`.`TotalAmount` AS `TotalAmount`,`orderdata`.`CurrDate` AS `CurrDate`,`orderdata`.`CurrDateTime` AS `CurrDateTime`,`orderdata`.`IpAddress` AS `IpAddress` from `orderdata`;






CREATE VIEW `order_table_data` AS select `orders`.`OId` AS `OId`,`orders`.`OrderNo` AS `OrderNo`,`orders`.`EmpId` AS `EmpId`,`orders`.`EmpMobileNo` AS `EmpMobileNo`,`orders`.`ODate` AS `ODate`,`orders`.`CustId` AS `CustId`,`orders`.`CustName` AS `CustName`,`orders`.`SubTotal` AS `SubTotal`,`orders`.`TotalAmount` AS `TotalAmount`,`orders`.`order_del_yes_no` AS `order_del_yes_no`,`orders`.`Emp_Order_Yes_No` AS `Emp_Order_Yes_No`,`orders`.`CurrDate` AS `CurrDate`,`orders`.`CurrDateTime` AS `CurrDateTime`,`orders`.`IpAddress` AS `IpAddress` from `orders`;






CREATE VIEW `purchase_bills_data` AS select `purchasebills`.`PBId` AS `Purchaseid`,`purchasebills`.`Vid` AS `VendorID`,`purchasebills`.`BillNo` AS `BillNo`,`purchasebills`.`BillDate` AS `BillDate`,`purchasebills`.`DueDate` AS `DueDate`,`purchasebills`.`Discount` AS `Discount`,`purchasebills`.`Disc_Type` AS `Disc_Type`,`purchasebills`.`Total` AS `Total`,`purchasebills`.`SubTotal` AS `SubTotal`,`purchasebills`.`BillingStatus` AS `BillingStatus`,`purchasebills`.`SGST` AS `SGST`,`purchasebills`.`IGST` AS `IGST`,`purchasebills`.`CGST` AS `CGST`,`purchasebills`.`CurrDateTime` AS `CurrDateTime`,`purchasebilldata`.`PBDId` AS `PurchaseDataId`,`purchasebilldata`.`ProductName` AS `ProductName`,`purchasebilldata`.`ChangeProPrice` AS `ChangeProPrice`,`purchasebilldata`.`ProductId` AS `ProductId`,`purchasebilldata`.`Quantity` AS `Quantity`,`purchasebilldata`.`Amount` AS `Amount` from (`purchasebills` join `purchasebilldata`) where (`purchasebills`.`PBId` = `purchasebilldata`.`PBId`);






CREATE VIEW `purchase_table_data` AS select `purchasebills`.`PBId` AS `PBId`,`purchasebills`.`BillNo` AS `BillNo`,`purchasebills`.`Vid` AS `Vid`,`purchasebills`.`BillDate` AS `BillDate`,`purchasebills`.`DueDate` AS `DueDate`,`purchasebills`.`PaymentDate` AS `PaymentDate`,`purchasebills`.`SGST` AS `SGST`,`purchasebills`.`CGST` AS `CGST`,`purchasebills`.`IGST` AS `IGST`,`purchasebills`.`TotalTax` AS `TotalTax`,`purchasebills`.`Discount` AS `Discount`,`purchasebills`.`SubTotal` AS `SubTotal`,`purchasebills`.`Total` AS `Total`,`purchasebills`.`RemainingAmount` AS `RemainingAmount`,`purchasebills`.`BillingStatus` AS `BillingStatus`,`purchasebills`.`purchase_del_yes_no` AS `purchase_del_yes_no`,`purchasebills`.`CurrDateTime` AS `CurrDateTime`,`purchasebills`.`IpAddress` AS `IpAddress` from `purchasebills`;






CREATE VIEW `report_invoice` AS select `invoicedata`.`InvDataId` AS `InvDataId`,`invoicedata`.`InvId` AS `InvId`,`invoicedata`.`ProductName` AS `ProductName`,`invoicedata`.`ProductId` AS `ProductId`,`invoicedata`.`Quantity` AS `Quantity`,`invoicedata`.`Amount` AS `Amount`,`invoicedata`.`TotalAmount` AS `TotalAmount`,`invoicedata`.`Discount` AS `Discount`,`invoicedata`.`CurrDate` AS `CurrDate`,`invoicedata`.`CurrDateTime` AS `CurrDateTime`,`invoicedata`.`IpAddress` AS `IpAddress`,sum(`invoicedata`.`Quantity`) AS `quinv`,sum(`invoicedata`.`Amount`) AS `amtinv` from `invoicedata` group by `invoicedata`.`ProductId`;






CREATE VIEW `report_purchase` AS select `purchasebilldata`.`PBDId` AS `PBDId`,`purchasebilldata`.`PBId` AS `PBId`,`purchasebilldata`.`ProductName` AS `ProductName`,`purchasebilldata`.`ProductId` AS `ProductId`,`purchasebilldata`.`Quantity` AS `Quantity`,`purchasebilldata`.`Amount` AS `Amount`,`purchasebilldata`.`Total` AS `Total`,`purchasebilldata`.`Discount` AS `Discount`,`purchasebilldata`.`CurrDate` AS `CurrDate`,`purchasebilldata`.`CurrDateTime` AS `CurrDateTime`,`purchasebilldata`.`IpAddress` AS `IpAddress`,sum(`purchasebilldata`.`Quantity`) AS `qupur`,sum(`purchasebilldata`.`Amount`) AS `amtpur` from `purchasebilldata` group by `purchasebilldata`.`ProductId`;




