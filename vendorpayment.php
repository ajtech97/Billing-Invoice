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
    $vendtotalpayment=$obj->vendortotalpayment();
    $vendpendingpayment=$obj->vendorpendingpayment();
    $vendpaidpayment=$obj->vendpaidpayment();
?>
        <!doctype html>
        <html lang="en" ng-app="myapp" ng-controller="myctrl">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
            <title>Admin Dashboard</title>
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
            <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
            <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
            <link rel="shortcut icon" href="images/user.jpg">
            <script src="js/angular.min.js"></script>
            <script src="js/jquery-3.3.1.min.js"></script>
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
            <link rel="stylesheet" href="fonts/icons.css">
            <!--            <link rel="stylesheet" href="css/material.css">-->
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/styles.css">
            <link rel="stylesheet" href="css/my.css">
            <link rel="stylesheet" href="css/scrollbar.css">
            <style>
                #view-source {
                    position: fixed;
                    display: block;
                    right: 0;
                    bottom: 0;
                    margin-right: 40px;
                    margin-bottom: 40px;
                    z-index: 900;
                }
                
                .menu9 {
                    background-color: #00BCD4;
                }
                
                .menuname9 {
                    color: #37474F;
                }
            </style>
            <style>
                table {
                    width: 100%;
                    table-layout: fixed;
                }
                
                .tbl-content {
                    height: auto;
                    width: 100%;
                    max-height: 343px;
                    overflow-x: auto;
                    margin-top: 0px;
                    background-color: #64B5F6;
                }
            </style>
            <script>
                function calremainingamount() {
                    var totalamount = parseInt(document.getElementById("totalamount").value);
                    var paidamount = parseInt(document.getElementById("paidamount").value);
                    var cal = totalamount - paidamount;
                    if (paidamount > totalamount) {
                        document.getElementById("remainingamount").value = "0";
                        document.getElementById("paidamount").value = totalamount;
                        alert("Paid amount is greater than total amount * ");
                    }
                    else {
                        document.getElementById("remainingamount").value = cal;
                        if (parseInt(document.getElementById("paidamount").value) < parseInt(document.getElementById("totalamount").value)) {
                            document.getElementById("remainingamount").value = cal;
                            $(document).ready(function () {
                                $("#reason").fadeIn();
                                $("#nextpaydate").fadeIn();
                                $("#reasonlabel").fadeIn();
                                $("#nextdaylabel").fadeIn();
                            });
                        }
                        if (document.getElementById("remainingamount").value == "NaN") {
                            document.getElementById("remainingamount").value = "";
                            document.getElementById("nextpaydate").required = false;
                            $(document).ready(function () {
                                $("#reason").fadeIn();
                                $("#nextpaydate").fadeIn();
                                $("#reasonlabel").fadeIn();
                                $("#nextdaylabel").fadeIn();
                            });
                        }
                        document.getElementById("palertforpaidamount").innerHTML = "";
                    }
                    if (document.getElementById("remainingamount").value == "0") {
                        $(document).ready(function () {
                            $("#nextpaydate").removeAttr('required');
                            $("#reason").fadeOut();
                            $("#nextpaydate").fadeOut();
                            $("#reasonlabel").fadeOut();
                            $("#nextdaylabel").fadeOut();
                        });
                    }
                }
                
       function unpaidgetdate() {
    
   
           
    var tt = document.getElementById('duedatetxt').value;
           
    var newdatee = tt.split("-").reverse().join("-");
    
    var date = new Date(newdatee);
   
    var newdate = new Date(date);

    newdate.setDate(newdate.getDate() + 10);
    
    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();
      
    if(mm<=9 && dd<=9)
       {
        var someFormattedDate = y+'-'+'0'+mm+'-'+'0'+dd;
       }
    else if(mm<=9)
        {
            var someFormattedDate = y+'-'+'0'+mm+'-'+dd;
        }
    else if(dd<=9)
        {
            var someFormattedDate = y+'-'+mm+'-'+'0'+dd;
        }
    else
        {
            var someFormattedDate = y+'-'+mm+'-'+dd;
        }
    
    document.getElementById('nextpaydate').value =  someFormattedDate;
}
                
  function partpaidgetdate() {
    
    var tt = document.getElementById('duedatetxt').value;
    
    var newdatee = tt.split("-").reverse().join("-");
    
    var date = new Date(newdatee);
      
    var newdate = new Date(date);

    newdate.setDate(newdate.getDate() + 10);
    
    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();

    
     if(mm<=9 && dd<=9)
       {
        var someFormattedDate = y+'-'+'0'+mm+'-'+'0'+dd;
       }
      
    else if(mm<=9)
        {
            var someFormattedDate = y+'-'+'0'+mm+'-'+dd;
        }
    else if(dd<=9)
        {
            var someFormattedDate = y+'-'+mm+'-'+'0'+dd;
        }
    else
        {
            var someFormattedDate = y+'-'+mm+'-'+dd;
        }
    
    document.getElementById('nextpaydate').value =  someFormattedDate;
}
                
            </script>
        </head>

        <body>
            <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
                <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                    <div class="mdl-layout__header-row"> <span class="mdl-layout-title">Admin Dashboard</span>
                        <div class="mdl-layout-spacer"></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                            <label class="mdl-button mdl-js-button mdl-button--icon" for="search"> <i class="material-icons">search</i> </label>
                            <div class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" id="search" ng-model="search">
                                <label class="mdl-textfield__label" for="search">Enter your query...</label>
                            </div>
                        </div>
                    </div>
                </header>
                <?php include "nav.php";
                ?>
                    <main class="mdl-layout__content">
                        <!-- Simple header with fixed tabs. -->
                        
                        <div class="mdl-grid">
                               
                        
                                 <div class="mdl-cell mdl-cell--2-col middlehead">    
                                        <div class="imgdiv">                    
                                            <center><i class="material-icons headicons">payment</i></center>
                                        </div>

                                        <div class="infodiv">
                                            <p class="callscount">
                                            <?php echo $vendtotalpayment;?> ₹
                                            </p>

                                            <p class="calllabel">Total Payment</p>
                                        </div>

                                </div>
                        
                                <div class="mdl-cell mdl-cell--2-col middlehead">    
                                        <div class="imgdiv">                    
                                            <center><i class="material-icons headicons">payment</i></center>
                                        </div>

                                        <div class="infodiv">
                                            <p class="callscount">
                                            <?php echo $vendpendingpayment;?> ₹
                                            </p>

                                            <p class="calllabel">Pending Payment</p> 
                                        </div>

                                </div>
                       
                                <div class="mdl-cell mdl-cell--2-col middlehead">    
                                        <div class="imgdiv">                    
                                            <center><i class="material-icons headicons">payment</i></center>
                                        </div>

                                        <div class="infodiv">
                                            <p class="callscount">
                                           <?php echo $vendpaidpayment;?> ₹
                                            </p>

                                            <p class="calllabel">Paid Payment</p> 
                                        </div>
                                </div>
                            
                       
                               
                        </div>
                          
                        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
                            <header class="mdl-layout__header mdl-color--blue-grey-700">
                                <div class="mdl-layout__header-row"> <span class="mdl-layout-title"><b style="color:white;">Vendor's Payment</b></span> </div>
                                <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--blue-grey-600"> <a href="#scroll-tab-1" class="mdl-layout__tab tabone is-active" ng-click="(paid_json(1))"><b style="color:white;">Unpaid Vendors</b></a> <a href="#scroll-tab-2" class="mdl-layout__tab tabtwo" ng-click="(paid_json(2))"><b style="color:white;">Partpaid Vendors</b></a> <a href="#scroll-tab-3" class="mdl-layout__tab tabthree" ng-click="(paid_json(3))"><b style="color:white;">Paid Vendors</b></a></div>
                            </header>
                            <main class="mdl-layout__content">
                                <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
                                    <div class="page-content">
                                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="mdl-data-table__cell--non-numeric">Sr No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Pay Rem Days</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Bill No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Bill Date</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Ven Name</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Ven Mob No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Total Amt</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Rem Amt</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Pay</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <center>
                                            <h5 class="custnotfound" style="position:absolute;width:100%;top:50px;">Oops... No Vendor Found!</h5> </center>
                                        <div class="tbl-content">
                                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                                <tbody>
                                                    <tr ng-repeat="x in con  | filter:search " class="ng-scope" ng-model="search" >
                                                        <input type="hidden" id="tblbillno{{x.billno}}" value="{{x.billno}}">
                                                        <input type="hidden" id="tbllvname{{x.billno}}" value="{{x.vname}}">
                                                        <input type="hidden" id="tbllvendid{{x.billno}}" value="{{x.vid}}">
                                                        <input type="hidden" id="tblTotalAmount{{x.billno}}" value="{{x.remAmount}}">
                                                        <input type="hidden" id="tblbillstats{{x.billno}}" value="{{x.bilstatus}}">
                                                        <input type="hidden" id="tblbilldate{{x.billno}}" value="{{x.billdate}}">
                                                        <input type="hidden" id="tblbillduedate{{x.billno}}" value="{{x.billduedate}}">
                                                        <td data-label="Sr No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                                        <td data-label="Pay Rem Days" class="mdl-data-table__cell--non-numeric ng-binding">{{x.datediff}}</td>
                                                        <td data-label="Bill No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.billno}}</td>
                                                        <td data-label="Bill Date" class="mdl-data-table__cell--non-numeric ng-binding" title="DueDate : {{x.billduedate}}">{{x.billdate}}</td>
                                                        <td data-label="Ven Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.vname}}</td>
                                                        <td data-label="Ven Mob No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.vcont}}</td>
                                                        <td data-label="Total Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.orgTotal}}</td>
                                                        <td data-label="Rem Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.remAmount}}</td>
                                                        <td data-label="Pay" class="mdl-data-table__cell--non-numeric ng-binding">
                                                            <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Pay" onclick='editdata(this.id,"update");unpaidgetdate()' id="{{x.billno}}" for="kkk">
                                                                <div class="mdl-tooltip mdl-tooltip--large" for="kkk">Pay</div> <i class="material-icons" id="kkk" style="outline:none">money</i> </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                                <section class="mdl-layout__tab-panel" id="scroll-tab-2">
                                    <div class="page-content">
                                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="mdl-data-table__cell--non-numeric">Sr No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Pay Rem Days</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Bill No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Bill Date</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Ven Name</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Ven Mob No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Total Amt</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Paid Amt</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Rem Amt</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Pay</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <center>
                                            <h5 class="custnotfound" style="position:absolute;width:100%;top:50px;">Oops... No Vendor Found!</h5> </center>
                                        <div class="tbl-content">
                                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                                <tbody>
                                                    <tr ng-repeat="x in con  | filter:search " class="ng-scope" ng-model="search" >
                                                        <td data-label="Sr No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                                        <td data-label="Pay Rem Days" class="mdl-data-table__cell--non-numeric ng-binding">{{x.datediff}}</td>
                                                        <td data-label="Bill No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.billno}}</td>
                                                        <td data-label="Bill Date" class="mdl-data-table__cell--non-numeric ng-binding" title="DueDate : {{x.billduedate}}">{{x.billdate}}</td>
                                                        <td data-label="Ven Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.vname}}</td>
                                                        <td data-label="Ven Mob No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.vcont}}</td>
                                                        <td data-label="Total Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.orgTotal}}</td>
                                                        <td data-label="Paid Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.paidAmount}}</td>
                                                        <td data-label="Rem Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.remAmount}}</td>
                                                        <td data-label="Pay" class="mdl-data-table__cell--non-numeric ng-binding">
                                                            <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Pay" onclick='editdata(this.id,"update");partpaidgetdate()' id="{{x.billno}}" for="kkk">
                                                                <div class="mdl-tooltip mdl-tooltip--large" for="kkk">Pay</div> <i class="material-icons" id="kkk" style="outline:none">money</i> </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                                <section class="mdl-layout__tab-panel" id="scroll-tab-3">
                                    <div class="page-content">
                                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="mdl-data-table__cell--non-numeric">Sr No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Bill No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Bill Date</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Ven Name</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Ven Mob No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Total Amt</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <center>
                                            <h5 class="custnotfound" style="position:absolute;width:100%;top:50px;">Oops... No Vendor Found!</h5> </center>
                                        <div class="tbl-content">
                                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                                <tbody>
                                                    <tr ng-repeat="x in con  | filter:search " class="ng-scope" ng-model="search">
                                                        <td data-label="Sr. No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                                        <td data-label="Bill No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.billno}}</td>
                                                        <td data-label="Bill Date" class="mdl-data-table__cell--non-numeric ng-binding"  title="Payment Date : {{x.PaymentDate}}">{{x.billdate}}</td>
                                                        <td data-label="Ven Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.vname}}</td>
                                                        <td data-label="Ven Mob No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.vcont}}</td>
                                                        <td data-label="Total Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.orgTotal}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                            </main>
                        </div>
                        <!--  **********************************************************************************************************************-->
                        <dialog class="mdl-dialog">
                            <form method="post" action="vendorpaymentinsert.php" onsubmit="return valid();">
                                <h4 id="mainheadpaymenthistory">Vendor's Payment</h4>
                                <h7 id="vendorname"></h7>
                                <hr>
                                <input type="hidden" name="billno" id="billno">
                                <input type="hidden" name="vendorId" id="vendorId">
                                <input type="hidden" name="billstats" id="billstats">
                                <input type="hidden" name="billdatetxt" id="billdatetxt">
                                <input type="hidden" name="duedatetxt" id="duedatetxt">
                                <input type="hidden" name="currentdate" id="currentdate" value='<?php echo date("Y-m-d");?>'>
                                <!--                                <input type="hidden" name="employeeid" id="employeeid">-->
                                <div class="mdl-grid venpaygrid">
                                    <div class="mdl-cell mdl-cell--4-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ininvoice" style='top:-16px;position:relative;left:0px;'>
                                            <p style="color:#00BCD4;outline:none;font-size:12px;">Total Amount*</p>
                                            <input class="mdl-textfield__input" type="text" id="totalamount" name="totalamount" value="" readonly style="top:-19px;position:relative;">
                                            <!--                                <label class="mdl-textfield__label" for="totalamount">Total Amount</label>-->
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ininvoice" style='top:-16px;position:relative;left:0px;'>
                                            <p style="color:#cc0000;outline:none;font-size:12px;">Paid Amount*</p>
                                            <input class="mdl-textfield__input" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" id="paidamount" name="paidamount" value="" style="top:-19px;position:relative;" onkeyup="calremainingamount()" onblur="calremainingamount()" autocomplete="off" required>
                                            <p id="palertforpaidamount" style="font-size:12px;color:red;"></p>
                                            <!--                                <label class="mdl-textfield__label" for="paidamount">Paid Amount</label>-->
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ininvoice" style='top:-16px;position:relative;left:0px;'>
                                            <p style="color:#00BCD4;outline:none;font-size:12px;">Remaining Amount*</p>
                                            <input class="mdl-textfield__input" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" id="remainingamount" name="remainingamount" value="" readonly style="top:-19px;position:relative;" required> 
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--4-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" name="reason" id="reason" placeholder="">
                                            <label class="mdl-textfield__label" for="reason" id="reasonlabel">Reason</label>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label induedate">
                                            <input class="mdl-textfield__input" type="date" id="nextpaydate" name="nextpaydate" placeholder="" required>
                                            <label class="mdl-textfield__label" for="nextpaydate" id="nextdaylabel">Next Pay Date*</label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="mdl-dialog__actions">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" onclick="colsepup()" type="button" id="closepopup"> <i class="material-icons forwhitecolor">close</i> Close </button>
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" type="submit" value="submit" id="insertdata" name="submit"> <i class="material-icons forwhitecolor">send</i>Pay </button>
                                    <!--
            <button  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" type="submit" value="update" id="updatedata" name="updatedata">
                <i class="material-icons forwhitecolor">send</i>Update
            </button>
