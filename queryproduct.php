<?php
    include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();
//
//$query=mysql_query("select InvDataId,ProductName from invoicedata");
//while($aj=mysql_fetch_array($query))
//{
//    $invdataid=$aj["InvDataId"];
//    $productname=$aj["ProductName"];
//    
//    $que=mysql_query("select PName,SPPrice from product where PName='$productname' and pro_display_or_not='YES'");
//    $sp=mysql_fetch_array($que);
//    $proname=$sp["PName"];
//    $sprice=$sp["SPPrice"];
//    
//    $pronamesprice=$proname."(".$sprice.")";
//    
//    $upquery=mysql_query("update invoicedata set ProductName='$pronamesprice' where InvDataId=$invdataid");
//    
//    
//    if($upquery==1)
//    {
//        echo "Success";
//    }
//    else
//    {
//        echo "Failed";
//    }
//}


//$query=mysql_query("select PBDId,ProductName from purchasebilldata");
//while($aj=mysql_fetch_array($query))
//{
//    $pbdid=$aj["PBDId"];
//    $productname=$aj["ProductName"];
//    
//    $que=mysql_query("select PName,PPrice from product where PName='$productname' and pro_display_or_not='YES'");
//    $sp=mysql_fetch_array($que);
//    $proname=$sp["PName"];
//    $pprice=$sp["PPrice"];
//    
//    $pronamesprice=$proname."(".$pprice.")";
//    
//    $upquery=mysql_query("update purchasebilldata set ProductName='$pronamesprice' where PBDId=$pbdid");
//    
//    
//    if($upquery==1)
//    {
//        echo "Success";
//    }
//    else
//    {
//        echo "Failed";
//    }
//}


//$query=mysql_query("select OrderDataId,ProductName from orderdata");
//while($aj=mysql_fetch_array($query))
//{
//    $odid=$aj["OrderDataId"];
//    $productname=$aj["ProductName"];
//    
//    $que=mysql_query("select PName,SPPrice from product where PName='$productname' and pro_display_or_not='YES'");
//    $sp=mysql_fetch_array($que);
//    $proname=$sp["PName"];
//    $sprice=$sp["SPPrice"];
//    
//    $pronamesprice=$proname."(".$sprice.")";
//    
//    $upquery=mysql_query("update orderdata set ProductName='$pronamesprice' where OrderDataId=$odid");
//    
//    
//    if($upquery==1)
//    {
//        echo "Success";
//    }
//    else
//    {
//        echo "Failed";
//    }
//}

?>