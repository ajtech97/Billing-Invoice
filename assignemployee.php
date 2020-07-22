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
                .menu12 {
                    background-color: #00BCD4;
                }
        
                .menuname12 {
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
      .tt3{
                  background-image: url(images/delete.png);
                  background-size:90% 90%;
                  background-repeat:no-repeat;
                  height: 40px;
                  width: 40px;
                  cursor: pointer;
                  border-radius: 50px;
                  outline: none;
                  background-color: #64B5F6;
                  border: 0px;
                  align-content: center;
                
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
    
     var empcnt =1;
        
     function addnewemployee() {
//            var temp=document.getElementById("emptotalcount").value;
//            if(temp>=2)
//            {
//              empcnt=temp;
//            }
            empcnt=document.getElementById("emptotalcount").value;
            empcnt++;
            rowhideno = 2;
         
            var para = document.createElement("div");
            para.id = "empinnerdiv" + empcnt;
            document.getElementById("emppersondata").appendChild(para);
            document.getElementById("empinnerdiv" + empcnt).innerHTML ='<div class="mdl-grid"> <div class="mdl-cell mdl-cell--5-col"><input type="hidden" id="rowhide'+rowhideno+'" value="'+rowhideno+'"></div> <div class="mdl-cell mdl-cell--4-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height selectemployee"> <p style="color:#00BCD4;">Assign To*</p> <select class="mdl-textfield__input" name="employee'+empcnt+'" id="employee'+empcnt+'" style="outline:none;" onclick="employeevalid()"><?php echo '<option value=""></option>'; echo $employeelist; ?> </select> <p id="emperror'+empcnt+'" style="color:red;"></p></div> </div> <div class="mdl-cell mdl-cell--1-col"><br><br><input type="button" id="tt3_'+empcnt+'" class="tt3" value="'+rowhideno+'" onclick="removetemp(this.value)"></div></div> <hr>';
            document.getElementById("emptotalcount").value = empcnt;
        }
        
     function removetemp(id) {
            var data;
            val = document.getElementById("emptotalcount").value;
            val2 = document.getElementById("OGtotalCount").value;

                  if(confirm("If you want to delete then press 'Ok'..!"))
                      {

                        removeproduct(id);
                        document.getElementById("empinnerdiv"+id).innerHTML="";

                      }
                      empcnt=document.getElementById("emptotalcount").value;

        }    

        function empremove() {
            val = document.getElementById("emptotalcount").value;
            val2 = document.getElementById("OGtotalCount").value;
            if(val==1)
                {
                    document.getElementById("emptotalcount").value=1;
                    empcnt=document.getElementById("emptotalcount").value;
                }
            else{
              if(val2>=val)
              {
                if(confirm("If you want to delete then press 'Ok'..!"))
                    {
                      removeproduct();
                      document.getElementById("empinnerdiv" + val).innerHTML = "";
                      document.getElementById("emptotalcount").value=parseInt(val)-1;
                      empcnt=document.getElementById("emptotalcount").value;
                    }
            }else {

              document.getElementById("empinnerdiv" + val).innerHTML = "";
              document.getElementById("emptotalcount").value=parseInt(val)-1;
              empcnt=document.getElementById("emptotalcount").value;
            }

            }
        }
        
        function removeproduct(rowid) {
                
                  var xhttp = new XMLHttpRequest();

                  var divcount = document.getElementById("OGtotalCount").value;
                  document.getElementById("OGtotalCount").value=divcount-1;

                  var empid = document.getElementById("employee"+rowid).value;
                  var invid=document.getElementById("invid").value;
                          xhttp.onreadystatechange = function() {
                              if (this.readyState == 4 && this.status == 200) {
                                  var price = this.responseText;
                              }
                          };
                          xhttp.open("GET", "deleteemployee.php?empid=" + empid+"&invid="+invid, true);
                          xhttp.send();
        }
            
          function valid()
		{
            var employee = document.getElementById("employee"+empcnt).value;

		if(employee=="")
		{
			alert("Please Select Employee Name");
            document.getElementById("employee"+empcnt).focus();
            return false;
		}
        }
            
        function employeevalid()
        {
            var employee = document.getElementById("employee" + empcnt).value;
            if (employee == "") 
            {
//                alert("Please Select Employee Name");
                document.getElementById("emperror"+empcnt).innerHTML="Please Select Employee Name*";
            }
            else
                {
                    document.getElementById("emperror"+empcnt).innerHTML="";
                }
        }
    </script>
    
</head>
<body>
    
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                    <div class="mdl-layout__header-row">
                        <span class="mdl-layout-title">Assign Employee</span>
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
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--5-col"></div>
                           
                    
                            <div class="mdl-cell mdl-cell--6-col">  
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="searchbox" ng-model="search">
                                    <label class="mdl-textfield__label" for="searchbox">Search by InvNo/Cust.Mob.No/Emp.Name</label>

                            </div>
                        </div>
                    </div>
                         <center>
                            <h4 class="custnotfound">Oops... No Invoice Found!</h4>
                         </center>

<br>
<br>
<br>
   <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;" id="newcallstable">

         <thead>

             <tr>
                                        <th class="mdl-data-table__cell--non-numeric">Sr No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Inv Date</th>
                                        <th class="mdl-data-table__cell--non-numeric">Inv No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Cust Name</th>
                                        <th class="mdl-data-table__cell--non-numeric">Ass Emp Name</th>
                                        <th class="mdl-data-table__cell--non-numeric">Cust Mob No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Due Date</th>
                                        <th class="mdl-data-table__cell--non-numeric">Total Amt</th>
                                        <th class="mdl-data-table__cell--non-numeric">Rem Amt</th>
                                        <th class="mdl-data-table__cell--non-numeric">Status</th>
                                        <th class="mdl-data-table__cell--non-numeric">Assign</th>
                                        <th class="mdl-data-table__cell--non-numeric">Un Assign</th>

            </tr>

        </thead>

    </table>

<div class="tbl-content">

    <table  class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;" id="newcallstable" >

    <tbody>

                    <tr ng-repeat="x in con  | filter:search "  class="ng-scope" ng-model="search">



                        <input type="hidden" id="tblInvoiceIdt{{x.InvoiceIdt}}" value="{{x.InvoiceIdt}}">
                        <input type="hidden" id="tblInvoiceNot{{x.InvoiceIdt}}" value="{{x.InvoiceNot}}">
                        <input type="hidden" id="tblCustNamet{{x.InvoiceIdt}}" value="{{x.CustNamet}}">

                               <td data-label="Sr No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                <td data-label="Inv Date" class="mdl-data-table__cell--non-numeric ng-binding">{{x.InvoiceDatet}}</td>
                                <td data-label="Inv No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.InvoiceNot}}</td>
                                <td data-label="Cust Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.CustNamet}}</td>
                                <td data-label="Ass Emp Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.EmpNamet}}</td>
                                <td data-label="Cust Mob No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.CustMobNo}}</td>
                                <td data-label="Due Date" class="mdl-data-table__cell--non-numeric ng-binding">{{x.DueDatet}}</td>
                                <td data-label="Total Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.TotalAmountt}}</td>
                                <td data-label="Rem Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.RemainingAmount}}</td>
                                <td data-label="Status" class="mdl-data-table__cell--non-numeric ng-binding assempnamescroll">{{x.InvoiceStatust}}</td>
                                        <td data-label="Assign" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Assign Employee" onclick='openopup(this.id,"insert")' id="{{x.InvoiceIdt}}" for="assignemp">
                                               <div class="mdl-tooltip mdl-tooltip--large" for="assignemp">Assign Employee</div>
                                               <i class="material-icons" id="assignemp" style="outline:none;">how_to_reg</i>
                                             </button>
                                        </td>
                                        <td data-label="Un Assign" class="mdl-data-table__cell--non-numeric ng-binding">
                                            <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Un Assign Employee" onclick='editdata(this.id,"update")' id="{{x.InvoiceIdt}}" for="unassignemp">
                                               <div class="mdl-tooltip mdl-tooltip--large" for="unassignemp">Un Assign Employee</div>
                                               <i class="material-icons" id="unassignemp" style="outline:none;">person_add_disabled</i>
                                            </button>
                                        </td>
                    </tr>

    </tbody>

    </table>

</div>
     

<dialog class="mdl-dialog">
    <form method="post" action="assignemployeeinsert.php" onsubmit="return valid();" >
        <h4 id="producttxt">Assign Employee</h4>
        
         <h7 id="custinfo"></h7>
        <hr>

      <!--****************************************************************************************************************************************************************************************************-->
    
    <input type="hidden" name="emptotalcount" id="emptotalcount" value="1">
    <input type="hidden" name="invno" id="invno" value="">
    <input type="hidden" name="invid" id="invid" value=""> 
    <input type="hidden" name="OGtotalCount" id="OGtotalCount" value="1">
<!--    <input type="hidden" name="producthide1" id="producthide1" value="1">    -->
    
     <div id="emppersondata">
    <div id="empinnerdiv1">

        <div class="mdl-grid">
         <div class="mdl-cell mdl-cell--5-col"></div>
         <div class="mdl-cell mdl-cell--4-col">

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height selectemployee">

                    <p style="color:#00BCD4;">Assign To*</p><select class="mdl-textfield__input mySelect" name="employee1" id="employee1" onclick="employeevalid()">

                
                <?php

                    echo '<option value=""></option>';
                    echo $employeelist;

                ?>
                </select>
                    <p id="emperror1" style="color:red;"></p>
                </div>
             
            </div>
            
             <div class="mdl-cell mdl-cell--1-col"><br><br>
                <input type="button" id="tt3_1" class="tt3" value="1" onclick="removetemp(this.value)">
            </div>
            
        </div>
                
        <hr>

    </div>
         
</div>

<input type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" id="tt1" onclick="addnewemployee()" value="+">
<input type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" id="tt2" onclick="empremove()" value="-">

<!--*****************************************************************************************************************************************************************************************************-->
    
     
            
        <hr>
                                    
        <div class="mdl-dialog__actions" id="btnaction">
                                        
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" onclick="colsepup()" type="button">
                                            
                <i class="material-icons forwhitecolor">close</i> Close
                                        
            </button>
            
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" type="submit" value="submit" id="insertdata"  name="insertdata">
                <i class="material-icons forwhitecolor">send</i>Assign   
            </button>
            
         
            
        
            
        </div>  
        
    </form>
</dialog>
</main>
</div>
<script>
    
     function colsepup() {
         
        dialog.close();
        window.location.href="assignemployee.php";
     
     }

    function openopup(val,val2) {
        if(val2=="insert")
            {
                 dialog.showModal();  
                    document.getElementById("invno").value=document.getElementById("tblInvoiceNot"+val).value;
                    document.getElementById("custinfo").innerHTML= "<b>Invoice No : " + document.getElementById("tblInvoiceNot"+val).value + " &nbsp;&nbsp;Customer Name : " + document.getElementById("tblCustNamet"+val).value +"</b>";
                    document.getElementById("tt3_1").style.visibility="hidden";
                    document.getElementById("tt1").style.visibility="visible";
                    document.getElementById("tt2").style.visibility="visible";
            }
        
    }
    
     function editdata(val,val1) { 
        if(val1=="update")
        {
            dialog.showModal(); 
                    document.getElementById("invno").value=document.getElementById("tblInvoiceNot"+val).value;
                    document.getElementById("custinfo").innerHTML= "<b>Invoice No : " + document.getElementById("tblInvoiceNot"+val).value + " &nbsp;&nbsp;Customer Name : " + document.getElementById("tblCustNamet"+val).value +"</b>";
            
                    fillvalues(val);
            
                    document.getElementById("tt3_1").style.visibility="visible";
                    document.getElementById("tt1").style.visibility="hidden";
                    document.getElementById("tt2").style.visibility="hidden";
                    document.getElementById("insertdata").style.visibility="hidden";
            
        }   
      }
    
     function fillvalues(val) {
                
      id = val;

        document.getElementById("invid").value = document.getElementById("tblInvoiceIdt" + id).value;
        
        

          var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myObj = JSON.parse(this.responseText);
                   
                    document.getElementById("employee1").value=myObj.records[0].EmpId;
                    var rowhideno = 2;

                    for (var item in myObj.records)
                    {
                        var datac=myObj.records[item].counti;
                        if(datac>1)
                            {
                     
                                        var para = document.createElement("div");
                                        para.id = "empinnerdiv" + datac;
                                        document.getElementById("emppersondata").appendChild(para);
                                        document.getElementById("empinnerdiv" + datac).innerHTML ='<div class="mdl-grid"> <div class="mdl-cell mdl-cell--5-col"><input type="hidden" id="rowhide'+rowhideno+'" value="'+rowhideno+'"></div> <div class="mdl-cell mdl-cell--4-col"> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fix-height selectemployee"> <p style="color:#00BCD4;">Assign To*</p> <select class="mdl-textfield__input" name="employee'+datac+'" id="employee'+datac+'" style="outline:none;" onclick="employeevalid()"><?php echo '<option value=""></option>'; echo $employeelist; ?> </select> <p id="emperror'+datac+'" style="color:red;"></p></div> </div> <div class="mdl-cell mdl-cell--1-col"><br><br><input type="button" id="tt3_'+datac+'" class="tt3" value="'+rowhideno+'" onclick="removetemp(this.value)"></div> </div> <hr>';
                                        document.getElementById("emptotalcount").value = datac;
                                
                                        document.getElementById("employee"+datac).value=myObj.records[item].EmpId;
                                        
                                        document.getElementById("OGtotalCount").value=datac;
                                        rowhideno++;
                            }
                    }

                }
            };
            xmlhttp.open("GET", "assignemployeeupdatejson.php?invi="+id, true);
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
                        $http.get('assignemployeejson.php').success(function(data) {

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