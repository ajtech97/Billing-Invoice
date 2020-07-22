<?php session_start();?>
    <?php error_reporting(0);
if($_SESSION['emp_username']=="")
{
    header("location:login.php");
}
else{
?>

<!DOCTYPE html>
<html ng-app="myapp" ng-controller="myctrl">
<head>
     <meta charset="UTF-8">
            <title>Orders</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

            <!-- Add to homescreen for Chrome on Android -->
            <meta name="mobile-web-app-capable" content="yes">
            <link rel="icon" sizes="192x192" href="images/login.png">

            <!-- Add to homescreen for Safari on iOS -->
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black">
            <meta name="apple-mobile-web-app-title" content="Material Design Lite">
            <link rel="apple-touch-icon-precomposed" href="images/user.jpg">

            <!-- Tile icon for Win8 (144x144 + tile color) -->
            <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
            <meta name="msapplication-TileColor" content="#3372DF">

            <link rel="shortcut icon" href="images/user.jpg">
            <script src="js/angular.min.js"></script>
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
            <link rel="stylesheet" href="fonts/icons.css">
            <link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/styles.css">
            <link rel="stylesheet" href="css/my.css">
            <link rel="stylesheet" href="css/scrollbar.css">
<!--            <link rel="stylesheet" href="css/tblmaterial.css">-->


         <style>


                .menu2{
                    background-color: #00BCD4;
                }

                .menuname2{
                    color: #37474F;
                }

</style>
    
          <style>

    table{
         width: 100%;
        table-layout: fixed;
    }
          
    td {
        overflow-x: auto;
}
    .tbl-content{
  height:auto;
  width: 100%;
  max-height:343px;
  overflow-x:auto;
  margin-top: 0px;
  background-color: #64B5F6;
}

          
    </style>
     
    <script>

  function discountrs()
{
                            var disctotal=document.getElementById("subtotal").value;
                            document.getElementById("total").value=disctotal;                        
}

            function calculatetotalamount(count)
        {
            var ind=0;
            for(var i=1;i<=count;i++)
                {
                    if(document.getElementById("amount" + i).value!="")
                        {
                             ind += parseInt(document.getElementById("amount" + i).value);
                        }

                }
            document.getElementById("subtotal").value=ind;
            discountrs();
//            discountrupees(0);
        }

            function calculate(ind) {

//                        var product = document.getElementById("productlist" + ind).value;
                        var quantity = document.getElementById("quantity" + ind).value;

//                var xhttp = new XMLHttpRequest();
//                        xhttp.onreadystatechange = function() {
//                            if (this.readyState == 4 && this.status == 200) {

//                                var price = this.responseText;
                        
//                                var takeprice=document.getElementById("takeprice"+ ind).value=price;
//                                var cal = takeprice * quantity;

                                var price = document.getElementById("proprice"+ind).value;
                                var cal = price * quantity;

                
                                document.getElementById("amount" + ind).value = cal;
                                calculatetotalamount(count);
//                            }
//                        };
//                        xhttp.open("GET", "calculate.php?product=" + product, true);
//                        xhttp.send();
                }
        
    </script>
    
       <script>
           
        function valid()
		{
            var invoiceno = document.getElementById("invoiceno").value;
            var invoicedate = document.getElementById("invoicedate").value;
            var custname = document.getElementById("cust").value;
            var productlist = document.getElementById("productlist"+count).value;
            var productprice = document.getElementById("proprice" + count).value;
            var quantity = document.getElementById("quantity"+count).value;
            var amount = document.getElementById("amount"+count).value;
            var subtotal = document.getElementById("subtotal").value;
            var total = document.getElementById("total").value;

            
        if(invoiceno=="")
		{
		      alert("Please Enter Invoice No");
              document.getElementById("invoiceno").focus();  
			  return false;
		}    
        if(invoicedate=="")
            {
                alert("Please Select Invoice Date");
                document.getElementById("invoicedate").focus();
			    return false;
            }
        if(custname=="")
            {
                alert("Please Select Customer Name");
                document.getElementById("cust").focus();
			    return false;
            }
        if(productlist=="")
            {
            alert("Please Select Product Name");
            document.getElementById("productlist"+count).focus();
			return false;
            }
        if (productprice == "") 
            {
                alert("Please Enter Product Price");
                document.getElementById("proprice" + count).focus();
                return false;
            }    
        if(quantity=="")
            {
               alert("Please Enter Product Quantity");
                document.getElementById("quantity"+count).focus();
			return false;
            }
        if(quantity=="0")
            {
                alert("Quantity Could Not Be zero");
                 document.getElementById("quantity"+count).focus();
                return false;
            }
        if(amount=="")
            {
               alert("Please Enter Product Amount");
                document.getElementById("amount"+count).focus();
			return false;
            }
        if(amount=="0")
            {
               alert("Product Amount Could Not Be zero");
                document.getElementById("amount"+count).focus();
			return false;
            }
        if(subtotal=="")
            {
               alert("Please Enter Subtotal Amount");
                document.getElementById("subtotal").focus();
			return false;
            }
            if(subtotal=="0")
            {
               alert("Subtotal Amount Colud Not Be Zero");
                 document.getElementById("subtotal").focus();
			return false;
            }
        if(total=="")
            {
               alert("Please Provide Total Amount");
                document.getElementById("total").focus();
			return false;
            }


		}
           
           function customervalid() {
            var customer = document.getElementById("cust").value;
            if (customer == "") {
//                alert("Please Select Customer");
                document.getElementById("custerror").innerHTML="Please Select Customer*";
            }
               else
                   {
                       document.getElementById("custerror").innerHTML="";
                   }
           }

           function quantityvalid(count)
           {
               var quantity = document.getElementById("quantity"+count).value;

            if(quantity=="")
            {
//               alert("Please Enter Product Quantity");
                 document.getElementById("quaerror"+count).innerHTML="Please Enter Product Quantity*";
            }
            else
            {
                 document.getElementById("quaerror"+count).innerHTML="";
            }
           }
           
           function amountvalid(count)
           {
               var amount = document.getElementById("amount"+count).value;
               if(amount=="")
               {
                   document.getElementById("amterror"+count).innerHTML="Please Enter Product Amount*";
               }
               else
                {
                    document.getElementById("amterror"+count).innerHTML="";   
                }
           }

           function productlistvalid(count)
           {
               var productlist = document.getElementById("productlist"+count).value;
            if(productlist=="")
            {
                document.getElementById("proderror"+count).innerHTML="Please Enter Product Name*";
            }
               else
                   {
                       document.getElementById("proderror"+count).innerHTML="";
                   }
           }
        function propricevalid(count)
        {
             var productprice = document.getElementById("proprice"+count).value;
            if(productprice=="")
            {
//            alert("Please Select Product Name");
                document.getElementById("prodpriceerror"+count).innerHTML="Please Enter Product Price*";
            }
            else
            {
                document.getElementById("prodpriceerror"+count).innerHTML="";
            }
        }

          
           function subtotalvalid()
           {
               var subtotal = document.getElementById("subtotal").value;
            if(subtotal=="")
            {
                    document.getElementById("suberror").innerHTML="Please Enter Subtotal Amount*";
            }
               else
                   {
                       document.getElementById("suberror").innerHTML="";
                   }
           }

           function totalvalid()
           {
                var total = document.getElementById("total").value;
               if(total=="")
            {
                document.getElementById("totalerror").innerHTML="Please Provide Total Amount*"
            }
               else
                   {
                        document.getElementById("totalerror").innerHTML="";
                   }
           }
           
            function deleteinvoice(val) {
//                alert(val);
            if (confirm("If you want to delete then press 'Ok'..!")) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText) {
                            alert("Delete successfully");
                            window.location = 'order.php';
                        } else {
                            alert("Try again !!!!");
                            window.location = 'order.php';
                        }
                    }
                };
                xmlhttp.open("GET", "orderdelete.php?val=" + val, true);
                xmlhttp.send();
            }
        }

           
           

        
    </script>
    
    </head>

