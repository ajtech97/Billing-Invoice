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
$custtotalpayment=$obj->customertotalpayment();
$custpendingpayment=$obj->customerpendingpayment();
$custpaidpayment=$obj->customerpaidpayment();
$custtodayspayment=$obj->customertodayspayment();
//$stockproduct=$obj->getstockproduct(); 
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
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
            <link rel="stylesheet" href="fonts/icons.css">
            <!--            <link rel="stylesheet" href="css/material.css">-->
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/styles.css">
            <link rel="stylesheet" href="css/my.css">
            <link rel="stylesheet" href="css/scrollbar.css">
            <link rel="stylesheet" href="css/notification.css" type="text/css">
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
                
                .menu1 {
                    background-color: #00BCD4;
                }
                
                .menuname1 {
                    color: #37474F;
                }
            </style>
            <style>
                table {
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
           var myString = myString.replace(String.fromCharCode(65279), "" );
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
                                            <?php echo $custtotalpayment;?> ₹
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
                                            <?php echo $custpendingpayment;?> ₹
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
                                          <?php echo $custpaidpayment;?> ₹
                                            </p>

                                            <p class="calllabel">Paid Payment</p>
                                        </div>
                                </div>
                         
                                 <div class="mdl-cell mdl-cell--2-col middlehead">    
                                        <div class="imgdiv">                    
                                            <center><i class="material-icons headicons">payment</i></center>
                                        </div>

                                        <div class="infodiv">
                                            <p class="callscount">
                                          <?php echo $custtodayspayment;?> ₹
                                            </p>

                                            <p class="calllabel">Today's Payment</p>
                                        </div>
                                </div>
<!--
                        <div class="mdl-cell mdl-cell--2-col middlehead" >
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" onclick="sendMessage()" type="button" id="sendsms" > <i class="material-icons forwhitecolor">send</i><b>Send SMS</b></button>
                         </div>
-->
                         <div class="mdl-cell mdl-cell--2-col"></div>
                         <div class="mdl-cell mdl-cell--2-col"></div>
<!--
                                <div style="cursor:pointer;" id="dropdownmain">
                                <i class="material-icons" style="cursor:pointer;color:#3ba3dd;" id="login_detail">notifications</i>
                                  
                                  <div id="dropdown">
                                  <a>Stock Availability</a>
                                    <div style="position:relative;height:1px;width:124px;background-color:white;"></div>
                                  <a><?php //echo $stockproduct?></a>
                                  </div>
                                    
                                </div>
-->
<!--                        </div>-->
                        
                         
                        </div>
                        
                        
                        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
                            <header class="mdl-layout__header mdl-color--blue-grey-700">
    
                                <div class="mdl-layout__header-row"> <span class="mdl-layout-title"><b style="color:white;">Customer's Payment</b></span> </div>
                                <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--blue-grey-600"> <a href="#scroll-tab-1" class="mdl-layout__tab tabone is-active" ng-click="(paid_json(1))"><b style="color:white;">Unpaid Customers</b></a> <a href="#scroll-tab-2" class="mdl-layout__tab tabtwo" ng-click="(paid_json(2))"><b style="color:white;">Partpaid Customers</b></a> <a href="#scroll-tab-3" class="mdl-layout__tab tabthree" ng-click="(paid_json(3))"><b style="color:white;">Paid Customers</b></a></div>
                            </header>
                            
                            <main class="mdl-layout__content">
                                <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
                                    <div class="page-content">
                                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="mdl-data-table__cell--non-numeric">Select</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Sr No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Pay Rem Days</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Inv No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Ass Emp Name</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Inv Date</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Cust Name </th>
                                                    <th class="mdl-data-table__cell--non-numeric">Cust Mob No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Total Amt</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Rem Amt</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <center>
                                            <h5 class="custnotfound" style="position:absolute;width:100%;top:50px;">Oops... No Customer Found!</h5> </center>
                                        <div class="tbl-content">
                                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                                <tbody>
                                                    <tr ng-repeat="x in con  | filter:search " class="ng-scope" ng-model="search" >
                                                        <input type="hidden" id="tblInvId{{x.InvId}}" value="{{x.InvId}}">
                                                        <input type="hidden" id="tblInvno{{x.InvId}}" value="{{x.InvoiceNo}}">
                                                        <input type="hidden" id="tbllcustname{{x.InvId}}" value="{{x.CustName}}">
                                                        <input type="hidden" id="tbllcustid{{x.InvId}}" value="{{x.CustId}}">
                                                        <input type="hidden" id="tbllemployeeid{{x.InvId}}" value="{{x.emp}}">
                                                        <input type="hidden" id="tblRemainingAmount{{x.InvId}}" value="{{x.RemainingAmount}}">
                                                        <td data-label="Sr. No" class="mdl-data-table__cell--non-numeric ng-binding">
                                                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                                                                <input type="checkbox" class="mdl-checkbox__input" value="checkvalue{{x.InvoiceNo}},*{{x.InvoiceNo}},*{{x.EmpName}},*{{x.InvoiceDate}},*{{x.DueDate}},*{{x.CustName}},*{{x.CustMobNo}},*{{x.RemainingAmount}}" id="checkvalue{{x.InvoiceNo}}" onclick="showsend(this.id);getcustid(this.value);showdel(this.id)"> </label>
                                                        </td>
                                                        <td data-label="Sr No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                                        <td data-label="Pay Rem Days" class="mdl-data-table__cell--non-numeric ng-binding">{{x.datediff}}</td>
                                                        <td data-label="Inv No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.InvoiceNo}}</td>
                                                        <td data-label="Ass Emp Name" class="mdl-data-table__cell--non-numeric ng-binding" title="{{x.EmpName}}">{{x.EmpName}}</td>
                                                        <td data-label="Inv Date" class="mdl-data-table__cell--non-numeric ng-binding" title="DueDate : {{x.DueDate}}">{{x.InvoiceDate}}</td>
                                                        <td data-label="Cust Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.CustName}}</td>
                                                        <td data-label="Cust Mob No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.CustMobNo}}</td>
                                                        <td data-label="Total Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.orgTotal}}</td>
                                                        <td data-label="Rem Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.RemainingAmount}}</td>
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
                                                    <th class="mdl-data-table__cell--non-numeric">Inv No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Ass Emp Name</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Inv Date</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Cust Name </th>
                                                    <th class="mdl-data-table__cell--non-numeric">Cust Mob No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Total Amt</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Paid Amt</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Rem Amt</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <center>
                                            <h5 class="custnotfound" style="position:absolute;width:100%;top:50px;">Oops... No Customer Found!</h5> </center>
                                        <div class="tbl-content">
                                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                                <tbody>
                                                    <tr ng-repeat="x in con  | filter:search " class="ng-scope" ng-model="search" >
                                                        <td data-label="Sr No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                                        <td data-label="Pay Rem Days" class="mdl-data-table__cell--non-numeric ng-binding">{{x.datediff}}</td>
                                                        <td data-label="Inv No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.InvoiceNo}}</td>
                                                        <td data-label="Ass Emp Name" class="mdl-data-table__cell--non-numeric ng-binding" title="{{x.EmpName}}">{{x.EmpName}}</td>
                                                        <td data-label="Inv Date" class="mdl-data-table__cell--non-numeric ng-binding" title="DueDate : {{x.DueDate}}">{{x.InvoiceDate}}</td>
                                                        <td data-label="Cust Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.CustName}}</td>
                                                        <td data-label="Cust Mob No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.CustMobNo}}</td>
                                                        <td data-label="Total Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.orgTotal}}</td>
                                                        <td data-label="Paid Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.paidAmount}}</td>
                                                        <td data-label="Rem Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.RemainingAmount}}</td>
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
                                                    <th class="mdl-data-table__cell--non-numeric">Inv No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Ass Emp Name</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Inv Date</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Cust Name </th>
                                                    <th class="mdl-data-table__cell--non-numeric">Cust Mob No</th>
                                                    <th class="mdl-data-table__cell--non-numeric">Total Amt</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <center>
                                            <h5 class="custnotfound" style="position:absolute;width:100%;top:50px;">Oops... No Customer Found!</h5> </center>
                                        <div class="tbl-content">
                                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                                <tbody>
                                                    <tr ng-repeat="x in con  | filter:search " class="ng-scope" ng-model="search" >
                                                        <td data-label="Sr No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                                        <td data-label="Inv No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.InvoiceNo}}</td>
                                                        <td data-label="Ass Emp Name" class="mdl-data-table__cell--non-numeric ng-binding" title="{{x.EmpName}}">{{x.EmpName}}</td>
                                                        <td data-label="Inv Date" class="mdl-data-table__cell--non-numeric ng-binding" title="Payment Date : {{x.PaymentDate}}">{{x.InvoiceDate}}</td>
                                                        <td data-label="Cust Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.CustName}}</td>
                                                        <td data-label="Cust Mob No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.CustMobNo}}</td>
                                                        <td data-label="Total Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.orgTotal}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                            </main>
                        </div>
                    </main>
            </div>
            <script>
                var cont = 0;
                var x = angular.module("myapp", []);
                x.controller("myctrl", function ($scope, $http, $interval) {
                    $scope.getData = function () {
                        $http.post("mainunpaidcustdataretrive.php").then(function success(response) {
                            $scope.con = response.data.records;
                        }, function error(response) {
                            $scope.con = response.statusText;
                        });
                        $scope.paid_json = function (paid) {
                            $http.post("maincustdataretrive.php?paid_no=" + paid).then(function success(response) {
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
<?php } ?>