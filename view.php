<?php
include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();

//$ans=mysql_query("drop view report_invoice");
//$ans=mysql_query("drop view report_purchase");

//$ans=mysql_query("create VIEW `report_invoice` AS select `invoicedata`.`InvDataId` AS `InvDataId`,`invoicedata`.`InvId` AS `InvId`,`invoicedata`.`ProductName` AS `ProductName`,`invoicedata`.`ProductId` AS `ProductId`,`invoicedata`.`Quantity` AS `Quantity`,`invoicedata`.`Amount` AS `Amount`,`invoicedata`.`TotalAmount` AS `TotalAmount`,`invoicedata`.`Discount` AS `Discount`,`invoicedata`.`CurrDate` AS `CurrDate`,`invoicedata`.`CurrDateTime` AS `CurrDateTime`,`invoicedata`.`IpAddress` AS `IpAddress`,sum(`invoicedata`.`Quantity`) AS `quinv`,sum(`invoicedata`.`ChangeProPrice`) AS `amtinv` from `invoicedata` group by `invoicedata`.`ProductId`");
//$ans=mysql_query("create VIEW `report_purchase` AS select `purchasebilldata`.`PBDId` AS `PBDId`,`purchasebilldata`.`PBId` AS `PBId`,`purchasebilldata`.`ProductName` AS `ProductName`,`purchasebilldata`.`ProductId` AS `ProductId`,`purchasebilldata`.`Quantity` AS `Quantity`,`purchasebilldata`.`Amount` AS `Amount`,`purchasebilldata`.`Total` AS `Total`,`purchasebilldata`.`Discount` AS `Discount`,`purchasebilldata`.`CurrDate` AS `CurrDate`,`purchasebilldata`.`CurrDateTime` AS `CurrDateTime`,`purchasebilldata`.`IpAddress` AS `IpAddress`,sum(`purchasebilldata`.`Quantity`) AS `qupur`,sum(`purchasebilldata`.`ChangeProPrice`) AS `amtpur` from `purchasebilldata` group by `purchasebilldata`.`ProductId`");

echo $ans;
?>