<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                    <div class="mdl-layout__header-row">
                        <span class="mdl-layout-title">Orders</span>
                        <div class="mdl-layout-spacer"></div>
                    </div>
    </header>

        <?php include "nav.php";
            $customerlist=$obj->getcustomerlist();
            $selectedcustomerlist=$obj->getcustomerlistselected($_SESSION['emp_username']);
            $productlist=$obj->getproductlist();
            $orderserialno=$obj->orderserialnostarting();
     
        ?>
        
       <script> 
        var count = 1;
           
        function addnewperson() {
           var temp=document.getElementById("totalcount").value;
           if(temp>=2)
           {
             count=temp;
           }
           count++;
            var para = document.createElement("div");
            para.id = "innerdiv" + count;
            document.getElementById("contactpersondata").appendChild(para);
             document.getElementById("innerdiv" + count).innerHTML = '<div class="mdl-grid"> <div class="mdl-cell mdl-cell--3-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height"> <p style="color:#00BCD4;">Product Name*</p><select class="mdl-textfield__input" name="productlist'+count+'" id="productlist'+count+'" onclick="calculate('+count+');productlistvalid('+count+')" onchange="getsellingprice(this.value,'+count+');calculate('+count+');productlistvalid('+count+')" style="outline:none;"><?php echo '<option value=""></option>'; echo $productlist; ?> </select><p id="proderror'+count+'" style="color:red;"></p> </div> </div> <div class="mdl-cell mdl-cell--3-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"> <p style="color:#00BCD4;">Change Product Price*</p><input class="mdl-textfield__input" type="text" id="proprice'+count+'" name="proprice'+count+'" onkeypress="return event.charCode >=48 && event.charCode<=57" value="0" onkeyup="calculate('+count+');propricevalid('+count+')" style="outline:none;"> <p id="prodpriceerror'+count+'" style="color:red;"></p> </div> </div> <div class="mdl-cell mdl-cell--3-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" > <p style="color:#00BCD4;">Quantity*</p><input class="mdl-textfield__input" type="text" id="quantity'+count+'" name="quantity'+count+'" onkeyup="calculate('+count+');quantityvalid('+count+')" onkeypress="return event.charCode >=48 && event.charCode<=57" value="0" style="outline:none;"><p id="quaerror'+count+'" style="color:red;"></p> </div> </div><div class="mdl-cell mdl-cell--3-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"> <p style="color:#00BCD4;">Amount*</p><input class="mdl-textfield__input" type="text" id="amount'+count+'" name="amount'+count+'" onkeypress="return event.charCode >=48 && event.charCode<=57" onkeyup="calculatetotalamount('+count+');amountvalid('+count+')" value="0" style="outline:none;"> <p id="amterror'+count+'" style="color:red;"></p></div> </div></div><hr>';
            document.getElementById("totalcount").value = count;
        }

        function remove() {

            val = document.getElementById("totalcount").value;
            if(val==1)
                {

                    document.getElementById("totalcount").value=1;
                    count=document.getElementById("totalcount").value;
                }
              else 
              {

                document.getElementById("innerdiv" + val).innerHTML = "";
                document.getElementById("totalcount").value=parseInt(val)-1;
                count=document.getElementById("totalcount").value;
              }
            

            calculatetotalamount(count);

        } 
           
