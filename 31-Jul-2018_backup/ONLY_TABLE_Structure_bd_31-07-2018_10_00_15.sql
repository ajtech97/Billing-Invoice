

CREATE TABLE `adminlogs` (
  `LogId` int(255) NOT NULL AUTO_INCREMENT,
  `AdminId` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `LoginDateTime` datetime NOT NULL,
  `LogoutDateTime` datetime DEFAULT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`LogId`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;






CREATE TABLE `allserialnostarting` (
  `SrId` int(255) NOT NULL AUTO_INCREMENT,
  `PurchaseBill` int(100) NOT NULL,
  `Invoices` int(100) NOT NULL,
  `orderstar` int(255) NOT NULL,
  PRIMARY KEY (`SrId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;






CREATE TABLE `assigncustomers` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `curdate` date NOT NULL,
  `curtime` time NOT NULL,
  `ipadd` text NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;






CREATE TABLE `assigntable` (
  `AsId` int(255) NOT NULL AUTO_INCREMENT,
  `InvId` int(255) NOT NULL,
  `UId` int(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`AsId`),
  KEY `InvId` (`InvId`),
  KEY `UId` (`UId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `customer` (
  `CustId` int(255) NOT NULL AUTO_INCREMENT,
  `FName` varchar(255) NOT NULL,
  `LName` varchar(255) DEFAULT NULL,
  `Address` text NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Mobile2` varchar(255) DEFAULT NULL,
  `Emailid` varchar(255) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `AadharCard` varchar(255) DEFAULT NULL,
  `cust_display_or_not` varchar(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IPAddress` text NOT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CustId`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;






CREATE TABLE `employee` (
  `EmpId` int(255) NOT NULL AUTO_INCREMENT,
  `EmpName` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `MobileNo` varchar(255) NOT NULL COMMENT 'username',
  `Password` varchar(255) NOT NULL,
  `ConfPassword` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `EmpPhoto` varchar(255) DEFAULT NULL,
  `emp_display_or_not` varchar(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`EmpId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;






CREATE TABLE `employeelogs` (
  `LogId` int(255) NOT NULL AUTO_INCREMENT,
  `EmpId` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `LoginDateTime` datetime NOT NULL,
  `LogoutDateTime` datetime DEFAULT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`LogId`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;






CREATE TABLE `inv_and_emp` (
  `InvEmpId` int(255) NOT NULL AUTO_INCREMENT,
  `EmpId` int(255) NOT NULL,
  `InvId` int(255) NOT NULL,
  PRIMARY KEY (`InvEmpId`),
  KEY `EmpId` (`EmpId`),
  KEY `InvId` (`InvId`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;






CREATE TABLE `invoicedata` (
  `InvDataId` int(255) NOT NULL AUTO_INCREMENT,
  `InvId` int(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ChangeProPrice` int(255) DEFAULT NULL,
  `ProductId` int(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `TotalAmount` int(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  `Discount` int(255) DEFAULT NULL,
  `CurrDate` date NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`InvDataId`),
  KEY `InvoiceId` (`InvId`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;






CREATE TABLE `invoices` (
  `InvId` int(255) NOT NULL AUTO_INCREMENT,
  `CustId` int(255) NOT NULL,
  `InvoiceNo` int(255) NOT NULL,
  `InvoiceDate` date NOT NULL,
  `DueDate` date NOT NULL,
  `Invphoto` varchar(255) DEFAULT NULL,
  `SGST` int(255) DEFAULT NULL,
  `CGST` int(255) DEFAULT NULL,
  `IGST` int(255) DEFAULT NULL,
  `SubTotal` int(255) NOT NULL,
  `Discount` int(255) DEFAULT NULL,
  `Disc_Type` varchar(255) NOT NULL,
  `TotalAmount` int(255) NOT NULL,
  `RemainingAmount` int(255) NOT NULL,
  `invoice_del_yes_no` varchar(255) NOT NULL,
  `Assign_Emp` varchar(255) NOT NULL DEFAULT 'NO',
  `InvoiceStatus` int(255) NOT NULL,
  `CurrDate` date NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  `PaymentDate` date DEFAULT NULL,
  PRIMARY KEY (`InvId`),
  UNIQUE KEY `InvoiceNo` (`InvoiceNo`),
  KEY `CustId` (`CustId`),
  KEY `InvoiceStatus` (`InvoiceStatus`),
  KEY `InvId` (`InvId`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;






CREATE TABLE `orderdata` (
  `OrderDataId` int(255) NOT NULL AUTO_INCREMENT,
  `OId` int(255) NOT NULL,
  `CustId` int(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ChangeProPrice` int(255) DEFAULT NULL,
  `ProductId` int(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  `SubTotal` int(255) NOT NULL,
  `TotalAmount` int(255) NOT NULL,
  `CurrDate` date NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` varchar(255) NOT NULL,
  PRIMARY KEY (`OrderDataId`),
  KEY `OId` (`OId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;






CREATE TABLE `orders` (
  `OId` int(255) NOT NULL AUTO_INCREMENT,
  `OrderNo` int(255) NOT NULL,
  `EmpId` int(255) NOT NULL,
  `EmpMobileNo` varchar(255) NOT NULL,
  `ODate` date NOT NULL,
  `CustId` int(255) NOT NULL,
  `CustName` varchar(255) NOT NULL,
  `SubTotal` int(255) NOT NULL,
  `TotalAmount` int(255) NOT NULL,
  `order_del_yes_no` varchar(255) NOT NULL,
  `CurrDate` date NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` varchar(255) NOT NULL,
  `Emp_Order_Yes_No` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`OId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;






CREATE TABLE `paymenthistory` (
  `PHId` int(255) NOT NULL AUTO_INCREMENT,
  `CustId` int(255) NOT NULL,
  `InvId` int(255) NOT NULL,
  `EmpId` int(255) NOT NULL,
  `PreviousPaymentDate` date DEFAULT NULL,
  `NextPaymentDate` date DEFAULT NULL,
  `Reason` text,
  `PaymentRemaining` int(255) NOT NULL,
  `TotalAmount` int(255) NOT NULL,
  `PaidAmount` int(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  `PaymentDate` date DEFAULT NULL,
  PRIMARY KEY (`PHId`),
  KEY `CustId` (`CustId`),
  KEY `InvId` (`InvId`),
  KEY `EmpId` (`EmpId`),
  CONSTRAINT `custid` FOREIGN KEY (`CustId`) REFERENCES `customer` (`CustId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `invid` FOREIGN KEY (`InvId`) REFERENCES `invoices` (`InvId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `payempid` FOREIGN KEY (`EmpId`) REFERENCES `employee` (`EmpId`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;






CREATE TABLE `paymentstatus` (
  `PSId` int(255) NOT NULL,
  `PaymentStatus` varchar(255) NOT NULL,
  PRIMARY KEY (`PSId`),
  KEY `PSId` (`PSId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `product` (
  `PId` int(255) NOT NULL AUTO_INCREMENT,
  `PName` varchar(255) NOT NULL,
  `PPrice` int(255) NOT NULL,
  `SPPrice` int(255) NOT NULL,
  `PPhoto` varchar(255) DEFAULT NULL,
  `pro_display_or_not` varchar(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IPAddress` text NOT NULL,
  PRIMARY KEY (`PId`),
  KEY `PId` (`PId`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;






CREATE TABLE `purchasebilldata` (
  `PBDId` int(255) NOT NULL AUTO_INCREMENT,
  `PBId` int(255) NOT NULL,
  `BillNo` int(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ChangeProPrice` int(255) DEFAULT NULL,
  `ProductId` int(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  `Total` int(255) NOT NULL,
  `Discount` int(255) DEFAULT NULL,
  `CurrDate` date NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`PBDId`),
  KEY `PBId` (`PBId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;






CREATE TABLE `purchasebills` (
  `PBId` int(255) NOT NULL AUTO_INCREMENT,
  `BillNo` int(255) NOT NULL,
  `Vid` int(255) NOT NULL,
  `BillDate` date NOT NULL,
  `DueDate` date NOT NULL,
  `SGST` int(255) DEFAULT NULL,
  `CGST` int(255) DEFAULT NULL,
  `IGST` int(255) DEFAULT NULL,
  `TotalTax` int(255) DEFAULT NULL,
  `Discount` int(255) DEFAULT NULL,
  `Disc_Type` varchar(255) NOT NULL,
  `SubTotal` int(255) NOT NULL,
  `Total` int(255) NOT NULL,
  `RemainingAmount` int(255) NOT NULL,
  `BillingStatus` int(255) NOT NULL,
  `purchase_del_yes_no` varchar(255) NOT NULL,
  `CurrDate` date NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  `PaymentDate` date DEFAULT NULL,
  PRIMARY KEY (`PBId`),
  UNIQUE KEY `BillNo` (`BillNo`),
  KEY `VId` (`Vid`),
  KEY `BillingStatus` (`BillingStatus`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;






CREATE TABLE `users` (
  `UId` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `AnotherMobileNo` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`UId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;






CREATE TABLE `vendor` (
  `VId` int(255) NOT NULL AUTO_INCREMENT,
  `VFName` varchar(255) NOT NULL,
  `VLName` varchar(255) DEFAULT NULL,
  `VPhoto` varchar(255) DEFAULT NULL,
  `VAddress` text NOT NULL,
  `VMobile` varchar(255) NOT NULL,
  `VAnotherContact` varchar(255) DEFAULT NULL,
  `ven_display_or_not` varchar(255) NOT NULL,
  `vendor_status` int(255) DEFAULT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IPAddress` text NOT NULL,
  PRIMARY KEY (`VId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;






CREATE TABLE `vendorpaymenthistory` (
  `VPid` int(11) NOT NULL AUTO_INCREMENT,
  `VendorId` int(255) NOT NULL,
  `Billno` int(255) NOT NULL,
  `PreviousPaymentDate` date NOT NULL,
  `NextPaydate` date NOT NULL,
  `Reason` varchar(255) DEFAULT NULL,
  `PaymentRemaining` int(255) NOT NULL,
  `TotalAmount` int(255) NOT NULL,
  `PaidAmount` int(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  `PaymentDate` date DEFAULT NULL,
  PRIMARY KEY (`VPid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;




