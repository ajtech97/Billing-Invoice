<?php
session_start();
include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();


//if(isset($_REQUEST["submit"]))
//{
//$dfrom=$_REQUEST["fdate"];
//$dto=$_REQUEST["tdate"];
//}
   


$data='{
	"records": [';


//        $query1=mysql_query("select sum(Total) from purchasebills where CurrDate between '2018-06-01' and '2018-06-10'");
//        $row1=mysql_fetch_array($query1);
//        $total1=$row1["sum(Total)"];
//
//
//        $query=mysql_query("select sum(TotalAmount),sum(RemainingAmount) from invoices where CurrDate between '2018-06-01' and '2018-06-10'");
//        $row=mysql_fetch_array($query);
//        $total=$row["sum(TotalAmount)"];
//        $remaining=$row["sum(RemainingAmount)"];
//        $paid=$total-$remaining;
//
//
//         $totalamount=$paid-$total1;

//        $totalpurchasequantity=0;
//        $totalpurchaseamount=0;
//        $totalinvoicequantity=0;
//        $totalinvoiceamount=0;

        $query=mysql_query("select * FROM report_purchase");
    
        while($row=mysql_fetch_array($query))
        {
            $productid=$row["ProductId"];

            $query1=mysql_query("select * FROM report_invoice where ProductId='$productid'");
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
       
         
//        $totalpurchasequantity=$totalpurchasequantity+$quantitypur; 
//        $totalpurchaseamount=$totalpurchaseamount+$amountpur;
//        $totalinvoicequantity=$totalinvoicequantity+$quantityinv;      
//        $totalinvoiceamount=$totalinvoiceamount+$amountinv;     
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

   
