<?php session_start();?>
    <?php error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");   
}
else{
     include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();
    
    $_SESSION['cid']=$_REQUEST["cid"];
    $customername=$_REQUEST["custname"];
    $customermobno=$_REQUEST["custmobno"];
//    $custcount=$obj->customercount();
    
        $customerlist=$obj->getcustomerlist();
    $productlist=$obj->getproductlist();
    $invoiceserialno=$obj->invoiceserialnostarting();
?>

<!DOCTYPE html>
<html ng-app="myapp" ng-controller="myctrl">
<head>
     <meta charset="UTF-8">
            <title>All Invoices</title>
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
<!--            <link rel="stylesheet" href="css/material.css">-->
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/styles.css">
            <link rel="stylesheet" href="css/my.css">
            <link rel="stylesheet" href="css/scrollbar.css">
    
    <script src="js/jquery-3.3.1.min.js"></script>
            
         <style>
  

                .menu15{
                    background-color: #00BCD4;
                }
        
                .menuname15{
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
td::-webkit-scrollbar {
    height: 0px;
     background-color: white;
    overflow-x: auto;
}
td::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px white;
}
td::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 3px white;
} 
    
    .tbl-content{
  height:auto;
  width: 100%;
  max-height:343px;
  overflow-x:auto;
  margin-top: 0px;
  background-color: #64B5F6;
}
                #pic{            
            height: 120px;
            width: 150px;
            background-repeat: no-repeat;
            background-size: 100% 100%;
}
        
    </style>
</head>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                    <div class="mdl-layout__header-row">
                        <span class="mdl-layout-title">All Invoices</span>
                        <div class="mdl-layout-spacer"></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                                <i class="material-icons">search</i>
                            </label>
                            <div class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" id="search" ng-model="search">
                                <label class="mdl-textfield__label" for="search">Enter your query...</label>
                            </div>
                        </div>

                    </div>
    </header>
    
        <?php include "nav.php"; ?>
     
 <main class="mdl-layout__content mdl-color--grey-100">
     
<input type="hidden" id="setmob" value="">
<input type="hidden" id="setemail" value="">
<input type="hidden" id="prevemail" value="">
<input type="hidden" id="prevmob" value="">
     
<div class="mdl-grid">
<div class="mdl-cell mdl-cell--4-col"></div>
<div class="mdl-cell mdl-cell--1-col"></div>
                    
    <div class="mdl-cell mdl-cell--6-col">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            
            <input class="mdl-textfield__input" type="text" id="searchbox" ng-model="search">
            <label class="mdl-textfield__label" for="searchbox">Search by Invoice. No</label>
                                
        </div>
    </div>
    
</div>

                         <center>
                            <h4 class="custnotfound">Oops... No Invoice Found!</h4>
                         </center>
<br>
<br>
<br>
          
     <center>
                            <h6 class="custnameshow"><?php echo $customername;?>  <?php echo $customermobno;?></h6>
    </center>
     
     <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                
         <thead>
                   
             <tr>    
                                        <th class="mdl-data-table__cell--non-numeric">Sr No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Inv Date</th>
                                        <th class="mdl-data-table__cell--non-numeric">Inv No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Ass Emp Name</th>
                                        <th class="mdl-data-table__cell--non-numeric">Total Amt</th>
                                        <th class="mdl-data-table__cell--non-numeric">Rem Amt</th>
                                        <th class="mdl-data-table__cell--non-numeric">Status</th>
                                        <th class="mdl-data-table__cell--non-numeric">View</th>
                                    
            </tr>
                    
        </thead>
              
    </table>
     
<div class="tbl-content"> 
                  
    <table  class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;" >
    
    <tbody>
       
                    <tr ng-repeat="x in con  | filter:search "  class="ng-scope" ng-model="search">



                        <input type="hidden" id="tblInvoiceIdt{{x.InvoiceIdt}}" value="{{x.InvoiceIdt}}">
                        <input type="hidden" id="tblPPhoto{{x.InvoiceIdt}}" value="{{x.photo}}">
                        <input type="hidden" id="tblcustname{{x.InvoiceIdt}}" value="{{x.CustNamet}}">
                        <input type="hidden" id="tblcustmobno{{x.InvoiceIdt}}" value="{{x.CustMobNo}}">

                        
                               <td data-label="Sr No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                <td data-label="Inv Date" class="mdl-data-table__cell--non-numeric ng-binding" title="DueDate : {{x.DueDatet}}">{{x.InvoiceDatet}}</td>
                                <td data-label="Inv No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.InvoiceNot}}</td>
                                <td data-label="Ass Emp Name" class="mdl-data-table__cell--non-numeric ng-binding" title="{{x.EmpNamet}}">{{x.EmpNamet}}</td>
                                <td data-label="Total Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.TotalAmountt}}</td>
                                <td data-label="Rem Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.RemainingAmount}}</td>
                                <td data-label="Status" class="mdl-data-table__cell--non-numeric ng-binding assempnamescroll">{{x.InvoiceStatust}}</td>
                                <td data-label="View" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="View" onclick='editdata(this.id,"viewinvoice");getdate()' id="{{x.InvoiceIdt}}" for="View">
                                               <div class="mdl-tooltip mdl-tooltip--large" for="View">View</div>
                                               <i class="material-icons" id="View" style="outline:none;">remove_red_eye</i>
                                          </button>
                                </td>
                           
                    </tr>
    
    </tbody>
                      
    </table>
              
