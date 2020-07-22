-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 05:26 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd`
--
CREATE DATABASE IF NOT EXISTS `bd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd`;

-- --------------------------------------------------------

--
-- Table structure for table `allserialnostarting`
--

CREATE TABLE IF NOT EXISTS `allserialnostarting` (
  `SrId` int(255) NOT NULL AUTO_INCREMENT,
  `PurchaseBill` int(100) NOT NULL,
  `Invoices` int(100) NOT NULL,
  PRIMARY KEY (`SrId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `allserialnostarting`
--

INSERT INTO `allserialnostarting` (`SrId`, `PurchaseBill`, `Invoices`) VALUES
(1, 1001, 1001);

-- --------------------------------------------------------

--
-- Table structure for table `assigntable`
--

CREATE TABLE IF NOT EXISTS `assigntable` (
  `AsId` int(255) NOT NULL AUTO_INCREMENT,
  `InvId` int(255) NOT NULL,
  `UId` int(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`AsId`),
  KEY `InvId` (`InvId`),
  KEY `UId` (`UId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
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
  PRIMARY KEY (`CustId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustId`, `FName`, `LName`, `Address`, `Mobile`, `Mobile2`, `Emailid`, `Photo`, `City`, `State`, `Country`, `AadharCard`, `cust_display_or_not`, `CurrDateTime`, `IPAddress`) VALUES
(1, 'Rajendar', '', 'Vasai', '9768038893', '', '', '', 'Ghansoli', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(2, 'Mahendar', 'Gupta', 'Rabala', '9167028937', '', '', '', 'Rabala', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(3, 'Santosh', '', 'Palghar', '7972872457', '9028253048', 'sssgupta12345@gmail.com', '', 'Palghar', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(4, 'Gangadar', '', 'Bhandari Compound', '8484077624', '', '', '', 'Bhiwandi', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(5, 'Vinod', 'Jain', 'turbha gao', '9820248611', '8850093756', '', '', 'sanpada', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(6, 'Prakash', 'Traders', 'Turbha gao', '8850661292', '9833418566', '', '', 'Turbha', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(7, 'noor', '', 'kapur boari', '9923300067', '', '', '', 'bhiwandi', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(8, 'Hasal', 'Momoni', 'old market', '9819971669', '', '', '', 'Uran', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(9, 'Ganesh', '', 'sai mandir', '8169314119', '', '', '', 'Uran', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(10, 'Gupta', 'bhai', 'sector 10 kamotha gao', '9768313235', '', '', '', 'kamotha', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(11, 'Ashish', 'Gupta', 'near majit ', '9769267555', '9619970099', '', '', 'kalamboli', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(12, 'Dhananjay', 'gupta', 'virupaksh mandir', '8652056208', '', '', '', 'panvel', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(13, 'manoj', 'chavrasiya', 'bengan vadi', '9323155835', '', '', '', 'ghovandi', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(14, 'Gupta', '', 'near gulshan hotel', '7738721695', '', '', '', 'sakinaka', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(15, 'Sonday', '', 'market', '8976270270', '', '', '', 'uran', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(16, 'badrinath', 'chaurasiya', 'market', '9819574458', '9619493840', '', '', 'uran', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(17, 'santosh', 'rathod', 'railway fatak behind', '960413277', '', '', '', 'khopali', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(18, 'ajay ', 'singh', 'oppsite hdfc bank', '7021828236', '7507758449', '', '', 'nalasopara', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(19, 'vinod', 'gupta', 'near shivaji putla', '8149718913', '766766475', '', '', 'bhiwandi', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(20, 'vijay ', 'bhai', 'vinayak hall', '9892248202', '9321490813', '', '', 'kalyan', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(21, 'vinayak', 'parab', 'dadar lalbag', '9969041368', '7303222225', 'vinayakparab40@gmail.com', '', 'dadar', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(22, 'kazim', 'rizvi', 'doodhnatha', '9325560808', '', '', '', 'kalyan', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(23, 'haidar', '', 'amrut nagar', '9321323714', '', '', '', 'mumbra', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(24, 'parvesh', 'aansari', 'bhiwandi', '8805415541', '', '', '', 'bhiwandi', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(25, 'jayprakash', 'gupta', 'nalasopara', '7058516650', '', 'g.jpshany446@gmail.com', '', 'nalasopara', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(26, 'abdul wajid', 'shaik', 'relycolni', '9029901549', '', '', '', 'seewood daraway', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1'),
(27, 'rajkuma', 'gupta', 'busstop', '9082021175', '', '', '', 'kalmboli', 'Maharashtra', 'India', '', 'YES', '0000-00-00 00:00:00', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `EmpId` int(255) NOT NULL AUTO_INCREMENT,
  `EmpName` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `MobileNo` varchar(255) NOT NULL COMMENT 'username',
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `emp_display_or_not` varchar(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`EmpId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpId`, `EmpName`, `Email`, `MobileNo`, `Password`, `Address`, `emp_display_or_not`, `CurrDateTime`, `IpAddress`) VALUES
(10, 'Ashok', 'ashok@gmail.com', '9979667829', '202cb962ac59075b964b07152d234b70', 'Panvel', 'YES', '2018-05-31 00:16:38', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `invoicedata`
--

CREATE TABLE IF NOT EXISTS `invoicedata` (
  `InvDataId` int(255) NOT NULL AUTO_INCREMENT,
  `InvId` int(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductId` int(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  `Discount` int(255) DEFAULT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`InvDataId`),
  KEY `InvoiceId` (`InvId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `invoicedata`
--

INSERT INTO `invoicedata` (`InvDataId`, `InvId`, `ProductName`, `ProductId`, `Quantity`, `Amount`, `Discount`, `CurrDateTime`, `IpAddress`) VALUES
(1, 1, 'MA1', 2, 10, 1850, 525, '2018-05-31 00:17:38', '::1'),
(2, 1, 'SAMPANNA', 6, 5, 675, 525, '2018-05-31 00:17:38', '::1'),
(3, 2, '94', 1, 1, 200, 50, '2018-05-31 10:37:49', '::1'),
(4, 2, 'MA1', 2, 10, 1850, 50, '2018-05-31 10:37:49', '::1'),
(5, 3, 'SAMPANNA', 6, 10, 1350, 1, '2018-05-31 10:51:41', '::1'),
(6, 3, 'PANCHI', 4, 1, 151, 1, '2018-05-31 10:51:41', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `InvId` int(255) NOT NULL AUTO_INCREMENT,
  `CustId` int(255) NOT NULL,
  `InvoiceNo` int(255) NOT NULL,
  `InvoiceDate` date NOT NULL,
  `DueDate` date NOT NULL,
  `SGST` int(255) DEFAULT NULL,
  `CGST` int(255) DEFAULT NULL,
  `IGST` int(255) DEFAULT NULL,
  `SubTotal` int(255) NOT NULL,
  `Discount` int(255) DEFAULT NULL,
  `TotalAmount` int(255) NOT NULL,
  `invoice_del_yes_no` varchar(255) NOT NULL,
  `InvoiceStatus` int(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`InvId`),
  UNIQUE KEY `InvoiceNo` (`InvoiceNo`),
  KEY `CustId` (`CustId`),
  KEY `InvoiceStatus` (`InvoiceStatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`InvId`, `CustId`, `InvoiceNo`, `InvoiceDate`, `DueDate`, `SGST`, `CGST`, `IGST`, `SubTotal`, `Discount`, `TotalAmount`, `invoice_del_yes_no`, `InvoiceStatus`, `CurrDateTime`, `IpAddress`) VALUES
(1, 1, 1001, '2018-05-31', '2018-05-31', 0, 0, 0, 2525, 525, 2000, 'NO', 0, '2018-05-31 00:17:38', '::1'),
(2, 10, 1002, '2018-05-31', '2018-06-05', 0, 0, 0, 2050, 50, 2000, 'YES', 0, '2018-05-31 10:37:49', '::1'),
(3, 11, 1003, '2018-05-31', '2018-06-10', 0, 0, 0, 1501, 1, 1500, 'YES', 0, '2018-05-31 10:51:41', '::1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoice_product_data`
--
CREATE TABLE IF NOT EXISTS `invoice_product_data` (
`InvId` int(255)
,`CustId` int(255)
,`InvoiceNo` int(255)
,`InvoiceDate` date
,`DueDate` date
,`Discount` int(255)
,`SubTotal` int(255)
,`TotalAmount` int(255)
,`InvoiceStatus` int(255)
,`SGST` int(255)
,`IGST` int(255)
,`CGST` int(255)
,`CurrDateTime` datetime
,`InvDataId` int(255)
,`ProductName` varchar(255)
,`ProductId` int(255)
,`Quantity` int(255)
,`Amount` int(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `invoice_table_data`
--
CREATE TABLE IF NOT EXISTS `invoice_table_data` (
`InvId` int(255)
,`CustId` int(255)
,`InvoiceNo` int(255)
,`InvoiceDate` date
,`DueDate` date
,`SGST` int(255)
,`CGST` int(255)
,`IGST` int(255)
,`SubTotal` int(255)
,`Discount` int(255)
,`TotalAmount` int(255)
,`invoice_del_yes_no` varchar(255)
,`InvoiceStatus` int(255)
,`CurrDateTime` datetime
,`IpAddress` text
);
-- --------------------------------------------------------

--
-- Table structure for table `inv_and_emp`
--

CREATE TABLE IF NOT EXISTS `inv_and_emp` (
  `InvEmpId` int(255) NOT NULL AUTO_INCREMENT,
  `EmpId` int(255) NOT NULL,
  `InvId` int(255) NOT NULL,
  PRIMARY KEY (`InvEmpId`),
  KEY `EmpId` (`EmpId`),
  KEY `InvId` (`InvId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `inv_and_emp`
--

INSERT INTO `inv_and_emp` (`InvEmpId`, `EmpId`, `InvId`) VALUES
(1, 10, 1),
(2, 10, 2),
(3, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `LogId` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `LoginDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`LogId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `paymenthistory`
--

CREATE TABLE IF NOT EXISTS `paymenthistory` (
  `PHId` int(255) NOT NULL AUTO_INCREMENT,
  `CustId` int(255) NOT NULL,
  `InvId` int(255) NOT NULL,
  `PreviousPaymentDate` date DEFAULT NULL,
  `NextPaymentDate` date DEFAULT NULL,
  `Reason` text,
  `PaymentRemaining` int(255) NOT NULL,
  `TotalAmount` int(255) NOT NULL,
  `PaidAmount` int(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`PHId`),
  KEY `CustId` (`CustId`),
  KEY `InvId` (`InvId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `paymentstatus`
--

CREATE TABLE IF NOT EXISTS `paymentstatus` (
  `PSId` int(255) NOT NULL,
  `PaymentStatus` varchar(255) NOT NULL,
  PRIMARY KEY (`PSId`),
  KEY `PSId` (`PSId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentstatus`
--

INSERT INTO `paymentstatus` (`PSId`, `PaymentStatus`) VALUES
(0, 'Unpaid'),
(1, 'Partpaid'),
(2, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `PId` int(255) NOT NULL AUTO_INCREMENT,
  `PName` varchar(255) NOT NULL,
  `PPrice` int(255) NOT NULL,
  `PPhoto` varchar(255) DEFAULT NULL,
  `pro_display_or_not` varchar(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IPAddress` text NOT NULL,
  PRIMARY KEY (`PId`),
  KEY `PId` (`PId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PId`, `PName`, `PPrice`, `PPhoto`, `pro_display_or_not`, `CurrDateTime`, `IPAddress`) VALUES
(1, '94', 151, '', 'YES', '0000-00-00 00:00:00', '::1'),
(2, 'MA1', 185, '', 'YES', '0000-00-00 00:00:00', '::1'),
(3, 'TM 550', 175, '', 'YES', '0000-00-00 00:00:00', '::1'),
(4, 'PANCHI', 151, '', 'YES', '0000-00-00 00:00:00', '::1'),
(5, 'PANCHI', 151, '', 'YES', '0000-00-00 00:00:00', '::1'),
(6, 'SAMPANNA', 135, '', 'YES', '0000-00-00 00:00:00', '::1'),
(7, 'RAJA SAHEB', 95, '', 'YES', '0000-00-00 00:00:00', '::1'),
(8, 'MA DEL', 165, '', 'YES', '0000-00-00 00:00:00', '::1'),
(9, 'SBH', 470, '', 'YES', '0000-00-00 00:00:00', '::1'),
(10, 'MOHA', 175, '', 'YES', '0000-00-00 00:00:00', '::1'),
(11, 'MOHA', 175, '', 'YES', '0000-00-00 00:00:00', '::1'),
(12, 'RK1', 175, '', 'YES', '0000-00-00 00:00:00', '::1'),
(13, 'RK1', 175, '', 'YES', '0000-00-00 00:00:00', '::1'),
(14, 'GUL CHAND', 112, '', 'YES', '0000-00-00 00:00:00', '::1'),
(15, 'GUL CHAND', 112, '', 'YES', '0000-00-00 00:00:00', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `purchasebilldata`
--

CREATE TABLE IF NOT EXISTS `purchasebilldata` (
  `PBDId` int(255) NOT NULL AUTO_INCREMENT,
  `PBId` int(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductId` int(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  `Discount` int(255) DEFAULT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`PBDId`),
  KEY `PBId` (`PBId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `purchasebilldata`
--

INSERT INTO `purchasebilldata` (`PBDId`, `PBId`, `ProductName`, `ProductId`, `Quantity`, `Amount`, `Discount`, `CurrDateTime`, `IpAddress`) VALUES
(1, 1, 'MA1', 2, 10, 1850, 600, '2018-05-31 00:29:21', '::1'),
(2, 1, 'RK1', 12, 10, 1750, 600, '2018-05-31 00:29:21', '::1'),
(3, 2, '94', 1, 1, 151, 0, '2018-05-31 10:38:54', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `purchasebills`
--

CREATE TABLE IF NOT EXISTS `purchasebills` (
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
  `SubTotal` int(255) NOT NULL,
  `Total` int(255) NOT NULL,
  `BillingStatus` int(255) NOT NULL,
  `purchase_del_yes_no` varchar(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`PBId`),
  UNIQUE KEY `BillNo` (`BillNo`),
  KEY `VId` (`Vid`),
  KEY `BillingStatus` (`BillingStatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `purchasebills`
--

INSERT INTO `purchasebills` (`PBId`, `BillNo`, `Vid`, `BillDate`, `DueDate`, `SGST`, `CGST`, `IGST`, `TotalTax`, `Discount`, `SubTotal`, `Total`, `BillingStatus`, `purchase_del_yes_no`, `CurrDateTime`, `IpAddress`) VALUES
(1, 1001, 1, '2018-05-31', '2018-05-31', 0, 0, 0, NULL, 600, 3600, 3000, 0, 'YES', '2018-05-31 00:29:21', '::1'),
(2, 1002, 1, '2018-05-31', '2018-05-31', 0, 0, 0, NULL, 0, 151, 151, 0, 'YES', '2018-05-31 10:38:54', '::1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `purchase_bills_data`
--
CREATE TABLE IF NOT EXISTS `purchase_bills_data` (
`Purchaseid` int(255)
,`VendorID` int(255)
,`BillNo` int(255)
,`BillDate` date
,`DueDate` date
,`Discount` int(255)
,`Total` int(255)
,`SubTotal` int(255)
,`BillingStatus` int(255)
,`SGST` int(255)
,`IGST` int(255)
,`CGST` int(255)
,`CurrDateTime` datetime
,`PurchaseDataId` int(255)
,`ProductName` varchar(255)
,`ProductId` int(255)
,`Quantity` int(255)
,`Amount` int(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `purchase_table_data`
--
CREATE TABLE IF NOT EXISTS `purchase_table_data` (
`PBId` int(255)
,`BillNo` int(255)
,`Vid` int(255)
,`BillDate` date
,`DueDate` date
,`SGST` int(255)
,`CGST` int(255)
,`IGST` int(255)
,`TotalTax` int(255)
,`Discount` int(255)
,`SubTotal` int(255)
,`Total` int(255)
,`BillingStatus` int(255)
,`purchase_del_yes_no` varchar(255)
,`CurrDateTime` datetime
,`IpAddress` text
);
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UId` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`UId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UId`, `name`, `uname`, `pass`, `mobileno`, `Designation`, `CurrDateTime`, `IpAddress`) VALUES
(1, 'name', 'admin', '4297f44b13955235245b2497399d7a93', '', '', '0000-00-00 00:00:00', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `VId` int(255) NOT NULL AUTO_INCREMENT,
  `VFName` varchar(255) NOT NULL,
  `VLName` varchar(255) DEFAULT NULL,
  `VPhoto` varchar(255) DEFAULT NULL,
  `VCity` varchar(255) NOT NULL,
  `VAddress` text NOT NULL,
  `VMobile` varchar(255) NOT NULL,
  `VAnotherContact` varchar(255) DEFAULT NULL,
  `ven_display_or_not` varchar(255) NOT NULL,
  `CurrDateTime` datetime NOT NULL,
  `IPAddress` text NOT NULL,
  PRIMARY KEY (`VId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`VId`, `VFName`, `VLName`, `VPhoto`, `VCity`, `VAddress`, `VMobile`, `VAnotherContact`, `ven_display_or_not`, `CurrDateTime`, `IPAddress`) VALUES
(1, 'Vendor ', 'one', '', '', 'Vashi', '9768024467', '7765554422', 'YES', '2018-05-31 00:23:15', '::1');

-- --------------------------------------------------------

--
-- Structure for view `invoice_product_data`
--
DROP TABLE IF EXISTS `invoice_product_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoice_product_data` AS select `invoices`.`InvId` AS `InvId`,`invoices`.`CustId` AS `CustId`,`invoices`.`InvoiceNo` AS `InvoiceNo`,`invoices`.`InvoiceDate` AS `InvoiceDate`,`invoices`.`DueDate` AS `DueDate`,`invoices`.`Discount` AS `Discount`,`invoices`.`SubTotal` AS `SubTotal`,`invoices`.`TotalAmount` AS `TotalAmount`,`invoices`.`InvoiceStatus` AS `InvoiceStatus`,`invoices`.`SGST` AS `SGST`,`invoices`.`IGST` AS `IGST`,`invoices`.`CGST` AS `CGST`,`invoices`.`CurrDateTime` AS `CurrDateTime`,`invoicedata`.`InvDataId` AS `InvDataId`,`invoicedata`.`ProductName` AS `ProductName`,`invoicedata`.`ProductId` AS `ProductId`,`invoicedata`.`Quantity` AS `Quantity`,`invoicedata`.`Amount` AS `Amount` from (`invoices` join `invoicedata`) where (`invoices`.`InvId` = `invoicedata`.`InvId`);

-- --------------------------------------------------------

--
-- Structure for view `invoice_table_data`
--
DROP TABLE IF EXISTS `invoice_table_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoice_table_data` AS select `invoices`.`InvId` AS `InvId`,`invoices`.`CustId` AS `CustId`,`invoices`.`InvoiceNo` AS `InvoiceNo`,`invoices`.`InvoiceDate` AS `InvoiceDate`,`invoices`.`DueDate` AS `DueDate`,`invoices`.`SGST` AS `SGST`,`invoices`.`CGST` AS `CGST`,`invoices`.`IGST` AS `IGST`,`invoices`.`SubTotal` AS `SubTotal`,`invoices`.`Discount` AS `Discount`,`invoices`.`TotalAmount` AS `TotalAmount`,`invoices`.`invoice_del_yes_no` AS `invoice_del_yes_no`,`invoices`.`InvoiceStatus` AS `InvoiceStatus`,`invoices`.`CurrDateTime` AS `CurrDateTime`,`invoices`.`IpAddress` AS `IpAddress` from `invoices`;

-- --------------------------------------------------------

--
-- Structure for view `purchase_bills_data`
--
DROP TABLE IF EXISTS `purchase_bills_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `purchase_bills_data` AS select `purchasebills`.`PBId` AS `Purchaseid`,`purchasebills`.`Vid` AS `VendorID`,`purchasebills`.`BillNo` AS `BillNo`,`purchasebills`.`BillDate` AS `BillDate`,`purchasebills`.`DueDate` AS `DueDate`,`purchasebills`.`Discount` AS `Discount`,`purchasebills`.`Total` AS `Total`,`purchasebills`.`SubTotal` AS `SubTotal`,`purchasebills`.`BillingStatus` AS `BillingStatus`,`purchasebills`.`SGST` AS `SGST`,`purchasebills`.`IGST` AS `IGST`,`purchasebills`.`CGST` AS `CGST`,`purchasebills`.`CurrDateTime` AS `CurrDateTime`,`purchasebilldata`.`PBDId` AS `PurchaseDataId`,`purchasebilldata`.`ProductName` AS `ProductName`,`purchasebilldata`.`ProductId` AS `ProductId`,`purchasebilldata`.`Quantity` AS `Quantity`,`purchasebilldata`.`Amount` AS `Amount` from (`purchasebills` join `purchasebilldata`) where (`purchasebills`.`PBId` = `purchasebilldata`.`PBId`);

-- --------------------------------------------------------

--
-- Structure for view `purchase_table_data`
--
DROP TABLE IF EXISTS `purchase_table_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `purchase_table_data` AS select `purchasebills`.`PBId` AS `PBId`,`purchasebills`.`BillNo` AS `BillNo`,`purchasebills`.`Vid` AS `Vid`,`purchasebills`.`BillDate` AS `BillDate`,`purchasebills`.`DueDate` AS `DueDate`,`purchasebills`.`SGST` AS `SGST`,`purchasebills`.`CGST` AS `CGST`,`purchasebills`.`IGST` AS `IGST`,`purchasebills`.`TotalTax` AS `TotalTax`,`purchasebills`.`Discount` AS `Discount`,`purchasebills`.`SubTotal` AS `SubTotal`,`purchasebills`.`Total` AS `Total`,`purchasebills`.`BillingStatus` AS `BillingStatus`,`purchasebills`.`purchase_del_yes_no` AS `purchase_del_yes_no`,`purchasebills`.`CurrDateTime` AS `CurrDateTime`,`purchasebills`.`IpAddress` AS `IpAddress` from `purchasebills`;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigntable`
--
ALTER TABLE `assigntable`
  ADD CONSTRAINT `assigninvoiceid` FOREIGN KEY (`InvId`) REFERENCES `invoices` (`InvoiceNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `assignuid` FOREIGN KEY (`UId`) REFERENCES `users` (`UId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `invoicedata`
--
ALTER TABLE `invoicedata`
  ADD CONSTRAINT `invoiceid` FOREIGN KEY (`InvId`) REFERENCES `invoices` (`InvId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `icustid` FOREIGN KEY (`CustId`) REFERENCES `customer` (`CustId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `psid` FOREIGN KEY (`InvoiceStatus`) REFERENCES `paymentstatus` (`PSId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `inv_and_emp`
--
ALTER TABLE `inv_and_emp`
  ADD CONSTRAINT `empinvid` FOREIGN KEY (`InvId`) REFERENCES `invoices` (`InvId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `iempid` FOREIGN KEY (`EmpId`) REFERENCES `employee` (`EmpId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  ADD CONSTRAINT `custid` FOREIGN KEY (`CustId`) REFERENCES `customer` (`CustId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `invid` FOREIGN KEY (`InvId`) REFERENCES `invoices` (`InvId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `purchasebilldata`
--
ALTER TABLE `purchasebilldata`
  ADD CONSTRAINT `purchasebill` FOREIGN KEY (`PBId`) REFERENCES `purchasebills` (`PBId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `purchasebills`
--
ALTER TABLE `purchasebills`
  ADD CONSTRAINT `billpsid` FOREIGN KEY (`BillingStatus`) REFERENCES `paymentstatus` (`PSId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `vidd` FOREIGN KEY (`Vid`) REFERENCES `vendor` (`VId`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
