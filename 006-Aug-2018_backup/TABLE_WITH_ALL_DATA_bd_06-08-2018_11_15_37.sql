

CREATE TABLE `adminlogs` (
  `LogId` int(255) NOT NULL AUTO_INCREMENT,
  `AdminId` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `LoginDateTime` datetime NOT NULL,
  `LogoutDateTime` datetime DEFAULT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`LogId`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;

INSERT INTO adminlogs VALUES("1","1","demo","2018-07-09 18:38:27","2018-07-09 18:40:22","106.66.47.3");
INSERT INTO adminlogs VALUES("2","1","sameer","2018-07-09 18:40:36","2018-07-09 18:41:42","106.66.47.3");
INSERT INTO adminlogs VALUES("3","1","sameer","2018-07-10 21:28:53","2018-07-10 21:30:27","150.242.204.113");
INSERT INTO adminlogs VALUES("4","1","sameer","2018-07-10 21:38:10","","150.242.204.113");
INSERT INTO adminlogs VALUES("5","1","sameer","2018-07-11 21:01:54","","1.186.109.104");
INSERT INTO adminlogs VALUES("6","1","sameer","2018-07-12 15:18:05","2018-07-12 15:28:48","150.242.204.76");
INSERT INTO adminlogs VALUES("7","1","sameer","2018-07-12 15:30:24","2018-07-12 15:41:18","150.242.204.76");
INSERT INTO adminlogs VALUES("8","1","sameer","2018-07-12 15:44:07","","106.76.73.237");
INSERT INTO adminlogs VALUES("9","1","sameer","2018-07-12 16:08:18","","1.186.109.189");
INSERT INTO adminlogs VALUES("10","1","sameer","2018-07-12 16:43:02","2018-07-12 17:01:56","1.186.109.189");
INSERT INTO adminlogs VALUES("11","1","sameer","2018-07-12 17:02:05","2018-07-12 17:07:54","1.186.109.189");
INSERT INTO adminlogs VALUES("12","1","sameer","2018-07-12 17:08:04","2018-07-12 17:20:35","1.186.109.189");
INSERT INTO adminlogs VALUES("13","1","sameer","2018-07-12 17:20:52","2018-07-12 17:22:03","1.186.109.189");
INSERT INTO adminlogs VALUES("14","1","sameer","2018-07-12 17:22:13","2018-07-12 17:49:24","1.186.109.189");
INSERT INTO adminlogs VALUES("15","1","sameer","2018-07-12 18:21:22","2018-07-12 18:30:24","1.186.109.189");
INSERT INTO adminlogs VALUES("16","1","sameer","2018-07-12 18:30:32","","1.186.109.189");
INSERT INTO adminlogs VALUES("17","1","sameer","2018-07-12 18:57:12","","106.66.47.181");
INSERT INTO adminlogs VALUES("18","1","sameer","2018-07-12 19:02:29","2018-07-12 19:11:29","203.114.234.218");
INSERT INTO adminlogs VALUES("19","1","sameer","2018-07-12 19:34:36","","203.114.234.218");
INSERT INTO adminlogs VALUES("20","1","sameer","2018-07-12 19:34:36","","203.114.234.218");
INSERT INTO adminlogs VALUES("21","1","sameer","2018-07-12 19:39:42","","203.114.234.218");
INSERT INTO adminlogs VALUES("22","1","Sameer ","2018-07-12 20:01:09","","157.185.130.189");
INSERT INTO adminlogs VALUES("23","1","sameer","2018-07-13 10:45:21","","45.250.249.2");
INSERT INTO adminlogs VALUES("24","1","sameer","2018-07-13 12:28:41","","203.114.232.146");
INSERT INTO adminlogs VALUES("25","1","sameer","2018-07-13 20:30:31","","27.97.87.148");
INSERT INTO adminlogs VALUES("26","1","sameer","2018-07-14 19:01:59","","1.186.106.242");
INSERT INTO adminlogs VALUES("27","1","sameer","2018-07-14 20:17:35","","1.186.106.242");
INSERT INTO adminlogs VALUES("28","1","sameer","2018-07-15 15:04:43","","1.186.106.242");
INSERT INTO adminlogs VALUES("29","1","sameer","2018-07-16 19:43:37","","203.114.233.149");
INSERT INTO adminlogs VALUES("30","1","sameer","2018-07-17 20:50:58","","1.186.109.23");
INSERT INTO adminlogs VALUES("31","1","Sameer","2018-07-18 19:19:50","","157.185.130.176");
INSERT INTO adminlogs VALUES("32","1","sameer","2018-07-18 21:40:16","","49.33.36.122");
INSERT INTO adminlogs VALUES("33","1","sameer","2018-07-18 21:44:47","","59.181.110.51");
INSERT INTO adminlogs VALUES("34","1","sameer","2018-07-18 22:25:33","","45.250.249.29");
INSERT INTO adminlogs VALUES("35","1","Sameer","2018-07-18 23:54:15","2018-07-19 00:29:23","150.242.204.74");
INSERT INTO adminlogs VALUES("36","1","Sameer ","2018-07-19 00:32:11","","150.242.204.74");
INSERT INTO adminlogs VALUES("37","1","sameer","2018-07-19 01:27:31","2018-07-19 01:29:14","150.242.204.74");
INSERT INTO adminlogs VALUES("38","1","Sameer ","2018-07-19 10:35:18","","157.185.130.251");
INSERT INTO adminlogs VALUES("39","1","sameer","2018-07-19 10:54:46","","1.186.108.68");
INSERT INTO adminlogs VALUES("40","1","Sameer","2018-07-19 13:28:46","","157.185.130.187");
INSERT INTO adminlogs VALUES("41","1","sameer","2018-07-19 21:40:26","2018-07-19 21:52:56","1.186.108.68");
INSERT INTO adminlogs VALUES("42","1","sameer","2018-07-19 21:53:03","","1.186.108.68");
INSERT INTO adminlogs VALUES("43","1","sameer","2018-07-19 21:53:11","","1.186.108.68");
INSERT INTO adminlogs VALUES("44","1","Sameer","2018-07-19 22:00:34","2018-07-19 22:09:46","150.242.204.74");
INSERT INTO adminlogs VALUES("45","1","Sameer","2018-07-20 18:51:17","","157.185.130.179");
INSERT INTO adminlogs VALUES("46","1","sameer","2018-07-20 19:15:25","","1.186.109.103");
INSERT INTO adminlogs VALUES("47","1","sameer","2018-07-20 19:15:45","","1.186.109.103");
INSERT INTO adminlogs VALUES("48","1","Sameer","2018-07-20 20:36:53","","150.242.204.74");
INSERT INTO adminlogs VALUES("49","1","Sameer","2018-07-20 20:49:40","","150.242.204.74");
INSERT INTO adminlogs VALUES("50","1","sameer","2018-07-21 11:22:55","","1.186.109.103");
INSERT INTO adminlogs VALUES("51","1","sameer","2018-07-21 15:16:57","2018-07-21 15:19:10","1.186.109.103");
INSERT INTO adminlogs VALUES("52","1","Sameer ","2018-07-21 15:28:43","","1.186.109.103");
INSERT INTO adminlogs VALUES("53","1","Sameer","2018-07-22 12:50:40","","157.185.131.1");
INSERT INTO adminlogs VALUES("54","1","sameer","2018-07-22 16:54:41","","203.114.235.59");
INSERT INTO adminlogs VALUES("55","1","sameer","2018-07-22 18:22:33","","203.114.235.59");
INSERT INTO adminlogs VALUES("56","1","Sameer","2018-07-22 18:48:31","","150.242.204.75");
INSERT INTO adminlogs VALUES("57","1","sameer","2018-07-22 22:20:07","","45.250.249.18");
INSERT INTO adminlogs VALUES("58","1","Sameer","2018-07-22 23:51:35","","150.242.204.75");
INSERT INTO adminlogs VALUES("59","1","Sameer","2018-07-22 23:51:37","","150.242.204.75");
INSERT INTO adminlogs VALUES("60","1","Sameer","2018-07-23 09:23:48","","157.185.130.179");
INSERT INTO adminlogs VALUES("61","1","sameer","2018-07-23 09:27:05","","203.114.233.217");
INSERT INTO adminlogs VALUES("62","1","sameer","2018-07-23 11:16:35","","203.114.233.217");
INSERT INTO adminlogs VALUES("63","1","Sameer","2018-07-23 13:07:17","","157.185.130.251");
INSERT INTO adminlogs VALUES("64","1","sameer","2018-07-23 19:41:31","","42.107.143.2");
INSERT INTO adminlogs VALUES("65","1","sameer","2018-07-23 19:43:57","","203.114.232.221");
INSERT INTO adminlogs VALUES("66","1","Sameer","2018-07-23 19:48:16","","203.114.232.221");
INSERT INTO adminlogs VALUES("67","1","Sameer","2018-07-23 19:49:21","2018-07-23 19:52:13","42.107.142.83");
INSERT INTO adminlogs VALUES("68","1","Sameer","2018-07-23 19:55:08","","42.107.142.83");
INSERT INTO adminlogs VALUES("69","1","Sameer","2018-07-23 19:56:27","","42.107.145.86");
INSERT INTO adminlogs VALUES("70","1","Sameer","2018-07-23 19:58:02","","42.107.142.83");
INSERT INTO adminlogs VALUES("71","1","sameer","2018-07-23 23:14:30","","203.114.232.221");
INSERT INTO adminlogs VALUES("72","1","Sameer","2018-07-24 12:01:38","","157.185.130.248");
INSERT INTO adminlogs VALUES("73","1","Sameer","2018-07-24 17:54:36","","157.185.131.2");
INSERT INTO adminlogs VALUES("74","1","sameer","2018-07-24 20:26:02","","1.186.110.42");
INSERT INTO adminlogs VALUES("75","1","Sameer","2018-07-24 22:14:09","","150.242.204.76");
INSERT INTO adminlogs VALUES("76","1","sameer","2018-07-24 23:49:14","","103.48.59.104");
INSERT INTO adminlogs VALUES("77","1","sameer","2018-07-25 11:28:07","","1.186.106.185");
INSERT INTO adminlogs VALUES("78","1","sameer","2018-07-25 18:39:47","","203.114.232.38");
INSERT INTO adminlogs VALUES("79","1","Sameer","2018-07-26 17:31:56","","203.114.235.132");
INSERT INTO adminlogs VALUES("80","1","Sameer ","2018-07-26 22:00:39","2018-07-26 22:02:17","1.186.108.68");
INSERT INTO adminlogs VALUES("81","1","Sameer","2018-07-28 13:29:36","","157.185.130.182");
INSERT INTO adminlogs VALUES("82","1","Sameer","2018-07-28 13:29:36","","157.185.130.182");
INSERT INTO adminlogs VALUES("83","1","sameer","2018-07-28 13:51:07","","203.114.232.173");
INSERT INTO adminlogs VALUES("84","1","sameer","2018-07-28 14:31:08","","1.186.110.145");
INSERT INTO adminlogs VALUES("85","1","Sameer","2018-07-28 15:57:47","","150.242.204.90");
INSERT INTO adminlogs VALUES("86","1","sameer","2018-07-28 16:47:14","","1.186.110.145");
INSERT INTO adminlogs VALUES("87","1","sameer","2018-07-28 18:26:33","","1.186.110.145");
INSERT INTO adminlogs VALUES("88","1","Sameer","2018-07-29 00:46:51","","150.242.204.90");
INSERT INTO adminlogs VALUES("89","1","Sameer","2018-07-29 15:02:10","","157.185.130.187");
INSERT INTO adminlogs VALUES("90","1","Sameer","2018-07-30 10:54:54","","157.185.130.245");
INSERT INTO adminlogs VALUES("91","1","Sameer","2018-07-30 13:57:44","","157.185.130.244");
INSERT INTO adminlogs VALUES("92","1","sameer","2018-07-30 14:28:14","","1.186.107.193");
INSERT INTO adminlogs VALUES("93","1","sameer","2018-07-30 17:56:31","2018-07-30 17:57:53","1.186.109.186");
INSERT INTO adminlogs VALUES("94","1","sameer","2018-07-30 17:58:47","","1.186.109.186");
INSERT INTO adminlogs VALUES("95","1","sameer","2018-07-30 18:13:16","","1.186.109.186");
INSERT INTO adminlogs VALUES("96","1","sameer","2018-07-30 18:47:30","","1.186.109.186");
INSERT INTO adminlogs VALUES("97","1","sameer","2018-07-30 19:14:40","","1.186.109.186");
INSERT INTO adminlogs VALUES("98","1","Sameer ","2018-07-30 19:22:08","","1.186.109.186");
INSERT INTO adminlogs VALUES("99","1","sameer","2018-07-30 19:25:36","2018-07-30 19:27:10","1.186.109.186");
INSERT INTO adminlogs VALUES("100","1","sameer","2018-07-30 19:27:15","2018-07-30 19:28:31","1.186.109.186");
INSERT INTO adminlogs VALUES("101","1","sameer","2018-07-30 19:54:58","","1.186.107.193");
INSERT INTO adminlogs VALUES("102","1","Sameer ","2018-07-30 20:50:32","","1.186.107.193");
INSERT INTO adminlogs VALUES("103","1","Sameer ","2018-07-31 09:52:12","","1.186.108.38");
INSERT INTO adminlogs VALUES("104","1","Sameer","2018-07-31 11:20:55","","157.185.130.184");
INSERT INTO adminlogs VALUES("105","1","Sameer","2018-08-01 05:38:31","","157.185.130.189");
INSERT INTO adminlogs VALUES("106","1","Sameer ","2018-08-02 15:07:13","","203.114.235.225");
INSERT INTO adminlogs VALUES("107","1","Sameer","2018-08-03 12:15:05","","157.185.130.253");
INSERT INTO adminlogs VALUES("108","1","Sameer","2018-08-03 12:52:05","","27.106.73.125");
INSERT INTO adminlogs VALUES("109","1","Sameer","2018-08-03 15:51:17","","27.106.73.125");
INSERT INTO adminlogs VALUES("110","1","Sameer","2018-08-03 16:50:41","","27.106.73.125");
INSERT INTO adminlogs VALUES("111","1","Sameer","2018-08-03 17:01:20","","157.185.130.246");
INSERT INTO adminlogs VALUES("112","1","Sameer","2018-08-03 17:29:17","","27.106.73.125");
INSERT INTO adminlogs VALUES("113","1","Sameer ","2018-08-03 17:35:53","","1.186.110.38");
INSERT INTO adminlogs VALUES("114","1","Sameer","2018-08-03 17:39:49","","1.186.110.38");
INSERT INTO adminlogs VALUES("115","1","Sameer","2018-08-04 16:15:50","","157.185.130.177");
INSERT INTO adminlogs VALUES("116","1","sameer","2018-08-05 14:28:49","","45.250.249.29");
INSERT INTO adminlogs VALUES("117","1","Sameer ","2018-08-05 18:47:06","","45.250.249.29");
INSERT INTO adminlogs VALUES("118","1","Sameer ","2018-08-05 20:51:28","","45.250.249.29");
INSERT INTO adminlogs VALUES("119","1","Sameer ","2018-08-06 09:04:10","","45.250.249.29");
INSERT INTO adminlogs VALUES("120","1","Sameer ","2018-08-06 10:13:08","","45.250.249.29");
INSERT INTO adminlogs VALUES("121","1","sameer","2018-08-06 10:24:53","","45.250.249.29");
INSERT INTO adminlogs VALUES("122","1","Sameer ","2018-08-06 11:04:32","","1.186.110.13");





CREATE TABLE `allserialnostarting` (
  `SrId` int(255) NOT NULL AUTO_INCREMENT,
  `PurchaseBill` int(100) NOT NULL,
  `Invoices` int(100) NOT NULL,
  `orderstar` int(255) NOT NULL,
  PRIMARY KEY (`SrId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO allserialnostarting VALUES("1","1001","1001","1001");





CREATE TABLE `assigncustomers` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `curdate` date NOT NULL,
  `curtime` time NOT NULL,
  `ipadd` text NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

INSERT INTO assigncustomers VALUES("8","9","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("9","11","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("10","12","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("11","27","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("12","32","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("13","33","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("14","34","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("15","35","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("16","36","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("17","37","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("18","38","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("19","39","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("20","40","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("21","41","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("22","42","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("23","43","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("24","44","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("25","45","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("26","46","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("27","47","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("28","48","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("29","49","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("30","50","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("31","51","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("32","52","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("33","53","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("34","54","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("35","55","1","2018-07-19","00:03:45","150.242.204.74");
INSERT INTO assigncustomers VALUES("36","1","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("37","2","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("38","3","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("39","4","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("40","5","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("41","6","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("42","7","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("43","11","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("44","12","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("45","13","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("46","16","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("47","17","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("48","18","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("49","19","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("50","20","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("51","21","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("52","22","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("53","23","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("54","24","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("55","25","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("56","26","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("57","27","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("58","56","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("59","57","2","2018-07-19","00:05:20","150.242.204.74");
INSERT INTO assigncustomers VALUES("60","59","2","2018-07-19","00:05:20","150.242.204.74");





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

INSERT INTO customer VALUES("1","Rajendar","Gupta","Vasai","9768038893","8454044772","","","Ghansoli","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","RajendarGupta");
INSERT INTO customer VALUES("2","Mahendar","Gupta","Rabala","9167028937","","","","Rabala","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","MahendarGupta");
INSERT INTO customer VALUES("3","Santosh","","Palghar","7972872457","9028253048","sssgupta12345@gmail.com","","Palghar","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","Santosh");
INSERT INTO customer VALUES("4","Gangadar","","Bhandari Compound","8484077624","","","","Bhiwandi","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","Gangadar");
INSERT INTO customer VALUES("5","Vinod","Jain","turbha gao","9820248611","8850093756","","","sanpada","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","VinodJain");
INSERT INTO customer VALUES("6","Hari om Traders","Vikas","Turbha gao","8850661292","9833418566","","","Turbha","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","HariomTradersVikas");
INSERT INTO customer VALUES("7","noor","","kapur boari","9923300067","","","","bhiwandi","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","noor");
INSERT INTO customer VALUES("8","Hasal","Momoni","old market","9819971669","","","","Uran","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","HasalMomoni");
INSERT INTO customer VALUES("9","Ganesh","","sai mandir","8169314119","","","","Uran","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","Ganesh");
INSERT INTO customer VALUES("10","Gupta","bhai","sector 10 kamotha gao","9768313235","","","","kamotha","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","Guptabhai");
INSERT INTO customer VALUES("11","Ashish","Gupta","near majit ","9769267555","9619970099","","","kalamboli","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","AshishGupta");
INSERT INTO customer VALUES("12","Dhananjay","gupta","virupaksh mandir","8652056208","","","","panvel","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","Dhananjaygupta");
INSERT INTO customer VALUES("13","manoj","chavrasiya","bengan vadi","9323155835","","","","ghovandi","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","manojchavrasiya");
INSERT INTO customer VALUES("14","Gupta","","near gulshan hotel","7738721695","","","","sakinaka","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","Gupta");
INSERT INTO customer VALUES("15","Sonday","","market","8976270270","","","","uran","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","Sonday");
INSERT INTO customer VALUES("16","badrinath","chaurasiya","market","9819574458","9619493840","","","uran","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","badrinathchaurasiya");
INSERT INTO customer VALUES("18","ajay ","singh","oppsite hdfc bank","7021828236","7507758449","","","nalasopara","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","ajaysingh");
INSERT INTO customer VALUES("19","vinod","gupta","near shivaji putla","8149718913","766766475","","","bhiwandi","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","vinodgupta");
INSERT INTO customer VALUES("20","vijay ","bhai","vinayak hall","9892248202","9321490813","","","kalyan","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","vijaybhai");
INSERT INTO customer VALUES("21","vinayak","parab","dadar lalbag","9969041368","7303222225","vinayakparab40@gmail.com","","dadar","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","vinayakparab");
INSERT INTO customer VALUES("22","kazim","rizvi","doodhnatha","9325560808","","","","kalyan","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","kazimrizvi");
INSERT INTO customer VALUES("23","haidar","","amrut nagar","9321323714","","","","mumbra","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","haidar");
INSERT INTO customer VALUES("24","parvesh","aansari","bhiwandi","8805415541","","","","bhiwandi","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","parveshaansari");
INSERT INTO customer VALUES("25","jayprakash","gupta","nalasopara","7058516650","","g.jpshany446@gmail.com","","nalasopara","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","jayprakashgupta");
INSERT INTO customer VALUES("26","abdul wajid","shaik","relycolni","9029901549","","","","seewood daraway","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","abdulwajidshaik");
INSERT INTO customer VALUES("27","rajkumar","gupta","busstop","9082021175","","","","kalmboli","Maharashtra","India","","YES","0000-00-00 00:00:00","::1","rajkumargupta");
INSERT INTO customer VALUES("31","Sagar","Vanave","Cosmo chs new panvel","8691897777","","ssv1437@gmail.com","extension not allowed, please choose a JPG or JPEG or PNG file.","New Panvel","Maharashtra","India","","NO","2018-06-28 18:08:49","1.186.221.207","");
INSERT INTO customer VALUES("32","Prakash Traders","","Yard Market","9833241262","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-03 17:35:35","1.186.221.207","PrakashTraders");
INSERT INTO customer VALUES("33","Bhagya","Lakshimi","yard Market","9167712509","","","extension not allowed, please choose a JPG or JPEG or PNG file.","panvel","Maharashtra","India","","YES","2018-07-03 17:42:38","1.186.221.207","BhagyaLakshimi");
INSERT INTO customer VALUES("34","Ganesh","Traders","Uran Naka","9819664989","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-03 17:45:25","1.186.221.207","GaneshTraders");
INSERT INTO customer VALUES("35","Navratan","Traders","Uran","9930822798","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-03 17:48:14","1.186.221.207","NavratanTraders");
INSERT INTO customer VALUES("36","New Bharat","Traders","Uran Naka","9833694330","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-03 17:50:54","1.186.221.207","NewBharatTraders");
INSERT INTO customer VALUES("37","Navdurga","","Yard Market","9930918085","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-03 18:34:34","1.186.221.207","Navdurga");
INSERT INTO customer VALUES("38","Guru Krupa","Traders","Yard Market","9769863334","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 15:25:33","150.242.204.76","GuruKrupaTraders");
INSERT INTO customer VALUES("39","Chandan","Traders","Yard Market","8454979815","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 15:26:11","150.242.204.76","ChandanTraders");
INSERT INTO customer VALUES("40","Maruti","Traders","Yard Market","9819048706","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 15:31:53","150.242.204.76","MarutiTraders");
INSERT INTO customer VALUES("41","Bajrang","Sanjay","Cineraj Thetar","9820046960","","","extension not allowed, please choose a JPG or JPEG or PNG file.","New Panvel","Maharashtra","India","","YES","2018-07-12 16:34:39","1.186.109.189","BajrangSanjay");
INSERT INTO customer VALUES("42","Vaishnavi","Pornand","Yard Market\n","9819651731","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 16:37:43","1.186.109.189","VaishnaviPornand");
INSERT INTO customer VALUES("43","Navdurga","Thanaram","Yard Market","9830918085","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 16:40:11","1.186.109.189","NavdurgaThanaram");
INSERT INTO customer VALUES("44","Ashok","Traders","Yard Market","9702478583","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 16:45:52","1.186.109.189","AshokTraders");
INSERT INTO customer VALUES("45","pooja","trades","yard markit","8897599824","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 16:47:10","1.186.109.189","poojatrades");
INSERT INTO customer VALUES("46","jay bhawani","","yard markit","9930867699","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 16:54:46","1.186.109.189","jaybhawani");
INSERT INTO customer VALUES("47","dev ","trades","yard markit","8879593385","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 16:58:55","1.186.109.189","devtrades");
INSERT INTO customer VALUES("48","shiri ram","","yard markit","9820305827","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 17:03:10","1.186.109.189","shiriram");
INSERT INTO customer VALUES("49","ktalaji","","uran naka","9819327110","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 17:05:22","1.186.109.189","ktalaji");
INSERT INTO customer VALUES("50","Dhanlakshmi","Traders","Yard Market","9619932356","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 17:06:17","1.186.109.189","DhanlakshmiTraders");
INSERT INTO customer VALUES("51","matajia","trades","yard markit","9819229038","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 17:10:03","1.186.109.189","matajiatrades");
INSERT INTO customer VALUES("52","parveen","trades","yard markit","8454901689","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 17:15:44","1.186.109.189","parveentrades");
INSERT INTO customer VALUES("53","dipika","trades","uran naka","9987694071","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 17:16:55","1.186.109.189","dipikatrades");
INSERT INTO customer VALUES("54","janta ","trades","yardmarkit","9322299733","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 17:28:17","1.186.109.189","jantatrades");
INSERT INTO customer VALUES("55","mahadew","trades","uran naka","9819699737","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-12 17:30:05","1.186.109.189","mahadewtrades");
INSERT INTO customer VALUES("56","sudhir ","maheta","mangawo","9689002727","","","extension not allowed, please choose a JPG or JPEG or PNG file.","indapor","Maharashtra","India","","YES","2018-07-12 17:35:27","1.186.109.189","sudhirmaheta");
INSERT INTO customer VALUES("57","santosh","rathod","rilwaly fatak gawo","9604613277","","","extension not allowed, please choose a JPG or JPEG or PNG file.","kapoli","Maharashtra","India","","YES","2018-07-12 17:36:58","1.186.109.189","santoshrathod");
INSERT INTO customer VALUES("58","Nagrik","Traders","Yard Market","9920678401","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Panvel","Maharashtra","India","","YES","2018-07-15 15:17:59","1.186.106.242","NagrikTraders");
INSERT INTO customer VALUES("59","Ishrat","Traders","sector:28,railway station","9889390127","","","extension not allowed, please choose a JPG or JPEG or PNG file.","Seawood Darave","Maharashtra","India","","YES","2018-07-15 15:25:22","1.186.106.242","IshratTraders");





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

INSERT INTO employee VALUES("1","Salman Shaikh","","9082606604","4297f44b13955235245b2497399d7a93","4297f44b13955235245b2497399d7a93","","extension not allowed, please choose a JPG or JPEG or PNG file.","YES","2018-07-03 18:29:19","1.186.221.207");
INSERT INTO employee VALUES("2","sameer","","9867915123","4297f44b13955235245b2497399d7a93","4297f44b13955235245b2497399d7a93","","extension not allowed, please choose a JPG or JPEG or PNG file.","YES","2018-07-12 17:59:48","1.186.109.189");





CREATE TABLE `employeelogs` (
  `LogId` int(255) NOT NULL AUTO_INCREMENT,
  `EmpId` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `LoginDateTime` datetime NOT NULL,
  `LogoutDateTime` datetime DEFAULT NULL,
  `IpAddress` text NOT NULL,
  PRIMARY KEY (`LogId`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

INSERT INTO employeelogs VALUES("1","1","Salman Shaikh","2018-07-12 17:25:52","2018-07-12 18:00:08","1.186.109.189");
INSERT INTO employeelogs VALUES("2","2","sameer","2018-07-12 18:00:21","2018-07-12 19:11:31","1.186.109.189");
INSERT INTO employeelogs VALUES("3","1","Salman Shaikh","2018-07-12 19:57:21","","49.33.33.96");
INSERT INTO employeelogs VALUES("4","1","Salman Shaikh","2018-07-12 20:37:18","","203.114.234.218");
INSERT INTO employeelogs VALUES("5","2","sameer","2018-07-14 19:05:37","","1.186.106.242");
INSERT INTO employeelogs VALUES("6","2","sameer","2018-07-15 15:49:41","","1.186.106.242");
INSERT INTO employeelogs VALUES("7","2","sameer","2018-07-17 20:53:03","","1.186.109.23");
INSERT INTO employeelogs VALUES("8","1","Salman Shaikh","2018-07-18 19:24:34","","27.106.73.123");
INSERT INTO employeelogs VALUES("9","1","Salman Shaikh","2018-07-18 19:33:18","","27.106.73.123");
INSERT INTO employeelogs VALUES("10","1","Salman Shaikh","2018-07-18 19:33:22","","27.106.73.123");
INSERT INTO employeelogs VALUES("11","1","Salman Shaikh","2018-07-18 19:33:50","","27.106.73.123");
INSERT INTO employeelogs VALUES("12","1","Salman Shaikh","2018-07-18 20:02:56","","49.33.17.24");
INSERT INTO employeelogs VALUES("13","1","Salman Shaikh","2018-07-19 00:09:33","2018-07-19 00:23:12","150.242.204.74");
INSERT INTO employeelogs VALUES("14","2","sameer","2018-07-19 00:23:24","2018-07-19 00:31:21","150.242.204.74");
INSERT INTO employeelogs VALUES("15","1","Salman Shaikh","2018-07-19 00:31:23","","150.242.204.74");
INSERT INTO employeelogs VALUES("16","1","Salman Shaikh","2018-07-19 10:03:00","","49.33.35.159");
INSERT INTO employeelogs VALUES("17","1","Salman Shaikh","2018-07-19 10:31:37","","49.33.3.48");
INSERT INTO employeelogs VALUES("18","1","Salman Shaikh","2018-07-19 11:18:39","","49.33.36.93");
INSERT INTO employeelogs VALUES("19","1","Salman Shaikh","2018-07-19 17:21:24","","49.33.12.255");
INSERT INTO employeelogs VALUES("20","1","Salman Shaikh","2018-07-20 18:49:35","","49.33.41.154");
INSERT INTO employeelogs VALUES("21","1","Salman Shaikh","2018-07-20 19:11:09","","157.185.130.248");
INSERT INTO employeelogs VALUES("22","1","Salman Shaikh","2018-07-20 19:22:01","","1.186.109.103");
INSERT INTO employeelogs VALUES("23","1","Salman Shaikh","2018-07-20 20:48:51","","49.33.4.8");
INSERT INTO employeelogs VALUES("24","2","sameer","2018-07-20 20:51:49","","150.242.204.74");
INSERT INTO employeelogs VALUES("25","1","Salman Shaikh","2018-07-21 12:38:16","","49.33.35.202");
INSERT INTO employeelogs VALUES("26","1","Salman Shaikh","2018-07-21 20:42:03","","49.33.34.241");
INSERT INTO employeelogs VALUES("27","1","Salman Shaikh","2018-07-21 20:42:04","","49.33.34.241");
INSERT INTO employeelogs VALUES("28","1","Salman Shaikh","2018-07-22 10:51:48","","49.33.123.156");
INSERT INTO employeelogs VALUES("29","1","Salman Shaikh","2018-07-22 11:31:36","","49.33.123.156");
INSERT INTO employeelogs VALUES("30","1","Salman Shaikh","2018-07-22 12:52:00","","27.106.73.101");
INSERT INTO employeelogs VALUES("31","1","Salman Shaikh","2018-07-22 16:58:21","","203.114.235.59");
INSERT INTO employeelogs VALUES("32","1","Salman Shaikh","2018-07-22 21:37:17","","49.33.116.191");
INSERT INTO employeelogs VALUES("33","1","Salman Shaikh","2018-07-22 21:37:17","","49.33.116.191");
INSERT INTO employeelogs VALUES("34","1","Salman Shaikh","2018-07-23 10:44:28","","49.32.175.221");
INSERT INTO employeelogs VALUES("35","1","Salman Shaikh","2018-07-23 13:12:24","","49.32.131.4");
INSERT INTO employeelogs VALUES("36","1","Salman Shaikh","2018-07-23 13:12:24","","49.32.131.4");
INSERT INTO employeelogs VALUES("37","1","Salman Shaikh","2018-07-24 13:08:12","","49.32.150.116");
INSERT INTO employeelogs VALUES("38","1","Salman Shaikh","2018-07-27 19:19:33","","49.33.154.195");
INSERT INTO employeelogs VALUES("39","1","Salman Shaikh","2018-07-28 13:04:26","","49.33.144.146");
INSERT INTO employeelogs VALUES("40","1","Salman Shaikh","2018-07-28 13:22:41","","49.33.144.146");
INSERT INTO employeelogs VALUES("41","1","Salman Shaikh","2018-07-28 13:32:50","","49.33.144.146");
INSERT INTO employeelogs VALUES("42","1","Salman Shaikh","2018-07-28 13:42:36","","49.33.144.146");
INSERT INTO employeelogs VALUES("43","1","Salman Shaikh","2018-07-28 13:54:21","2018-07-28 13:58:04","203.114.232.173");
INSERT INTO employeelogs VALUES("44","1","Salman Shaikh","2018-07-28 16:48:03","","1.186.110.145");
INSERT INTO employeelogs VALUES("45","1","Salman Shaikh","2018-07-29 09:32:00","","49.33.183.41");
INSERT INTO employeelogs VALUES("46","1","Salman Shaikh","2018-07-29 09:32:00","","49.33.183.41");
INSERT INTO employeelogs VALUES("47","1","Salman Shaikh","2018-07-29 09:42:41","","49.33.183.41");
INSERT INTO employeelogs VALUES("48","1","Salman Shaikh","2018-07-29 11:47:30","","27.106.73.125");
INSERT INTO employeelogs VALUES("49","1","Salman Shaikh","2018-07-29 11:58:56","","49.33.191.114");
INSERT INTO employeelogs VALUES("50","1","Salman Shaikh","2018-07-29 11:59:13","","49.33.191.114");
INSERT INTO employeelogs VALUES("51","1","Salman Shaikh","2018-07-30 11:22:37","","49.33.157.140");
INSERT INTO employeelogs VALUES("52","1","Salman Shaikh","2018-07-30 12:43:19","","49.33.181.216");
INSERT INTO employeelogs VALUES("53","1","Salman Shaikh","2018-07-30 14:13:44","","49.33.174.26");
INSERT INTO employeelogs VALUES("54","1","Salman Shaikh","2018-07-31 18:47:14","","49.32.160.223");
INSERT INTO employeelogs VALUES("55","1","Salman Shaikh","2018-07-31 19:54:45","","49.32.160.223");
INSERT INTO employeelogs VALUES("56","1","Salman Shaikh","2018-07-31 20:21:16","","49.32.160.223");
INSERT INTO employeelogs VALUES("57","1","Salman Shaikh","2018-08-01 12:48:58","","27.106.73.125");
INSERT INTO employeelogs VALUES("58","1","Salman Shaikh","2018-08-01 18:14:33","","49.32.129.48");
INSERT INTO employeelogs VALUES("59","1","Salman Shaikh","2018-08-02 11:46:53","","49.33.178.149");
INSERT INTO employeelogs VALUES("60","1","Salman Shaikh","2018-08-02 11:46:54","","49.33.178.149");
INSERT INTO employeelogs VALUES("61","1","Salman Shaikh","2018-08-02 11:50:19","","49.33.178.149");
INSERT INTO employeelogs VALUES("62","1","Salman Shaikh","2018-08-02 11:55:22","","49.33.178.149");
INSERT INTO employeelogs VALUES("63","1","Salman Shaikh","2018-08-02 12:08:29","","49.33.155.251");
INSERT INTO employeelogs VALUES("64","1","Salman Shaikh","2018-08-03 12:05:47","","49.33.151.155");
INSERT INTO employeelogs VALUES("65","1","Salman Shaikh","2018-08-03 17:01:17","","49.33.129.148");
INSERT INTO employeelogs VALUES("66","1","Salman Shaikh","2018-08-04 11:18:23","","49.33.131.100");
INSERT INTO employeelogs VALUES("67","1","Salman Shaikh","2018-08-04 12:16:19","","49.33.162.65");
INSERT INTO employeelogs VALUES("68","1","Salman Shaikh","2018-08-04 13:23:57","","49.33.160.115");
INSERT INTO employeelogs VALUES("69","1","Salman Shaikh","2018-08-05 10:47:23","","49.33.134.234");
INSERT INTO employeelogs VALUES("70","1","Salman Shaikh","2018-08-06 10:47:52","","49.33.215.154");





CREATE TABLE `inv_and_emp` (
  `InvEmpId` int(255) NOT NULL AUTO_INCREMENT,
  `EmpId` int(255) NOT NULL,
  `InvId` int(255) NOT NULL,
  PRIMARY KEY (`InvEmpId`),
  KEY `EmpId` (`EmpId`),
  KEY `InvId` (`InvId`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

INSERT INTO inv_and_emp VALUES("1","1","1");
INSERT INTO inv_and_emp VALUES("2","2","69");
INSERT INTO inv_and_emp VALUES("3","2","70");
INSERT INTO inv_and_emp VALUES("4","2","71");
INSERT INTO inv_and_emp VALUES("5","1","2");
INSERT INTO inv_and_emp VALUES("6","1","94");
INSERT INTO inv_and_emp VALUES("7","1","93");
INSERT INTO inv_and_emp VALUES("8","1","89");
INSERT INTO inv_and_emp VALUES("9","1","88");
INSERT INTO inv_and_emp VALUES("10","1","90");
INSERT INTO inv_and_emp VALUES("11","1","87");
INSERT INTO inv_and_emp VALUES("12","1","86");
INSERT INTO inv_and_emp VALUES("13","1","85");
INSERT INTO inv_and_emp VALUES("14","1","92");
INSERT INTO inv_and_emp VALUES("15","1","84");
INSERT INTO inv_and_emp VALUES("16","1","84");
INSERT INTO inv_and_emp VALUES("17","2","72");
INSERT INTO inv_and_emp VALUES("18","2","81");
INSERT INTO inv_and_emp VALUES("19","1","91");
INSERT INTO inv_and_emp VALUES("20","1","25");
INSERT INTO inv_and_emp VALUES("21","1","16");
INSERT INTO inv_and_emp VALUES("22","1","14");
INSERT INTO inv_and_emp VALUES("23","1","38");
INSERT INTO inv_and_emp VALUES("24","1","2");
INSERT INTO inv_and_emp VALUES("25","1","45");
INSERT INTO inv_and_emp VALUES("26","1","22");
INSERT INTO inv_and_emp VALUES("27","1","20");
INSERT INTO inv_and_emp VALUES("28","1","19");
INSERT INTO inv_and_emp VALUES("29","1","7");
INSERT INTO inv_and_emp VALUES("30","1","96");
INSERT INTO inv_and_emp VALUES("31","1","37");
INSERT INTO inv_and_emp VALUES("32","1","25");
INSERT INTO inv_and_emp VALUES("33","1","97");
INSERT INTO inv_and_emp VALUES("34","1","98");
INSERT INTO inv_and_emp VALUES("35","2","99");
INSERT INTO inv_and_emp VALUES("36","1","100");
INSERT INTO inv_and_emp VALUES("37","1","100");
INSERT INTO inv_and_emp VALUES("38","1","100");
INSERT INTO inv_and_emp VALUES("39","1","103");
INSERT INTO inv_and_emp VALUES("40","1","66");
INSERT INTO inv_and_emp VALUES("41","1","18");
INSERT INTO inv_and_emp VALUES("42","1","56");
INSERT INTO inv_and_emp VALUES("43","1","41");
INSERT INTO inv_and_emp VALUES("44","1","49");
INSERT INTO inv_and_emp VALUES("45","1","12");
INSERT INTO inv_and_emp VALUES("46","1","46");





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

INSERT INTO invoicedata VALUES("75","74","MA1(370)","370","2","16","15320","5920","0","2018-07-15","2018-07-15 15:08:52","1.186.106.242");
INSERT INTO invoicedata VALUES("76","74","SBH(470)","470","9","20","15320","9400","0","2018-07-15","2018-07-15 15:08:52","1.186.106.242");
INSERT INTO invoicedata VALUES("77","75","MA1(370)","346","2","126","43596","43596","0","2018-07-15","2018-07-15 15:21:54","1.186.106.242");
INSERT INTO invoicedata VALUES("78","76","MA1(370)","370","2","16","5920","5920","0","2018-07-15","2018-07-15 15:22:32","1.186.106.242");
INSERT INTO invoicedata VALUES("79","77","MA1(370)","370","2","16","5920","5920","0","2018-07-15","2018-07-15 15:22:58","1.186.106.242");
INSERT INTO invoicedata VALUES("80","78","MA1(370)","370","2","16","5920","5920","0","2018-07-15","2018-07-15 15:23:57","1.186.106.242");
INSERT INTO invoicedata VALUES("81","79","MA1(370)","370","2","16","5920","5920","0","2018-07-15","2018-07-15 15:24:28","1.186.106.242");
INSERT INTO invoicedata VALUES("82","80","MA1(370)","340","2","42","14280","14280","0","2018-07-15","2018-07-15 15:25:53","1.186.106.242");
INSERT INTO invoicedata VALUES("83","81","94(290)","290","16","96","51720","27840","0","2018-07-15","2018-07-15 15:27:28","1.186.106.242");
INSERT INTO invoicedata VALUES("84","81","SAMPANNA(130)","120","6","199","51720","23880","0","2018-07-15","2018-07-15 15:27:28","1.186.106.242");
INSERT INTO invoicedata VALUES("85","82","94(290)","290","16","92","26680","26680","0","2018-07-15","2018-07-15 15:27:54","1.186.106.242");
INSERT INTO invoicedata VALUES("88","84","Kala tambakho(100)","100","22","303","3030","3030","0","2018-07-18","2018-07-18 19:38:26","157.185.130.176");
INSERT INTO invoicedata VALUES("89","85","MA1(370)","9750","2","1","9750","9750","0","2018-07-18","2018-07-18 19:41:35","157.185.130.176");
INSERT INTO invoicedata VALUES("90","86","MA1(370)","4700","2","1","4700","4700","0","2018-07-18","2018-07-18 19:43:08","157.185.130.176");
INSERT INTO invoicedata VALUES("91","87","MA1(370)","370","2","36","13320","13320","0","2018-07-18","2018-07-18 19:45:21","157.185.130.176");
INSERT INTO invoicedata VALUES("92","88","MA1(370)","360","2","25","3500","3500","0","2018-07-18","2018-07-18 19:47:22","157.185.130.176");
INSERT INTO invoicedata VALUES("93","89","MA1(370)","370","2","45","16650","16650","0","2018-07-18","2018-07-18 19:48:20","157.185.130.176");
INSERT INTO invoicedata VALUES("94","90","MA1(370)","370","2","1","11540","11540","0","2018-07-18","2018-07-18 19:49:59","157.185.130.176");
INSERT INTO invoicedata VALUES("95","91","SBH(470)","470","9","1","4520","4520","0","2018-07-18","2018-07-18 19:51:42","157.185.130.176");
INSERT INTO invoicedata VALUES("96","92","MA1(370)","370","2","36","13320","13320","0","2018-07-18","2018-07-18 19:52:52","157.185.130.176");
INSERT INTO invoicedata VALUES("97","93","MA1(370)","370","2","42","15540","15540","0","2018-07-18","2018-07-18 19:54:01","157.185.130.176");
INSERT INTO invoicedata VALUES("98","94","SBH(470)","470","9","1","6640","6640","0","2018-07-18","2018-07-18 19:55:45","157.185.130.176");
INSERT INTO invoicedata VALUES("99","103","hara tabako 30(100)","110","20","34","3740","3740","0","2018-07-30","2018-07-30 14:19:54","157.185.130.244");





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
  KEY `InvId` (`InvId`),
  CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`InvId`) REFERENCES `invoices` (`InvId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

INSERT INTO invoices VALUES("74","45","1057","2018-07-14","2018-07-24","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","15320","0","Rs","15320","15320","YES","NO","0","2018-07-15","2018-07-15 15:08:52","1.186.106.242","");
INSERT INTO invoices VALUES("75","6","1058","2018-07-14","2018-07-24","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","43596","0","Rs","43596","43596","YES","NO","0","2018-07-15","2018-07-15 15:21:54","1.186.106.242","");
INSERT INTO invoices VALUES("76","58","1059","2018-07-14","2018-07-24","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","5920","0","Rs","5920","5920","YES","NO","0","2018-07-15","2018-07-15 15:22:32","1.186.106.242","");
INSERT INTO invoices VALUES("77","54","1060","2018-07-14","2018-07-24","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","5920","0","Rs","5920","5920","YES","NO","0","2018-07-15","2018-07-15 15:22:58","1.186.106.242","");
INSERT INTO invoices VALUES("78","42","1061","2018-07-14","2018-07-24","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","5920","0","Rs","5920","5920","YES","NO","0","2018-07-15","2018-07-15 15:23:57","1.186.106.242","");
INSERT INTO invoices VALUES("79","41","1062","2018-07-14","2018-07-24","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","5920","0","Rs","5920","5920","YES","NO","0","2018-07-15","2018-07-15 15:24:28","1.186.106.242","");
INSERT INTO invoices VALUES("80","59","1063","2018-07-14","2018-07-24","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","14280","0","Rs","14280","14280","YES","NO","0","2018-07-15","2018-07-15 15:25:53","1.186.106.242","");
INSERT INTO invoices VALUES("81","24","1064","2018-07-14","2018-07-24","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","51720","0","Rs","51720","51720","YES","YES","0","2018-07-15","2018-07-15 15:27:28","1.186.106.242","");
INSERT INTO invoices VALUES("82","18","1065","2018-07-14","2018-07-24","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","26680","0","Rs","26680","26680","YES","NO","0","2018-07-15","2018-07-15 15:27:54","1.186.106.242","");
INSERT INTO invoices VALUES("83","19","1066","2018-07-14","2018-07-24","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","106720","0","Rs","106720","106720","NO","NO","0","2018-07-15","2018-07-15 15:28:30","1.186.106.242","");
INSERT INTO invoices VALUES("84","47","1067","2018-07-18","2018-07-27","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","3030","0","Rs","3030","0","YES","YES","2","2018-07-18","2018-07-18 19:38:26","157.185.130.176","2018-07-27");
INSERT INTO invoices VALUES("85","48","1068","2018-07-18","2018-05-02","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","9750","0","Rs","9750","4300","YES","YES","1","2018-07-18","2018-07-18 19:41:35","157.185.130.176","2018-07-29");
INSERT INTO invoices VALUES("86","49","1069","2018-04-09","2018-04-19","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","4700","0","Rs","4700","4700","YES","YES","0","2018-07-18","2018-07-18 19:43:08","157.185.130.176","");
INSERT INTO invoices VALUES("87","55","1070","2018-05-29","2018-07-28","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","13320","0","Rs","13320","0","YES","YES","2","2018-07-18","2018-07-18 19:45:21","157.185.130.176","2018-07-28");
INSERT INTO invoices VALUES("88","41","1071","2018-06-09","2018-07-19","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","3500","0","Rs","3500","0","YES","YES","2","2018-07-18","2018-07-18 19:47:22","157.185.130.176","");
INSERT INTO invoices VALUES("89","53","1072","2018-04-26","2018-07-28","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","16650","0","Rs","16650","0","YES","YES","2","2018-07-18","2018-07-18 19:48:20","157.185.130.176","2018-07-28");
INSERT INTO invoices VALUES("90","45","1073","2018-05-22","2018-07-11","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","11540","0","Rs","11540","2540","YES","YES","1","2018-07-18","2018-07-18 19:49:59","157.185.130.176","2018-08-06");
INSERT INTO invoices VALUES("91","38","1074","2018-04-06","2018-05-06","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","4520","0","Rs","4520","0","YES","YES","2","2018-07-18","2018-07-18 19:51:42","157.185.130.176","2018-07-22");
INSERT INTO invoices VALUES("92","43","1075","2018-05-26","2018-06-15","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","13320","0","Rs","13320","8500","YES","YES","1","2018-07-18","2018-07-18 19:52:52","157.185.130.176","2018-07-29");
INSERT INTO invoices VALUES("93","46","1076","2018-05-08","2018-06-17","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","15540","0","Rs","15540","0","YES","YES","2","2018-07-18","2018-07-18 19:54:01","157.185.130.176","2018-07-29");
INSERT INTO invoices VALUES("94","52","1077","2018-05-08","2018-06-17","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","6640","0","Rs","6640","0","YES","YES","2","2018-07-18","2018-07-18 19:55:45","157.185.130.176","2018-07-27");
INSERT INTO invoices VALUES("95","32","1078","2018-07-20","2018-07-30","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","14100","0","Rs","14100","14100","YES","NO","0","2018-07-20","2018-07-20 18:52:33","157.185.130.179","");
INSERT INTO invoices VALUES("96","54","1079","2018-03-14","2018-04-23","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","13320","0","Rs","13320","4320","YES","NO","1","2018-07-20","2018-07-20 19:03:27","157.185.130.179","2018-08-03");
INSERT INTO invoices VALUES("97","12","1080","2018-06-10","2018-07-31","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","5730","0","Rs","5730","0","YES","NO","2","2018-07-20","2018-07-20 20:43:06","150.242.204.74","2018-07-31");
INSERT INTO invoices VALUES("98","12","1081","2018-06-18","2018-07-31","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","19580","0","Rs","19580","0","YES","NO","2","2018-07-20","2018-07-20 20:46:11","150.242.204.74","2018-07-31");
INSERT INTO invoices VALUES("99","1","1082","2018-06-18","2018-07-19","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","138700","0","Rs","138700","126700","YES","NO","1","2018-07-20","2018-07-20 20:58:25","150.242.204.74","");
INSERT INTO invoices VALUES("100","19","1083","2018-07-17","2018-07-27","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","110080","0","Rs","110080","110080","YES","NO","0","2018-07-20","2018-07-20 21:21:51","150.242.204.74","");
INSERT INTO invoices VALUES("101","1","1084","2018-07-28","2018-08-07","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","330","0","Rs","330","330","NO","NO","0","2018-07-28","2018-07-28 17:01:35","1.186.110.145","");
INSERT INTO invoices VALUES("102","1","1085","2018-07-28","2018-08-07","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","370","0","Rs","370","370","NO","NO","0","2018-07-28","2018-07-28 17:02:17","1.186.110.145","");
INSERT INTO invoices VALUES("103","44","1086","2018-07-30","2018-08-19","extension not allowed, please choose a JPG or JPEG or PNG file.","","","","3740","0","Rs","3740","170","YES","NO","1","2018-07-30","2018-07-30 14:19:54","157.185.130.244","2018-08-06");





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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO orderdata VALUES("1","1","32","SBH(470)","470","9","30","14100","14100","14100","2018-07-19","2018-07-19 10:36:00","49.33.3.48");
INSERT INTO orderdata VALUES("2","2","46","MA1(370)","370","2","20","7400","7400","7400","2018-07-19","2018-07-19 11:32:09","49.33.36.93");
INSERT INTO orderdata VALUES("3","3","47","ma2(330)","330","18","40","13200","13200","13200","2018-07-19","2018-07-19 11:45:08","49.33.59.39");
INSERT INTO orderdata VALUES("4","4","48","SBH(470)","470","9","30","14100","14100","14100","2018-07-19","2018-07-19 11:50:19","49.33.59.39");
INSERT INTO orderdata VALUES("5","5","48","MA1(370)","370","2","42","15540","15540","15540","2018-07-19","2018-07-19 11:50:58","49.33.59.39");
INSERT INTO orderdata VALUES("6","6","41","MA1(370)","370","2","42","15540","15540","15540","2018-07-19","2018-07-19 12:20:31","49.33.31.195");
INSERT INTO orderdata VALUES("7","9","38","MA1(370)","370","2","42","15540","15540","15540","2018-08-01","2018-08-01 12:50:37","27.106.73.125");
INSERT INTO orderdata VALUES("8","10","48","ma2(330)","330","18","10","3300","3300","3300","2018-08-01","2018-08-01 12:51:45","27.106.73.125");
INSERT INTO orderdata VALUES("9","11","45","sada tambakho(30)","30","19","42","1260","1260","1260","2018-08-04","2018-08-04 11:19:28","49.33.131.100");
INSERT INTO orderdata VALUES("10","12","46","SBH(470)","470","9","15","7050","7050","7050","2018-08-04","2018-08-04 13:25:04","49.33.160.115");
INSERT INTO orderdata VALUES("12","14","39","hara tabako 30(100)","110","20","33","3630","3630","3630","2018-08-05","2018-08-05 10:49:30","49.33.134.234");





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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO orders VALUES("1","1001","1","9082606604","2018-07-19","32","Prakash Traders ","14100","14100","NO","2018-07-19","2018-07-19 10:36:00","49.33.3.48","YES");
INSERT INTO orders VALUES("2","1002","1","9082606604","2018-07-19","46","jay bhawani ","7400","7400","NO","2018-07-19","2018-07-19 11:32:09","49.33.36.93","YES");
INSERT INTO orders VALUES("3","1003","1","9082606604","2018-07-19","47","dev  trades","13200","13200","NO","2018-07-19","2018-07-19 11:45:08","49.33.59.39","YES");
INSERT INTO orders VALUES("4","1004","1","9082606604","2018-07-19","48","shiri ram ","14100","14100","NO","2018-07-19","2018-07-19 11:50:19","49.33.59.39","YES");
INSERT INTO orders VALUES("5","1005","1","9082606604","2018-07-19","48","shiri ram ","15540","15540","NO","2018-07-19","2018-07-19 11:50:58","49.33.59.39","YES");
INSERT INTO orders VALUES("6","1006","1","9082606604","2018-07-19","41","Bajrang Sanjay","15540","15540","YES","2018-07-19","2018-07-19 12:20:31","49.33.31.195","YES");
INSERT INTO orders VALUES("7","1007","1","9082606604","2018-07-21","43","Navdurga Thanaram","7200","7200","YES","2018-07-21","2018-07-21 12:39:39","49.33.35.202","YES");
INSERT INTO orders VALUES("8","1008","1","9082606604","2018-07-21","51","matajia trades","2400","2400","YES","2018-07-21","2018-07-21 12:40:44","49.33.35.202","YES");
INSERT INTO orders VALUES("9","1009","1","9082606604","2018-08-01","38","Guru Krupa Traders","15540","15540","YES","2018-08-01","2018-08-01 12:50:37","27.106.73.125","YES");
INSERT INTO orders VALUES("10","1010","1","9082606604","2018-08-01","48","shiri ram ","3300","3300","YES","2018-08-01","2018-08-01 12:51:45","27.106.73.125","YES");
INSERT INTO orders VALUES("11","1011","1","9082606604","2018-08-04","45","pooja trades","1260","1260","YES","2018-08-04","2018-08-04 11:19:28","49.33.131.100","YES");
INSERT INTO orders VALUES("12","1012","1","9082606604","2018-08-04","46","jay bhawani ","7050","7050","YES","2018-08-04","2018-08-04 13:25:04","49.33.160.115","YES");
INSERT INTO orders VALUES("13","1013","1","9082606604","2018-08-05","39","Chandan Traders","3300","3300","NO","2018-08-05","2018-08-05 10:48:19","49.33.134.234","NO");
INSERT INTO orders VALUES("14","1014","1","9082606604","2018-08-05","39","Chandan Traders","3630","3630","YES","2018-08-05","2018-08-05 10:49:30","49.33.134.234","YES");





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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

INSERT INTO paymenthistory VALUES("2","46","93","1","2018-07-18","2018-05-28","","6040","15540","9500","2018-07-18 20:07:25","49.33.17.24","");
INSERT INTO paymenthistory VALUES("3","24","72","2","2018-07-19","2018-07-27","","159416","181416","22000","2018-07-19 00:27:29","150.242.204.74","");
INSERT INTO paymenthistory VALUES("4","38","91","1","2018-07-19","2018-04-26","","2520","4520","2000","2018-07-19 10:38:50","49.33.3.48","");
INSERT INTO paymenthistory VALUES("5","52","94","1","2018-07-19","2018-05-28","","3640","6640","3000","2018-07-19 11:19:21","49.33.36.93","");
INSERT INTO paymenthistory VALUES("6","41","88","1","2018-07-19","2018-06-29","","0","3500","3500","2018-07-19 12:15:43","49.33.31.195","");
INSERT INTO paymenthistory VALUES("7","1","99","2","2018-07-20","2018-07-19","Ghansoli Salman ","126700","138700","12000","2018-07-20 21:02:51","150.242.204.74","");
INSERT INTO paymenthistory VALUES("8","33","16","1","2018-07-21","2018-07-21","","0","1230","1230","2018-07-21 12:42:33","49.33.35.202","");
INSERT INTO paymenthistory VALUES("9","44","7","1","2018-07-22","2018-07-14","","0","6600","6600","2018-07-22 10:59:27","49.33.123.156","");
INSERT INTO paymenthistory VALUES("10","46","93","1","2018-07-22","2018-06-07","","3040","6040","3000","2018-07-22 11:33:44","49.33.123.156","");
INSERT INTO paymenthistory VALUES("11","38","91","1","2018-07-22","2018-05-06","","0","2520","2520","2018-07-22 11:44:29","49.33.70.11","2018-07-22");
INSERT INTO paymenthistory VALUES("12","51","38","1","2018-07-22","2018-07-10","","8540","15540","7000","2018-07-22 12:03:02","49.33.77.45","");
INSERT INTO paymenthistory VALUES("13","45","90","1","2018-07-22","2018-06-11","","9540","11540","2000","2018-07-22 12:07:31","49.33.77.45","");
INSERT INTO paymenthistory VALUES("14","32","45","1","2018-07-23","2018-06-29","","5750","9250","3500","2018-07-23 10:45:13","49.32.175.221","2018-07-23");
INSERT INTO paymenthistory VALUES("15","52","94","1","2018-07-23","2018-06-07","","640","3640","3000","2018-07-23 13:14:18","49.32.131.4","2018-07-23");
INSERT INTO paymenthistory VALUES("16","32","45","1","2018-07-24","2018-07-09","","3250","5750","2500","2018-07-24 13:09:56","49.32.150.116","2018-07-24");
INSERT INTO paymenthistory VALUES("17","52","94","1","2018-07-27","2018-06-17","","0","640","640","2018-07-27 19:22:04","49.33.154.195","2018-07-27");
INSERT INTO paymenthistory VALUES("18","54","96","1","2018-07-28","2018-04-03","","10320","13320","3000","2018-07-28 13:04:53","49.33.144.146","2018-07-28");
INSERT INTO paymenthistory VALUES("19","9","20","1","2018-07-28","2018-07-22","","0","10360","10360","2018-07-28 13:05:29","49.33.144.146","2018-07-28");
INSERT INTO paymenthistory VALUES("20","32","45","1","2018-07-28","2018-07-19","","0","3250","3250","2018-07-28 13:07:12","49.33.144.146","2018-07-28");
INSERT INTO paymenthistory VALUES("21","55","87","1","2018-07-28","2018-06-18","","0","13320","13320","2018-07-28 13:08:22","49.33.144.146","2018-07-28");
INSERT INTO paymenthistory VALUES("22","48","85","1","2018-07-29","2018-05-02","","4300","9750","5450","2018-07-29 11:48:45","49.33.191.114","2018-07-29");
INSERT INTO paymenthistory VALUES("23","43","92","1","2018-07-29","2018-06-15","","8500","13320","4820","2018-07-29 11:49:25","49.33.191.114","2018-07-29");
INSERT INTO paymenthistory VALUES("24","39","37","1","2018-07-29","2018-08-01","","10000","14100","4100","2018-07-29 11:52:01","49.33.191.114","2018-07-29");
INSERT INTO paymenthistory VALUES("25","54","96","1","2018-07-29","2018-04-13","","7320","10320","3000","2018-07-29 11:52:22","49.33.191.114","2018-07-29");
INSERT INTO paymenthistory VALUES("26","40","25","1","2018-07-20","2018-07-30","","10100","14100","4000","2018-07-29 11:28:00","1.186.109.189","");
INSERT INTO paymenthistory VALUES("27","45","90","1","2018-07-29","2018-06-21","","7040","9540","2500","2018-07-29 12:00:12","49.33.191.114","2018-07-29");
INSERT INTO paymenthistory VALUES("28","46","93","1","2018-07-29","2018-06-17","","0","3040","3040","2018-07-29 12:00:51","49.33.191.114","2018-07-29");
INSERT INTO paymenthistory VALUES("29","41","2","1","2018-06-20","2018-07-30","","4000","6290","2290","2018-07-29 01:10:00","1.186.109.189","");
INSERT INTO paymenthistory VALUES("31","41","2","1","2018-07-30","2018-07-20","","0","4000","4000","2018-07-30 11:23:32","49.33.157.140","2018-07-30");
INSERT INTO paymenthistory VALUES("32","35","19","1","2018-07-30","2018-07-21","","23200","28200","5000","2018-07-30 12:44:33","49.33.181.216","2018-07-30");
INSERT INTO paymenthistory VALUES("33","33","14","1","2018-07-31","2018-07-22","","8360","10360","2000","2018-07-31 18:48:03","49.32.160.223","2018-07-31");
INSERT INTO paymenthistory VALUES("34","45","90","1","2018-07-31","2018-07-01","","5040","7040","2000","2018-07-31 18:48:56","49.32.160.223","2018-07-31");
INSERT INTO paymenthistory VALUES("35","35","19","1","2018-07-31","2018-07-31","","18200","23200","5000","2018-07-31 18:49:25","49.32.160.223","2018-07-31");
INSERT INTO paymenthistory VALUES("36","12","97","1","2018-07-31","2018-06-30","","0","5730","5730","2018-07-31 19:55:19","49.32.160.223","2018-07-31");
INSERT INTO paymenthistory VALUES("37","12","98","1","2018-07-31","2018-07-08","","0","19580","19580","2018-07-31 19:56:08","49.32.160.223","2018-07-31");
INSERT INTO paymenthistory VALUES("38","52","46","1","2018-08-02","2018-06-25","","2200","4700","2500","2018-08-02 11:56:07","49.33.178.149","2018-08-02");
INSERT INTO paymenthistory VALUES("39","35","19","1","2018-08-02","2018-08-10","","13200","18200","5000","2018-08-02 12:09:31","49.33.155.251","2018-08-02");
INSERT INTO paymenthistory VALUES("40","47","18","1","2018-08-03","2018-07-15","","10000","14280","4280","2018-08-03 12:06:25","49.33.151.155","2018-08-03");
INSERT INTO paymenthistory VALUES("41","54","96","1","2018-08-03","2018-04-23","","4320","7320","3000","2018-08-03 12:07:11","49.33.151.155","2018-08-03");
INSERT INTO paymenthistory VALUES("42","40","25","1","2018-08-03","2018-08-09","","6100","10100","4000","2018-08-03 12:07:56","49.33.151.155","2018-08-03");
INSERT INTO paymenthistory VALUES("43","39","37","1","2018-08-03","2018-08-11","","5000","10000","5000","2018-08-03 12:08:42","49.33.151.155","2018-08-03");
INSERT INTO paymenthistory VALUES("44","32","66","1","2018-08-04","2018-07-14","","0","3740","3740","2018-08-04 12:16:46","49.33.162.65","2018-08-04");
INSERT INTO paymenthistory VALUES("45","52","46","1","2018-08-04","2018-07-05","","0","2200","2200","2018-08-04 12:17:17","49.33.162.65","2018-08-04");
INSERT INTO paymenthistory VALUES("46","33","14","1","2018-08-04","2018-08-01","","6360","8360","2000","2018-08-04 12:17:51","49.33.162.65","2018-08-04");
INSERT INTO paymenthistory VALUES("47","35","19","1","2018-08-04","2018-08-20","","8200","13200","5000","2018-08-04 12:18:09","49.33.162.65","2018-08-04");
INSERT INTO paymenthistory VALUES("48","44","103","1","2018-08-06","2018-08-19","","170","3740","3570","2018-08-06 10:49:15","49.33.215.154","2018-08-06");
INSERT INTO paymenthistory VALUES("49","45","90","1","2018-08-06","2018-07-11","","2540","5040","2500","2018-08-06 10:51:49","49.33.215.154","2018-08-06");





CREATE TABLE `paymentstatus` (
  `PSId` int(255) NOT NULL,
  `PaymentStatus` varchar(255) NOT NULL,
  PRIMARY KEY (`PSId`),
  KEY `PSId` (`PSId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO paymentstatus VALUES("0","Unpaid");
INSERT INTO paymentstatus VALUES("1","Partpaid");
INSERT INTO paymentstatus VALUES("2","Paid");





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

INSERT INTO product VALUES("2","MA1","302","370","","YES","0000-00-00 00:00:00","::1");
INSERT INTO product VALUES("3","TM 550","292","330","","YES","0000-00-00 00:00:00","::1");
INSERT INTO product VALUES("4","PANCHI","258","290","","YES","0000-00-00 00:00:00","::1");
INSERT INTO product VALUES("6","SAMPANNA","110","130","","YES","0000-00-00 00:00:00","::1");
INSERT INTO product VALUES("7","RAJA SAHEB","70","95","","YES","0000-00-00 00:00:00","::1");
INSERT INTO product VALUES("8","MA DEL","145","165","","YES","0000-00-00 00:00:00","::1");
INSERT INTO product VALUES("9","SBH","300","470","","YES","0000-00-00 00:00:00","::1");
INSERT INTO product VALUES("10","MOHA","175","200","","YES","0000-00-00 00:00:00","::1");
INSERT INTO product VALUES("12","RK1","175","200","","YES","0000-00-00 00:00:00","::1");
INSERT INTO product VALUES("14","GUL CHAND","96","120","","YES","0000-00-00 00:00:00","::1");
INSERT INTO product VALUES("16","94","151","200","extension not allowed, please choose a JPG or JPEG or PNG file.","NO","2018-06-28 17:54:16","1.186.221.207");
INSERT INTO product VALUES("17","94","265","290","extension not allowed, please choose a JPG or JPEG or PNG file.","YES","2018-07-03 18:14:04","1.186.221.207");
INSERT INTO product VALUES("18","ma2","290","330","extension not allowed, please choose a JPG or JPEG or PNG file.","YES","2018-07-12 16:48:12","1.186.109.189");
INSERT INTO product VALUES("19","sada tambakho","25","30","extension not allowed, please choose a JPG or JPEG or PNG file.","YES","2018-07-12 16:49:36","1.186.109.189");
INSERT INTO product VALUES("20","hara tabako 30","85","100","extension not allowed, please choose a JPG or JPEG or PNG file.","YES","2018-07-12 16:50:22","1.186.109.189");
INSERT INTO product VALUES("21","sandip loses","95","110","extension not allowed, please choose a JPG or JPEG or PNG file.","YES","2018-07-12 17:41:47","1.186.109.189");
INSERT INTO product VALUES("22","Kala tambakho","85","100","extension not allowed, please choose a JPG or JPEG or PNG file.","YES","2018-07-18 19:35:31","157.185.130.176");
INSERT INTO product VALUES("23","Sana green","12","15","extension not allowed, please choose a JPG or JPEG or PNG file.","NO","2018-07-22 18:50:31","150.242.204.75");
INSERT INTO product VALUES("24","Sana green(200)","12","15","extension not allowed, please choose a JPG or JPEG or PNG file.","YES","2018-07-22 18:50:59","150.242.204.75");
INSERT INTO product VALUES("25","(500)sana green","28","35","extension not allowed, please choose a JPG or JPEG or PNG file.","YES","2018-07-22 18:52:27","150.242.204.75");
INSERT INTO product VALUES("26","1lt sana green","52","62","extension not allowed, please choose a JPG or JPEG or PNG file.","YES","2018-07-22 18:53:37","150.242.204.75");





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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO purchasebilldata VALUES("6","8","1006","MA1(302)","302","2","336","101472","293234","0","2018-07-15","2018-07-15 15:19:51","1.186.106.242");
INSERT INTO purchasebilldata VALUES("7","8","1006","PANCHI(258)","258","4","264","68112","293234","0","2018-07-15","2018-07-15 15:19:51","1.186.106.242");
INSERT INTO purchasebilldata VALUES("8","8","1006","94(265)","265","16","384","101760","293234","0","2018-07-15","2018-07-15 15:19:51","1.186.106.242");
INSERT INTO purchasebilldata VALUES("9","8","1006","SAMPANNA(110)","110","6","199","21890","293234","0","2018-07-15","2018-07-15 15:19:51","1.186.106.242");
INSERT INTO purchasebilldata VALUES("11","10","1008","SBH(300)","300","9","20","6000","6000","0","2018-07-15","2018-07-15 15:20:48","1.186.106.242");
INSERT INTO purchasebilldata VALUES("12","11","1009","SBH(300)","290","9","360","104400","104400","0","2018-07-18","2018-07-18 19:23:04","157.185.130.176");
INSERT INTO purchasebilldata VALUES("13","13","1011","MA1(302)","302","2","1092","329784","662498","0","2018-08-03","2018-08-03 15:58:10","27.106.73.125");
INSERT INTO purchasebilldata VALUES("14","13","1011","TM 550(292)","281","3","42","11802","662498","0","2018-08-03","2018-08-03 15:58:10","27.106.73.125");
INSERT INTO purchasebilldata VALUES("15","13","1011","PANCHI(258)","268","4","176","47168","662498","0","2018-08-03","2018-08-03 15:58:10","27.106.73.125");
INSERT INTO purchasebilldata VALUES("16","13","1011","94(265)","262","17","864","226368","662498","0","2018-08-03","2018-08-03 15:58:10","27.106.73.125");
INSERT INTO purchasebilldata VALUES("17","13","1011","MA DEL(145)","282","8","168","47376","662498","0","2018-08-03","2018-08-03 15:58:10","27.106.73.125");





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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO purchasebills VALUES("8","1006","1","2018-07-14","2018-07-29","","","","","0","Rs","293234","293234","103234","1","YES","2018-07-15","2018-07-15 15:19:51","1.186.106.242","2018-08-03");
INSERT INTO purchasebills VALUES("9","1007","2","2018-07-15","2018-07-25","","","","","0","Rs","6000","6000","6000","0","NO","2018-07-15","2018-07-15 15:20:20","1.186.106.242","");
INSERT INTO purchasebills VALUES("10","1008","2","2018-07-13","2018-07-23","","","","","0","Rs","6000","6000","6000","0","YES","2018-07-15","2018-07-15 15:20:48","1.186.106.242","");
INSERT INTO purchasebills VALUES("11","1009","2","2018-07-18","2018-07-27","","","","","0","Rs","104400","104400","42400","1","YES","2018-07-18","2018-07-18 19:23:04","157.185.130.176","2018-08-03");
INSERT INTO purchasebills VALUES("12","1010","3","2018-07-22","2018-07-22","","","","","0","Rs","62496","62496","0","2","YES","2018-07-22","2018-07-22 19:01:05","150.242.204.75","");
INSERT INTO purchasebills VALUES("13","1011","1","2018-07-27","2018-08-06","","","","","0","Rs","662498","662498","662498","0","YES","2018-08-03","2018-08-03 15:58:10","27.106.73.125","");





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

INSERT INTO users VALUES("1","Ajinkya","sameer","4297f44b13955235245b2497399d7a93","8652692939","8989898989","New Panvel","ajinkya@gmail.com","2018-07-09 18:40:16","106.66.47.3");





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
  `FullName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`VId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO vendor VALUES("1","bapi","das","extension not allowed, please choose a JPG or JPEG or PNG file.","BN","9732759633","","YES","","2018-07-03 17:27:15","1.186.221.207","bapidas");
INSERT INTO vendor VALUES("2","Santosh","Agarwal","extension not allowed, please choose a JPG or JPEG or PNG file.","Andra","8886888081","","YES","","2018-07-03 18:38:20","1.186.221.207","SantoshAgarwal");
INSERT INTO vendor VALUES("3","Arif Bhai ","Finel","extension not allowed, please choose a JPG or JPEG or PNG file.","Nalasopara ","9987061203","9819024785","YES","","2018-07-22 18:55:39","150.242.204.75","ArifBhaiFinel");





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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO vendorpaymenthistory VALUES("1","3","1010","2018-07-22","2018-08-11","","0","62496","62496","2018-07-22 23:56:03","150.242.204.75","2018-07-22");
INSERT INTO vendorpaymenthistory VALUES("2","1","1006","2018-08-03","2018-07-29","","103234","293234","190000","2018-08-03 12:56:59","27.106.73.125","2018-08-03");
INSERT INTO vendorpaymenthistory VALUES("3","2","1009","2018-08-03","2018-07-27","","42400","104400","62000","2018-08-03 12:57:51","27.106.73.125","2018-08-03");