//        function getsellingprice()
//        {
//            var xhttp = new XMLHttpRequest();
//            var product=document.getElementById("productlist" + count).value;
////            alert(product);
//            xhttp.onreadystatechange = function() {                 
//            if (this.readyState == 4 && this.status == 200) {
//                document.getElementById("proprice"+count).value=this.responseText; 
//            }};
//            xhttp.open("GET", "calculate.php?product=" + product, true);
//            xhttp.send();
//        }   
           
        function getsellingprice(vall,count)
           {
               var n1 = vall.indexOf("(")+1;
               var n2 = vall.indexOf(")");
               var nvalue = vall.substring(n1,n2);
               document.getElementById("proprice"+count).value=nvalue;
           }
        </script>
        
 <main class="mdl-layout__content mdl-color--grey-100">
<div class="mdl-grid">
<div class="mdl-cell mdl-cell--5-col"></div>

  

    <div class="mdl-cell mdl-cell--6-col">

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label insearchbox">

            <input class="mdl-textfield__input" type="text" id="searchbox" ng-model="search">
            <label class="mdl-textfield__label" for="searchbox">Search by Order.No / Customer.Mob.No</label>

        </div>

 
       <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" onclick='openopup(this.id,"newinvoice")' for="addbtn" id="addpurbtn">

           <div class="mdl-tooltip mdl-tooltip--large" for="addbtn">Take Order</div>
           <i class="material-icons" style="align:center;outline:none;" id="addbtn">add</i>Take Order
           
        </button>
        

    </div>
     
