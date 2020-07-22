<?php session_start();?>
    <?php error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");   
}
    include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();

?>

<!DOCTYPE html>
<html ng-app="myapp" ng-controller="myctrl">
<head>
     <meta charset="UTF-8">
            <title>Report</title>
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
            
         <style>
  

                .menu11{
                    background-color: #00BCD4;
                }
        
                .menuname11{
                    color: #37474F;
                }

</style>
    
    <style>
    
    table{
         width: 100%;
        table-layout: fixed;
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
    
//        var fdate;
//        var tdate;
//        function k()
//        {
//        var fdate=document.getElementById("fdate").value;
//        var tdate=document.getElementById("tdate").value;
//        
//        alert(fdate);
//        alert(tdate);
//        }
    </script>

</head>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                    <div class="mdl-layout__header-row">
                        <span class="mdl-layout-title">Report</span>
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
     
     
     <form  method="post">
           <div class="mdl-grid">
               
                    <div class="mdl-cell mdl-cell--2-col fdatediv">
                        
                         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="date" id="fdate" name="fdate" placeholder="">
                                            <label class="mdl-textfield__label" for="fdate">From Date</label>
                        </div>
                        
                    </div>
                    <div class="mdl-cell mdl-cell--2-col">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="date" id="tdate" name="tdate" placeholder="">
                                            <label class="mdl-textfield__label" for="tdate">To Date</label>
                        </div>
                    </div>
                   
                    <div class="mdl-cell mdl-cell--2-col">

                        
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" type="submit" value="submit" name="submit" for="submit" ng-click="reportdate_json();reportdatetotal_json()">
                                <div class="mdl-tooltip mdl-tooltip--large" for="submit" >Generate Report</div>       
                                <i class="material-icons forwhitecolor" id="submit">dvr</i> Get Report
                            
                        </button>
                    
                  </div>
                    
         
               </div>
        </form>
     
     
          <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                
         <thead>
             <tr>    
                                        <th class="mdl-data-table__cell--non-numeric">Sr. No</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Product. Name</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Purchase. Quantity</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Purchase Total</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Selling Quantity</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Selling Total</th>
                                        <th class="mdl-data-table__cell--non-numeric">Total Available Stock</th>
                                        <th class="mdl-data-table__cell--non-numeric">Selling - Purchase</th>
                                    
            </tr>    
        </thead>
              
    </table>
     
<div class="tbl-content"> 
                  
    <table  class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;" >
    
    <tbody>
       
                    <tr ng-repeat="x in con  | filter:search "  class="ng-scope" ng-model="search">

                                <td data-label="Sr. No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index+1}}</td>
                                <td data-label="Product. Name" class="mdl-data-table__cell--non-numeric ng-binding" id="pronamet">{{x.proname}}</td>
                                <td data-label="Purchase. Quantity" class="mdl-data-table__cell--non-numeric ng-binding" id="pquantity">{{x.purproqqantity}}</td>
                                <td data-label="Purchase Total" class="mdl-data-table__cell--non-numeric ng-binding" id="pamount">{{x.purproamount}}</td>
                                <td data-label="Selling Quantity" class="mdl-data-table__cell--non-numeric ng-binding" id="iquantity">{{x.invproqqantity}}</td>
                                <td data-label="Selling Total" class="mdl-data-table__cell--non-numeric ng-binding" id="iamount">{{x.invproamount}}</td>
                                <td data-label="Total Available Stock" class="mdl-data-table__cell--non-numeric ng-binding" id="avails">{{x.availabelstock}}</td>
                                <td data-label="Selling - Purchase" class="mdl-data-table__cell--non-numeric ng-binding" id="profitt">{{x.profit}}</td>
                        
                            <script>
    
//        function forwarddate() {
//            alert("kaka");
//            var fdate=document.getElementById("fdate").value;
//            var tdate=document.getElementById("tdate").value;
//            
//  var xhttp = new XMLHttpRequest();
//  xhttp.onreadystatechange = function() {
//    if (this.readyState == 4 && this.status == 200) {
//        
//        alert(this.responseText);
//        
////        var myObj1 = JSON.parse(this.responseText);
////        
////        for(var item1 in myObj1.records)
////            {
////        
////        alert(myObj1.records[item1].proname);
////        alert(myObj1.records[item1].purproqqantity);
////        alert(myObj1.records[item1].purproamount);
////        alert(myObj1.records[item1].invproqqantity);
////        alert(myObj1.records[item1].invproamount);
////        alert(myObj1.records[item1].availabelstock);
////        alert(myObj1.records[item1].profit);
////
////        document.getElementById("pronamet").value=myObj1.records[item1].proname;
////        document.getElementById("pquantity").value=myObj1.records[item1].purproqqantity;
////        document.getElementById("pamount").value=myObj1.records[item1].purproamount;
////        document.getElementById("iquantity").value=myObj1.records[item1].invproqqantity;
////        document.getElementById("iamount").value=myObj1.records[item1].invproamount;
////        document.getElementById("avails").value=myObj1.records[item1].availabelstock;
////        document.getElementById("profitt").value=myObj1.records[item1].profit;
////            }
//    }
//  };
//  xhttp.open("GET", "reportfromtodatejson.php?fdate="+fdate+"&tdate="+tdate, true);
//  xhttp.send();
//}
       
    </script>
                        
                        
                    </tr>
        
    
    </tbody>
                      
    </table>
    
    
</div>
    
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                
                     <thead>
                         <tr ng-repeat="x in conn  | filter:search "  class="ng-scope" ng-model="search">    

                             <td data-label="Cust. Name" class="mdl-data-table__cell--non-numeric ng-binding">{{}}</td>
                             <td data-label="Cust. Name" class="mdl-data-table__cell--non-numeric ng-binding"><b>Total</b></td>
                             <td data-label="Cust. Name" class="mdl-data-table__cell--non-numeric ng-binding"><b>{{x.ptq}}</b></td>
                             <td data-label="Cust. Name" class="mdl-data-table__cell--non-numeric ng-binding"><b>{{x.pta}}</b></td>
                             <td data-label="Cust. Name" class="mdl-data-table__cell--non-numeric ng-binding"><b>{{x.itq}}</b></td>
                             <td data-label="Cust. Name" class="mdl-data-table__cell--non-numeric ng-binding"><b>{{x.ita}}</b></td>
                               <td data-label="Cust. Name" class="mdl-data-table__cell--non-numeric ng-binding"><b>{{x.tavaistock}}</b></td>
                             <td data-label="Cust. Name" class="mdl-data-table__cell--non-numeric ng-binding"><b>{{x.tprofit}}</b></td>
                            
                        </tr>    
                    </thead>
              
                    </table>     

</main>
</div>
      <script>
          
          
                var cont = 0;
                var x = angular.module("myapp", []);
                x.controller("myctrl", function($scope, $http, $interval) {
                    $scope.getData = function() {
                        $http.get('reportjson.php').success(function(data) {

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
                    
                     $scope.totaljson = function() {
                      $http.post("reportjsontotal.php").then(function success(response) {
                                $scope.conn = response.data.records;
                            }, function error(response) {
                                $scope.conn = response.statusText;
                            });    
                     };
                    

                    
                    $scope.reportdate_json = function() {
                        var fdate=document.getElementById("fdate").value;
                        var tdate=document.getElementById("tdate").value;
                      $http.post("reportfromtodatejson.php?fdate="+fdate+"&tdate="+tdate).then(function success(response) {
                                $scope.con = response.data.records;
                            }, function error(response) {
                                $scope.con = response.statusText;
                            });    
                     };
                    
                    $scope.reportdatetotal_json = function() {
                        
                        var fdate=document.getElementById("fdate").value;
                        var tdate=document.getElementById("tdate").value;
                        
                      $http.post("reportfromtodatetotaljson.php?fdate="+fdate+"&tdate="+tdate).then(function success(response) {
                                $scope.conn = response.data.records;
                            }, function error(response) {
                                $scope.conn = response.statusText;
                            });    
                     };
                    
                    
                    
                    

                    
                    $scope.intervalFunction = function() {
                        $interval(function() {
                            $scope.getData();
                            $scope.totaljson();
                            
                        }, 5000)
                    };

                    $scope.getData();
//                    $scope.reportdate_json();
//                    $scope.reportdatetotal_json();
                    $scope.totaljson();
                    
//                    $scope.intervalFunction();
                    
                });
    </script>

        <script src="js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>