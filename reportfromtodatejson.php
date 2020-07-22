<?php
session_start();
include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();


//if(isset($_REQUEST["submit"]))
//{
$dfrom=$_REQUEST["fdate"];
$dto=$_REQUEST["tdate"];

//}
   
//$dfrom="2018-06-18";
//$dto="2018-06-18";

$data='{
	"records": [';


//        $totalpurchasequantity=0;
//        $totalpurchaseamount=0;
//        $totalinvoicequantity=0;
//        $totalinvoiceamount=0;

        $query=mysql_query("select * FROM report_purchase where CurrDate between '$dfrom' and '$dto'");
    
        while($row=mysql_fetch_array($query))
        {
            $productid=$row["ProductId"];

            $query1=mysql_query("select * FROM report_invoice where ProductId='$productid' and CurrDate between '$dfrom' and '$dto'");
            $row1=mysql_fetch_array($query1);
            
                     $quantityinv=$row1["quinv"];   
                     $amountinv=$row1["amtinv"];
            
                    if($quantityinv=="")
                    {
                        $quantityinv=0;
                        $amountinv=0;
                    }
            
            
            
        $productname=$row["ProductName"];
        $quantitypur=$row["qupur"];
        $amountpur=$row["amtpur"];
            
         $availabelstock=$quantitypur-$quantityinv;
         $profit=$amountinv-$amountpur;
        
//        if($profit<0)
//        {
//            $profit=0;
//        }
       
            
//            
        $data.= '{"proname":"'.$productname.'","purproqqantity":"'.$quantitypur.'","purproamount":"'.$amountpur.'","invproqqantity":"'.$quantityinv.'","invproamount":"'.$amountinv.'","availabelstock":"'.$availabelstock.'","profit":"'.$profit.'"},';
            
        }

$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
    
//echo "<script>window.location.href='report.php';</script>";
//    header("Location:report.php");
//}
?>

   