</div>
     
                         <center>
                            <h4 class="custnotfound">Oops... No Order Found!</h4>
                         </center>
<br>
<br>
<br>

     <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;" id="newcallstable">

         <thead>
             
             <tr>
                                        <th class="mdl-data-table__cell--non-numeric">Sr No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Order Date</th>
                                        <th class="mdl-data-table__cell--non-numeric">Order No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Cust Name</th>
                                        <th class="mdl-data-table__cell--non-numeric">Cust Mob No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Total Amt</th>
                                        <th class="mdl-data-table__cell--non-numeric">View</th>
                                        <th class="mdl-data-table__cell--non-numeric">Delete</th>

            </tr>

        </thead>

    </table>

<div class="tbl-content">

    <table  class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;" id="newcallstable" >

    <tbody>

                    <tr ng-repeat="x in con  | filter:search "  class="ng-scope" ng-model="search">



                        <input type="hidden" id="tblOrderId{{x.OrderId}}" value="{{x.OrderId}}">
                        <input type="hidden" id="tblCustName{{x.OrderId}}" value="{{x.CustName}}">
                        
                               <td data-label="Sr No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                <td data-label="Order Date" class="mdl-data-table__cell--non-numeric ng-binding">{{x.OrderDate}}</td>
                                <td data-label="Order No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.OrderNo}}</td>
                                <td data-label="Cust Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.CustName}}</td>
                                <td data-label="Cust Mobile No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.CustMobNo}}</td>
                                <td data-label="Total Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.TotalAmount}}</td>
                                 <td data-label="View" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="View" onclick='editdata(this.id,"vieworder");getdate()' id="{{x.OrderId}}" for="View">
                                               <div class="mdl-tooltip mdl-tooltip--large" for="View">View</div>
                                               <i class="material-icons" id="View" style="outline:none;">remove_red_eye</i>
                                          </button>
                                </td>
                                <td data-label="Delete" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Delete" onclick='deleteinvoice(this.id)' id="{{x.OrderId}}" for="deleteinv">
                                               <div class="mdl-tooltip mdl-tooltip--large" for="deleteinv">Delete</div>
                                               <i class="material-icons" id="deleteinv" style="outline:none;">delete</i>
                                            </button>
                                </td>
                    </tr>

    </tbody>

    </table>

</div>     
     
<dialog class="mdl-dialog" >

        <h4 id="invoicetxt">Take Order</h4>
        <hr>
    
<form method="post" action="orderinsert.php" onsubmit="return valid()" autocomplete="off">
    
<input type="hidden" name="invid" id="invid">
<input type="hidden" name="orderid" id="orderid">    
<input type="hidden" name="totalcount" id="totalcount" value="1">
    