</div>        

<dialog class="mdl-dialog" >

        <h4 id="invoicetxt">Create New Invoice</h4>
        <hr>
<form method="post" action="invoicedatainsertupdate.php" onsubmit="return valid()"  enctype="multipart/form-data">
<input type="hidden" name="invid" id="invid">
<input type="hidden" name="totalcount" id="totalcount" value="1">
<input type="hidden" name="OGtotalCount" id="OGtotalCount" value="1">
<input type="hidden" name="producthide1" id="producthide1" value="1">
<input type="hidden" name="emphide1" id="emphide1" value="1">



<div class="mdl-grid">


    <div class="mdl-cell mdl-cell--2-col">

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ininvoice" >

            <input class="mdl-textfield__input" type="text" id="invoiceno" name="invoiceno" value="<?php echo $invoiceserialno;?>" readonly onkeypress='return event.charCode >=48 && event.charCode<=57'>
            <label class="mdl-textfield__label" for="invoiceno">Invoice No#</label>

        </div>


    </div>

     <div class="mdl-cell mdl-cell--1-col"></div>

        <div class="mdl-cell mdl-cell--2-col fdatediv indate">

                         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="date" id="invoicedate" name="invoicedate" onchange="getdate()" placeholder="" value="<?php echo date("Y-m-d");?>">
                                            <label class="mdl-textfield__label" for="invoicedate">Invoice Date*</label>
                        </div>

    </div>

     <div class="mdl-cell mdl-cell--1-col"></div>

     <div class="mdl-cell mdl-cell--2-col">

               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height selectcustomer"  style='top:-16px;position:relative;'>

                    <p style="color:#00BCD4;outline:none;font-size:12px;" id="ctxtname">Customer Name*</p>
                          <input list="custlist" id="cust" name="cust" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height selectcustomer" style='top:-16px;position:relative;border-left:0px;border-right:0px;border-top:0px;border-bottom:solid grey 1px;outline:none;height:5px;padding:-20px;' onclick="customervalid();" onchange="customervalid()">
                              <datalist id="custlist">
                                 <?php 
                                  echo $customerlist;
                                ?>
                             </datalist>  
                            <p id="custerror" style="color:red;"></p>
                </div>
    </div>

    <div class="mdl-cell mdl-cell--1-col"></div>

    <div class="mdl-cell mdl-cell--2-col">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label induedate">
                                            <input class="mdl-textfield__input" type="date" id="duedate" name="duedate" placeholder="" value="<?php echo date("Y-m-d");?>">
                                            <label class="mdl-textfield__label" for="duedate">Due Date*</label>
                        </div>
    </div>

    <div class="mdl-cell mdl-cell--1-col"></div>
    
    <div class="mdl-cell mdl-cell--2-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="file" name="invoicephoto" id="photo" placeholder="">
                    <label class="mdl-textfield__label" for="photo">Photo</label>
                    
                </div>
    </div>
    
    <div class="mdl-cell mdl-cell--2-col">
                <div id="pic">
        
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
             <select class="mdl-textfield__input" name="productlist1" id="productlist1" onclick="calculate(1);productlistvalid();quantityavailability();getsellingprice()">

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
                    <p style="color:#00BCD4;">Change Product Price*</p><input class="mdl-textfield__input" type="text" id="proprice1" name="proprice1" onkeypress='return event.charCode >=48 && event.charCode<=57' value="0" onkeyup="calculate(1);propricevalid()">
                    <p id="prodpriceerror1" style="color:red;"></p>
                </div>
        </div>   

        <div class="mdl-cell mdl-cell--3-col">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
            <p style="color:#00BCD4;">Quantity*</p><input class="mdl-textfield__input" type="text" id="quantity1" name="quantity1" onkeypress='return event.charCode >=48 && event.charCode<=57' value="0"   onkeyup="calculate(1);quantityvalid();quantityavailability()">
            <p id="quaerror1" style="color:red;"></p>
            <p id="quaerrorr1" style="color:red;"></p>
        </div>
        </div>

        <div class="mdl-cell mdl-cell--3-col">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <p style="color:#00BCD4;">Amount*</p><input class="mdl-textfield__input" type="text" id="amount1" name="amount1"  onkeypress='return event.charCode >=48 && event.charCode<=57' onkeyup="calculatetotalamount();amountvalid()" value="0">
            <p id="amterror1" style="color:red;"></p>
        </div>
        </div>

        </div>
        <hr>
    </div>