-->
                                </div>
                            </form>
                        </dialog>
                    </main>
            </div>
            <script>
                function colsepup() {
                    dialog.close();
                    document.getElementById("paidamount").value = "";
                    document.getElementById("remainingamount").value = "";
                    document.getElementById("reason").value = "";
                    document.getElementById("nextpaydate").value = "";
                    
                    window.location.href="vendorpayment.php";
                }
                var dialog = document.querySelector('dialog');
                var showDialogButton = document.querySelector('#show-dialog');
                if (!dialog.showModal) {
                    dialogPolyfill.registerDialog(dialog);
                }
                showDialogButton.addEventListener('click', function () {
                    dialog.showModal();
                });
                dialog.querySelector('.close').addEventListener('click', function () {
                    dialog.close();
                });

                function editdata(val, val1) {
                    if (val1 == "update") {
                        dialog.showModal();
                        fillvalues(val);
                        //            document.getElementById("insertdata").style.visibility = "hidden";
                        //            document.getElementById("custregname").innerHTML = document.getElementById("custregname").innerHTML.replace('Add Customer', 'Update Customer Information');
                    }
                }

                function fillvalues(val) {
                    id = val;
                    document.getElementById("billno").value = document.getElementById("tblbillno" + id).value;
                    document.getElementById("vendorId").value = document.getElementById("tbllvendid" + id).value;
                    document.getElementById("billstats").value = document.getElementById("tblbillstats" + id).value;
                    //                    document.getElementById("employeeid").value = document.getElementById("tbllemployeeid" + id).value;
                    document.getElementById("vendorname").innerHTML = "<b>Name : " + document.getElementById("tbllvname" + id).value + "&nbsp;&nbsp; Bill No : " + document.getElementById("tblbillno" + id).value+"</b>";
                    //            document.getElementById("Invno").value = document.getElementById("tblInvno" + id).value;
                    document.getElementById("totalamount").value = document.getElementById("tblTotalAmount" + id).value;
                    document.getElementById("billdatetxt").value = document.getElementById("tblbilldate" + id).value;                   
                    document.getElementById("duedatetxt").value = document.getElementById("tblbillduedate" + id).value;                   
                    //             
                }
            </script>
            <script>
                var cont = 0;
                var x = angular.module("myapp", []);
                x.controller("myctrl", function ($scope, $http, $interval) {
                    $scope.getData = function () {
                        $http.post("mainunpaidvendordataretrive.php").then(function success(response) {
                            $scope.con = response.data.records;
                        }, function error(response) {
                            $scope.con = response.statusText;
                        });
                        $scope.paid_json = function (paid) {
                            $http.post("mainvendordataretrive.php?paid_no=" + paid).then(function success(response) {
                                $scope.con = response.data.records;
                            }, function error(response) {
                                $scope.con = response.statusText;
                            });
                        };
                    };
                    
                    
                    $scope.getData();
                });
            </script>
            <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        </body>

        </html>
<?php }?>