<div class="mdl-grid">
    
    <div class="mdl-cell mdl-cell--4-col">

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ininvoice" >

            <input class="mdl-textfield__input" type="text" id="invoiceno" name="invoiceno" value="<?php echo $orderserialno;?>" readonly onkeypress='return event.charCode >=48 && event.charCode<=57'>
            <label class="mdl-textfield__label" for="invoiceno">Order No#</label>

        </div>


    </div>

        <div class="mdl-cell mdl-cell--4-col fdatediv indate">

                         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="date" id="invoicedate" name="invoicedate" placeholder="" value="<?php echo date("Y-m-d");?>">
                                            <label class="mdl-textfield__label" for="invoicedate">Order Date*</label>
                        </div>

    </div>
     <div class="mdl-cell mdl-cell--4-col">

<!--
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height selectcustomer"  style='top:-16px;position:relative;'>

                <p style="color:#00BCD4;outline:none;font-size:12px;">Customer Name*</p>
                <select class="mdl-textfield__input" name="cust" id="cust" style="top:-19px;position:relative;" onclick="customervalid()" onchange="customervalid()">
                    
                <?php

//                    echo '<option value=""></option>';
//                    echo $selectedcustomerlist;

                ?>
                </select>
                <p id="custerror" style="color:red;"></p>

                </div>
-->
         
         
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height selectcustomer"  style='top:-16px;position:relative;'>

                    <p style="color:#00BCD4;outline:none;font-size:12px;" id="ctxtname">Customer Name*</p>
                          <input list="custlist" id="cust" name="cust" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height selectcustomer" style='top:-16px;position:relative;border-left:0px;border-right:0px;border-top:0px;border-bottom:solid grey 1px;outline:none;height:5px;padding:-20px;' onclick="customervalid();" onchange="customervalid()">
                              <datalist id="custlist">
                                 <?php 
                                  echo $selectedcustomerlist;
                                ?>
                             </datalist>  
                            <p id="custerror" style="color:red;"></p>
                </div>
    </div>

    
</div>


<!--***************************************************************************************************************************************************************-->
   <div id="contactpersondata">
    <div id="innerdiv1">

        <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--3-col">  
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height">
                <p style="color:#00BCD4;">Product Name*</p>
             <select class="mdl-textfield__input" name="productlist1" id="productlist1" onclick="calculate(1);productlistvalid(1)" onchange="getsellingprice(this.value,1);calculate(1);productlistvalid(1)">

                <?php
                  
                    echo '<option value=""></option>';
                    echo $productlist;
                    
                ?>
            </select>   
             <p id="proderror1" style="color:red;"></p>
            </div>
        </div>
            
        <div class="mdl-cell mdl-cell--3-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <p style="color:#00BCD4;">Change Product Price*</p><input class="mdl-textfield__input" type="text" id="proprice1" name="proprice1" onkeypress='return event.charCode >=48 && event.charCode<=57' value="0" onkeyup="calculate(1);propricevalid(1)">
                    <p id="prodpriceerror1" style="color:red;"></p>
                </div>
        </div>    
        

        <div class="mdl-cell mdl-cell--3-col">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
            <p style="color:#00BCD4;">Quantity*</p><input class="mdl-textfield__input" type="text" id="quantity1" name="quantity1" onkeypress='return event.charCode >=48 && event.charCode<=57' value="0" onkeyup="calculate(1);quantityvalid(1)">
            <p id="quaerror1" style="color:red;"></p>
        </div>
        </div>

        <div class="mdl-cell mdl-cell--3-col">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <p style="color:#00BCD4;">Amount*</p><input class="mdl-textfield__input" type="text" id="amount1" name="amount1"  onkeypress='return event.charCode >=48 && event.charCode<=57' onkeyup="calculatetotalamount(1);amountvalid(1)" value="0">
            <p id="amterror1" style="color:red;"></p>
        </div>
        </div>

        </div>
        <hr>
    </div>
