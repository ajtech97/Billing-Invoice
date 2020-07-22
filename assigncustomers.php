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

    $employeelist=$obj->employeelist();
    $customerlist=$obj->getcustomerlistcheckbox();

?>
        <!DOCTYPE html>
        <html ng-app="myapp" ng-controller="myctrl">

        <head>
            <meta charset="UTF-8">
            <title>Assign Employee</title>
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
                .menu14 {
                    background-color: #00BCD4;
                }
                
                .menuname14 {
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
                
                .demo-card-wide.mdl-card {
                    width: 98%;
                    left: 15px;
                    height: auto;
                }
                
                .demo-card-wide > .mdl-card__menu {
                    color: #fff;
                }
            </style>
            <script>
                var arr = [];
                var ss = 0;
                var c;
                var jsonarray = [];
                var uniquejsonarray = [];
                var jsonuniquejsonarray = [];

                function addcustolist() {
                    var empid = document.getElementById("employee1").value;
                    var custlist = document.getElementsByName("getcustlistchk");
                    for (var x = 0; x < custlist.length; x++) {
                        var js1;
                        js1 = new Object();
                        js1.customerlistID = custlist[x].value;
                        var jsonString = JSON.stringify(js1);
                        if (custlist[x].checked == true) {
                            arr.push(custlist[x].value);
                            jsonarray.push(jsonString);
                            ss = 0;
                        }
                        if (custlist[x].checked == false) {
                            for (var i = 0; i < arr.length; i++) {
                                if (arr[i] == custlist[x].value) {
                                    var z = arr.indexOf(custlist[x].value);
                                    arr.splice(z, 1);
                                }
                            }
                            for (var j = 0; j < jsonarray.length; j++) {
                                if (jsonarray[j] == jsonString) {
                                    var q = jsonarray.indexOf(jsonString);
                                    jsonarray.splice(q, 1);
                                }
                            }
                            ss++;
                            if (ss == custlist.length) {
                                jsonarray = [];
                            }
                        }

                        function removeDuplicates(arr12) {
                            var unique_array = []
                            for (var i = 0; i < arr12.length; i++) {
                                if (unique_array.indexOf(arr12[i]) == -1) {
                                    unique_array.push(arr12[i]);
                                }
                            }
                            return unique_array;
                        }
                        uniquejsonarray = removeDuplicates(jsonarray);
                    }
                    if (empid == "0" && jsonarray == "") {
                        alert("Select Employee and Customer");
                    }
                    else if (empid == "0") {
                        alert("Select Employee");
                    }
                    else if (jsonarray == "") {
                        alert("Select Customers");
                    }
                    else {
                        jsonuniquejsonarray = "[" + uniquejsonarray + "]";
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function () {
                            if (xhttp.readyState == 4 && xhttp.status == 200) {
                                alert("Customers Assigned Successfully");
                                location.reload();
                            }
                        };
                        xhttp.open("GET", "assigncustomertableins.php?getjson=" + jsonuniquejsonarray + "&empid=" + empid, true);
                        xhttp.send();
                    }
                }

                function clearchecks()
                {
                    var hiddenval=document.getElementById('clearchkid').value;
                    for(var i=1;i<=hiddenval;i++)
                        {
                            document.getElementById("id"+i).checked=false;
                        }
                    
                }
                
                function getcustomerschecked() {
                    clearchecks();
                    var myObj;
                    var empid = document.getElementById("employee1").value;
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (xhttp.readyState == 4 && xhttp.status == 200) {
                            myObj = xhttp.responseText;
                            var o = JSON.parse(myObj);
                            var reclen = o.records.length;
                            if (reclen == 0) {
                                var custlist = document.getElementsByName("getcustlistchk");
                                for (var x = 0; x <= custlist.length; x++) {
                                    custlist[x].checked = false;
                                }
                            }
                            else {
                               
                                for (var i = 0; i < o.records.length; i++) {
                                    var custseldefcust = o.records[i].custid;
                                    document.getElementById("id" + custseldefcust).checked = true;
                                }
                            }
                        }
                    };
                    xhttp.open("GET", "employeescustomerlist.php?empid=" + empid, true);
                    xhttp.send();
                }
            </script>
        </head>

        <body>
            <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
                <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                    <div class="mdl-layout__header-row"> <span class="mdl-layout-title">Assign Customer</span>
                        <div class="mdl-layout-spacer"></div>
                    </div>
                </header>
                <?php include "nav.php"; ?>
                    <main class="mdl-layout__content mdl-color--grey-100">
                        <br>
                        <br>
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--4-col"></div>
                            <div class="mdl-cell mdl-cell--2-col">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height selectemployee">
                                    <p style="color:#00BCD4;">Select Employee *</p>
                                    <select class="mdl-textfield__input mySelect" name="employee1" id="employee1" onchange="getcustomerschecked()">
                                        <option value="0" selected disabled>Select Employee</option>
                                        <?php echo $employeelist; ?>
                                    </select>
                                    <p id="emperror1" style="color:red;"></p>
                                </div>
                            </div>
                             <div class='mdl-cell mdl-cell--2-col' style="text-align:center;margin-top:60px;">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="font-size:15px;color:white;" onclick="addcustolist();" id="asscust">Assign</button>
                            </div>
                        </div>
                        <!--************************************************************************-->
                        <h5 style="text-align:center;background-color:white;padding:20px;box-shadow:#b3b3b3 0px 2px 1px 0px;"> Select Customers</h5>
                        <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="min-height:200px;max-height:400px;overflow:auto;">
                            
                            <hr style="margin-top: -5px;">
                            <div class="mdl-grid">
                                <?php  echo $customerlist; ?>
                            </div>
                        </div>
                       
                           
                                               <!--************************************************************************-->
                    </main>
            </div>
            <script src="js/main.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        </body>

        </html>
        <?php }?>