</div>
<input type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored"  id="tt1" onclick="addnewperson()" value="+">
<input type="button" class="mdl-button mdl-js-button mdl-button--fab    mdl-button--mini-fab mdl-button--colored"  id="tt2" onclick="remove()" value="-">

<br>
<br>



<!--***************************************************************************************************************************************************************-->



                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--8-col"></div>
                            <div class="mdl-cell mdl-cell--4-col">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">



                                    <p style="color:#00BCD4;font-size:20px;">Sub Total* (₹)</p><input class="mdl-textfield__input" type="text"  name="subtotal" id="subtotal" onkeypress='return event.charCode >=48 && event.charCode<=57' value="0"  onkeyup="subtotalvalid()" style="font-size:20px;" readonly>

                                    <p id="suberror"></p>
                                </div>
                            </div>
                        </div>

                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--8-col"></div>
                            <div class="mdl-cell mdl-cell--4-col">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                                    <p style="color:#00BCD4;font-size:20px;">Discount (₹)</p><input class="mdl-textfield__input" type="text" id="discount" name="discount" onkeypress='return event.charCode >=48 && event.charCode<=57' value="0" onkeyup="discountvalid();discountrs('this.value')"  style="font-size:20px;">

                                        <p id="discerror" style="color:red;"></p>
                                </div>

                                    ₹<input type="radio" id="rs"  name="discperrs" onclick="discountrs(this.value)" onblur="discountrs(this.value)" value="Rs" checked>

                                    %<input type="radio" id="per"  name="discperrs"  onblur="discountrs(this.value)" onclick="discountrs(this.value)" value="Per" onselect="discountrs(this.value)">

                            </div>
                        </div>



                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--8-col"></div>
                            <div class="mdl-cell mdl-cell--4-col">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                                    <p style="color:#00BCD4;font-size:20px;">Total* (₹)</p><input class="mdl-textfield__input" type="text" id="total" name="total" onkeypress='return event.charCode >=48 && event.charCode<=57' onkeyup="totalvalid()" value="0" readonly style="font-size:20px;">
                                    
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

      <button  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" type="submit" value="update" id="updatedata" name="updatedata">
                <i class="material-icons forwhitecolor">send</i>Update
            </button>
</div>

    </form>
    </dialog>
     
</main>
</div>
<script>
    