</div>
<input type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" id="tt1" onclick="addnewperson()" value="+">
<input type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" id="tt2" onclick="remove()" value="-">

<br>
<br>



    <!--***************************************************************************************************************************************************************-->



                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--8-col"></div>
                            <div class="mdl-cell mdl-cell--4-col">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">



                                    <p style="color:#00BCD4;font-size:20px;visibility:hidden;">Sub Total* (₹)</p><input class="mdl-textfield__input" type="hidden"  name="subtotal" id="subtotal" onkeypress='return event.charCode >=48 && event.charCode<=57' value="0"  onkeyup="subtotalvalid()" style="font-size:20px;" readonly>
                                    <p id="suberror"></p>
                                </div>
                            </div>
                        </div>

                        
    
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--8-col"></div>
                            <div class="mdl-cell mdl-cell--4-col">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                                    <p style="color:#00BCD4;font-size:20px;">Total* (₹)</p><input class="mdl-textfield__input" type="text" id="total" name="total" onkeypress='return event.charCode >=48 && event.charCode<=57' onkeyup="totalvalid()" value="0" readonly style="font-size:20px;">
<!--                                    <label class="mdl-textfield__label" for="total" style="font-size:20px;">Total (₹) </label>-->
                                        <p id="totalerror" style="color:red;"></p>
                                </div>
                            </div>
                        </div>

 <div class="mdl-dialog__actions">

     <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" onclick="colsepup()" type="button" id="closepopup">
                <i class="material-icons forwhitecolor">close</i> Close
    </button>

     <button  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" type="submit" value="create" id="insertdata" name="insertdata">
                <i class="material-icons forwhitecolor">send</i>Create
    </button>
     
</div>

    </form>
    </dialog>
     
     
</main>