//        function openopup(val,val2) {
//        if(val2=="newinvoice")
//            {
//                 dialog.showModal();
//                document.getElementById("updatedata").style.visibility = "hidden";
//                document.getElementById("pic").style.backgroundImage="";
//            }
//    }

     function colsepup()
     {
        dialog.close();

        document.getElementById("insertdata").style.visibility = "visible";
         document.getElementById("updatedata").style.visibility = "visible";
         document.getElementById("pic").style.backgroundImage="";

         document.getElementById("invoicetxt").innerHTML = document.getElementById("invoicetxt").innerHTML.replace('View Invoice', 'Create New Invoice');

         $_SESSION['cid']=$_REQUEST["cid"];
          window.location="allinvoices.php";
         
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


      function editdata(val,val1) {
        if(val1=="viewinvoice")
        {
            dialog.showModal();
            document.getElementById("insertdata").style.visibility="hidden";
            document.getElementById("updatedata").style.visibility="hidden";
            
            fillvalues(val);
            document.getElementById("tt1").style.visibility="hidden";
            document.getElementById("tt2").style.visibility="hidden";
            
//            document.getElementById("insertdata").style.visibility = "hidden";
            document.getElementById("invoicetxt").innerHTML = document.getElementById("invoicetxt").innerHTML.replace('Create New Invoice', 'View Invoice');
            
     

        }
      }
    

        function fillvalues(val)
    {
        id = val;

        document.getElementById("invid").value = document.getElementById("tblInvoiceIdt" + id).value;
        
        

          var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myObj = JSON.parse(this.responseText);
                    
//                    var pic=document.getElementById("tblPPhoto" + id).value;
                    document.getElementById("pic").style.backgroundImage="url('InvoiceImages/"+myObj.records[0].photo+"')";
                    document.getElementById("invoiceno").value=myObj.records[0].InvoiceNo;
                    document.getElementById("invoicedate").value=myObj.records[0].InvoiceDate;
                    document.getElementById("cust").value=myObj.records[0].CustName;
                    document.getElementById("duedate").value=myObj.records[0].DueDate;
                    document.getElementById("productlist1").value=myObj.records[0].ProductName;
                    document.getElementById("proprice1").value = myObj.records[0].ChangeProPrice;
                    document.getElementById("quantity1").value=myObj.records[0].Quantity;
                    document.getElementById("amount1").value=myObj.records[0].Amount;
                    document.getElementById("producthide1").value=myObj.records[0].ProductID;

                   var updatecount=0;

                    for (var item in myObj.records)
                    {
                        var datac=myObj.records[item].counti;
                        if(datac>1)
                            {
                                    var para = document.createElement("div");
                                    para.id = "innerdiv" + datac;
                                    document.getElementById("contactpersondata").appendChild(para);
                                    document.getElementById("innerdiv" + datac).innerHTML = '<div class="mdl-grid"><div class="mdl-cell mdl-cell--3-col"><input type="hidden" id="producthide'+datac+'" name="producthide'+datac+'" value=0><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height"> <p style="color:#00BCD4;">Product Name</p><select class="mdl-textfield__input" name="productlist'+datac +'" id="productlist'+datac+'" onclick="calculate('+datac+');productlistvalid();quantityavailability();getsellingprice()" style="outline:none;"><?php echo '<option value=""></option>'; echo $productlist; ?> </select><p id="proderror'+datac+'" style="color:red;"></p>  </div></div>  <div class="mdl-cell mdl-cell--3-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"> <p style="color:#00BCD4;">Change Product Price*</p><input class="mdl-textfield__input" type="text" id="proprice'+datac+'" name="proprice'+datac+'" onkeypress="return event.charCode >=48 && event.charCode<=57" value="0" onkeyup="calculate('+datac+');propricevalid()" style="outline:none;"> <p id="prodpriceerror'+datac+'" style="color:red;"></p> </div> </div>  <div class="mdl-cell mdl-cell--3-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" > <p style="color:#00BCD4;">Quantity</p><input class="mdl-textfield__input" type="text" id="quantity'+datac+'" name="quantity'+datac+'" onkeyup="calculate('+datac+');quantityvalid()" onkeypress="return event.charCode >=48 && event.charCode<=57" value="0" style="outline:none;"> <p id="quaerror'+datac+'" style="color:red;"></p></div> </div><div class="mdl-cell mdl-cell--3-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"> <p style="color:#00BCD4;">Amount</p><input class="mdl-textfield__input" type="text" id="amount'+datac+'" name="amount'+datac+'" onkeypress="return event.charCode >=48 && event.charCode<=57" onkeyup="calculatetotalamount();amountvalid()" value="0" style="outline:none;"><p id="amterror'+datac+'" style="color:red;"></p> </div> </div></div><hr>';
                                    document.getElementById("totalcount").value = datac;

                                    document.getElementById("productlist"+datac).value=myObj.records[item].ProductName;
                                    document.getElementById("proprice"+datac).value = myObj.records[item].ChangeProPrice;
                                    document.getElementById("quantity"+datac).value=myObj.records[item].Quantity;
                                    document.getElementById("amount"+datac).value=myObj.records[item].Amount;
                                    document.getElementById("producthide"+datac).value=myObj.records[item].ProductID;
                                    document.getElementById("OGtotalCount").value=datac;
                            }
                    }

                     document.getElementById("total").value=myObj.records[0].TotalAmount;
                     document.getElementById("discount").value=myObj.records[0].Discount;
                     var ch=myObj.records[0].Discounttype;
                    if(ch=="Rs")
                        {
                            document.getElementById("rs").checked=true;
                            
                        }
                    if(ch=="Per")
                        {
                            document.getElementById("per").checked=true;
                        }
                     document.getElementById("subtotal").value=myObj.records[0].SubTotal;

                }
            };
            xmlhttp.open("GET", "invoiceproductdataupdatejson.php?invi="+id, true);
            xmlhttp.send();



    }
 
</script>
    
      <script>
          
          
                var cont = 0;
                var x = angular.module("myapp", []);
                x.controller("myctrl", function($scope, $http, $interval) {
                    $scope.getData = function() {
                        $http.get('allinvoicesjson.php').success(function(data) {

                            $scope.con = data.records;
                           
                            
                            if (data.records == "") {
                                $("#newcallstable").fadeOut();
                                $(".custnotfound").fadeIn();


                            } else {
                                $("#newcallstable").fadeIn();
                                $(".custnotfound").fadeOut();
                            }
                            console.log(data.records);
                        });
                    };



                    $scope.getData();
                });
    </script>

        <script src="js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
<?php }?>