</div>
    
    
<script>

    function openopup(val,val2) {
        if(val2=="newinvoice")
            {
                 dialog.showModal();
            }
    }

     function colsepup()
     {
        dialog.close();

        window.location="order.php";
     }
    
    function editdata(val,val1) {
        if(val1=="vieworder")
        {
            dialog.showModal();
            document.getElementById("insertdata").style.visibility="hidden";
            fillvalues(val);
                   document.getElementById("tt1").style.visibility="hidden";
                    document.getElementById("tt2").style.visibility="hidden";
        }
      }

        function fillvalues(val)
    {
        id = val;
        
        document.getElementById("orderid").value = document.getElementById("tblOrderId" + id).value;
  
        
          var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myObj = JSON.parse(this.responseText);
                    document.getElementById("invoiceno").value=myObj.records[0].orderno;
                    document.getElementById("invoicedate").value=myObj.records[0].orderdate;
                    document.getElementById("cust").value=myObj.records[0].CustName;
                    document.getElementById("productlist1").value=myObj.records[0].ProductName;
                    document.getElementById("proprice1").value = myObj.records[0].ChangeProPrice;
                    document.getElementById("quantity1").value=myObj.records[0].Quantity;
                    document.getElementById("amount1").value=myObj.records[0].Amount;
//                    document.getElementById("producthide1").value=myObj.records[0].OrderDataId;

                    var updatecount=0;

                    for (var item in myObj.records)
                    {
                        var datac=myObj.records[item].counti;
                        if(datac>1)
                            {
                                    var para = document.createElement("div");
                                    para.id = "innerdiv" + datac;
                                    document.getElementById("contactpersondata").appendChild(para);
                                    document.getElementById("innerdiv" + datac).innerHTML = '<div class="mdl-grid"> <div class="mdl-cell mdl-cell--3-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height"> <p style="color:#00BCD4;">Product Name*</p><select class="mdl-textfield__input" name="productlist'+datac+'" id="productlist'+datac+'" onclick="calculate('+datac+');productlistvalid('+datac+')" onchange="getsellingprice(this.value,'+datac+');calculate('+datac+');productlistvalid('+datac+')" style="outline:none;"><?php echo '<option value=""></option>'; echo $productlist; ?> </select><p id="proderror'+datac+'" style="color:red;"></p></div> </div> <div class="mdl-cell mdl-cell--3-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"> <p style="color:#00BCD4;">Change Product Price*</p><input class="mdl-textfield__input" type="text" id="proprice'+datac+'" name="proprice'+datac+'" onkeypress="return event.charCode >=48 && event.charCode<=57" value="0" onkeyup="calculate('+datac+');propricevalid('+datac+')" style="outline:none;"> <p id="prodpriceerror'+datac+'" style="color:red;"></p> </div> </div> <div class="mdl-cell mdl-cell--3-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" > <p style="color:#00BCD4;">Quantity*</p><input class="mdl-textfield__input" type="text" id="quantity'+datac+'" name="quantity'+datac+'" onkeyup="calculate('+datac+');quantityvalid('+datac+')" onkeypress="return event.charCode >=48 && event.charCode<=57" value="0" style="outline:none;"><p id="quaerror'+datac+'" style="color:red;"></p> </div> </div><div class="mdl-cell mdl-cell--3-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"> <p style="color:#00BCD4;">Amount*</p><input class="mdl-textfield__input" type="text" id="amount'+datac+'" name="amount'+datac+'" onkeypress="return event.charCode >=48 && event.charCode<=57" onkeyup="calculatetotalamount('+datac+');amountvalid('+datac+')" value="0" style="outline:none;"> <p id="amterror'+datac+'" style="color:red;"></p></div> </div></div><hr>';
                                    document.getElementById("totalcount").value = datac;

                                    document.getElementById("productlist"+datac).value=myObj.records[item].ProductName;
                                    document.getElementById("proprice"+datac).value = myObj.records[item].ChangeProPrice;
                                    document.getElementById("quantity"+datac).value=myObj.records[item].Quantity;
                                    document.getElementById("amount"+datac).value=myObj.records[item].Amount;
//                                    document.getElementById("producthide"+datac).value=myObj.records[item].OrderDataId;
//                                    document.getElementById("OGtotalCount").value=datac;
                            }
                    }

                     document.getElementById("total").value=myObj.records[0].TotalAmount; 
                     document.getElementById("subtotal").value=myObj.records[0].SubTotal;

                }
            };
            xmlhttp.open("GET", "orderproductdataviewjson.php?orderid="+id, true);
            xmlhttp.send();

    }
    
     var dialog = document.querySelector('dialog');
                                var showDialogButton = document.querySelector('#show-dialog');
                                if (!dialog.showModal) {
                                    dialogPolyfill.registerDialog(dialog);
                                }
                                showDialogButton.addEventListener('click', function() {
                                    dialog.showModal();
                                });
                                dialog.querySelector('.close').addEventListener('click', function() {
                                    dialog.close();
                                });



</script>
 <script>
        
                var cont = 0;
                var x = angular.module("myapp", []);
                x.controller("myctrl", function($scope, $http, $interval) {

                     $scope.getData = function() {

//
                        $http.post("orderjson.php").then(function success(response){
                        $scope.con=response.data.records;
                          if (response.data.records == "") {
                                $("#newcallstable").fadeOut();
                                $(".custnotfound").fadeIn();


                            } else {
                                $("#newcallstable").fadeIn();
                                $(".custnotfound").fadeOut();
                            }

                        },function error(response){
                                $scope.con=response.statusText;
                            });
                    };

//                    $scope.intervalFunction = function() {
//                        $interval(function() {
//                            $scope.getData();
//
//                        }, 5000)
//                    };

                    $scope.getData();
//                    $scope.intervalFunction();

                });
    </script>
    
    
    
    <script src="js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
<?php }?>
