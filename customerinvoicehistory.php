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
    
//    $custcount=$obj->customercount();
?>

<!DOCTYPE html>
<html ng-app="myapp" ng-controller="myctrl">
<head>
     <meta charset="UTF-8">
            <title>Invoice History</title>
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
    
    <script>
        
//firstname
//lastname
//dob
//pincode
//email
//city
//address
        
//mobileno1
//mobileno2
//aadharcard
//pancard
//photo
//state
//country

                          
		function valid()
		{
            var fname = document.getElementById("firstname").value;
            var lname = document.getElementById("lastname").value;
            var email = document.getElementById("email").value;
            var city = document.getElementById("city").value;
            var address = document.getElementById("address").value;
            var mob1 = document.getElementById("mobileno1").value;
            var mob2 = document.getElementById("mobileno2").value;
            var aadharcard = document.getElementById("aadharcard").value;
            var photo = document.getElementById("photo").value;
            var state = document.getElementById("state").value;
            var country = document.getElementById("country").value;
		if(fname=="")
		{
		      alert("Please Enter First Name");
                document.getElementById("firstname").focus();
			  return false;
		}
//        if(lname=="")
//            {
//                alert("Please Enter Last Name");
//			    return false; 
//            }
//        if(dob=="")
//            {
//                alert("Please Enter Date of Birth");
//			    return false; 
//            }
//        if(pincode.length!=6)
//		  {
//			alert("Please Enter Valid Pincode");
//			return false;
//          }   
//        if(email=="")
//            {
//            alert("Please Enter Email");
//			return false;
//            }
        if(city=="")
            {
               alert("Please Enter City");
                document.getElementById("city").focus();
			 return false; 
            }
        if(address=="")
            {
               alert("Please Enter Address");
                document.getElementById("address").focus();
			return false; 
            }
        if(mob1=="")
            {
               alert("Please Enter Mobile No");
                document.getElementById("mobileno1").focus();
			return false; 
            }
            
		if(mob1.length!=10)
		{
			alert("Please Enter 10 Digits Mobile Number");
            document.getElementById("mobileno1").focus();
			return false;
		}
//        if(moberror!="")
//            {
//                alert("Mobile No Already Exist");
//                return false;
//            }
//        if(aadharcard.length!=12)
//        {
//                alert("Please Enter Valid Aadhar Card Number");
//                return false;
//        }
        
        
            
//        var setemail=document.getElementById("setemail").value;
//        var setmob=document.getElementById("setmob").value
//            if(setemail=="yes")
//            {
//                alert("Email Id Already Exist");
//                return false;
//            }
//            if(setmob=="yes")
//            {
//                alert("Mobile Number Already Exist");
//                return false;
//            }

		}
//         function phpformvalid()
//        {
//            var fname = document.getElementById("firstname").value;
//            var city = document.getElementById("city").value;
//            var address = document.getElementById("address").value;
//            var mob1 = document.getElementById("mobileno1").value;
//             var xhttp = new XMLHttpRequest();
//                xhttp.onreadystatechange = function() {
//                if (this.readyState == 4 && this.status == 200) {
//                var valid=this.responseText;
//            }   
//  };
//  xhttp.open("GET", "customerphpvalidation.php?fname="+fname+"&city="+city+"&address="+address+"&mobileno1="+mobileno1, true);
//  xhttp.send();
//        }
        
//         function mobvalid() {
//            var mobb1=document.getElementById("mobileno1").value;
//        var xmlhttp = new XMLHttpRequest();
//        xmlhttp.onreadystatechange = function() {
//            if (this.readyState == 4 && this.status == 200) {
//                var prevmob=document.getElementById("prevmob").value;
//               if(mobb1==prevmob)
//                   {
//                     document.getElementById("setmob").value="";
//                     return false;
//                   }
//               else
//                   {
//                     document.getElementById("setmob").value=this.responseText;
//                     return true;
//                   }
//            }
//        };
//        xmlhttp.open("GET","addcustomervalidation.php?mobile="+mobb1+"&source=mob", true);
//        xmlhttp.send();
//      }
//        function emailvalid() {
//        var emaill=document.getElementById("email").value;
//        var xmlhttp = new XMLHttpRequest();
//        xmlhttp.onreadystatechange = function() {
//            if (this.readyState == 4 && this.status == 200) {
//                var prevemail=document.getElementById("prevemail").value;
//               if(emaill==prevemail)
//                   {
//                     document.getElementById("setemail").value="";
//                     return false;
//                   }
//               else
//                   {
//                     document.getElementById("setemail").value=this.responseText;
//                     return true;
//                   }
//            }
//        };
//        xmlhttp.open("GET", "addcustomervalidation.php?em="+emaill+"&source=email", true);
//        xmlhttp.send();
//    }
        function deletecust(val)
        {
          if(confirm("If you want to delete then press 'Ok'..!"))
          {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function()
          {
            if (this.readyState == 4 && this.status == 200)
            {
              if(this.responseText)
              {
                alert("Delete successfully");
                window.location='addcustomer.php';
              }
              else
              {
                alert("Try again...");
              window.location='addcustomer.php';
              }
            }
          };
          xmlhttp.open("GET", "Delete_Customer.php?val="+val, true);
          xmlhttp.send();
        }
      }
        
          function mobvalid() {
            var custid=document.getElementById("cid").value;
            var mobb1=document.getElementById("mobileno1").value;
            
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var mob=this.responseText;
//                alert(mob);
                if(mob=="yes")
                    {
                        document.getElementById("moberror").innerHTML="*Mobile No Already Exist";
                    }
                else{
                    document.getElementById("moberror").innerHTML="";
                }
            }
        };
//        xmlhttp.open("GET", "addcustomervalidation.php?mobile="+mobb1+"&source=mob", true);
        xmlhttp.open("GET", "addcustomervalidation.php?mobile="+mobb1+"&cid="+custid, true);
        xmlhttp.send();   
            
           
    
}
//        function emailvalid() {
//
//        var emaill=document.getElementById("email").value;
//            
//        var xmlhttp = new XMLHttpRequest();
//        xmlhttp.onreadystatechange = function() {
//            if (this.readyState == 4 && this.status == 200) {
//               var email=this.responseText;
//                if(email=="yes")
//                {
//                    alert("Email Id Already Exist");        
//                }
//            }
//        };
//        xmlhttp.open("GET", "addcustomervalidation.php?em="+emaill+"&source=email", true);
//        xmlhttp.send();
//    }
//        
//        function validd()
//        {
//            mobvalid();
//            emailvalid();
//        }
        
		</script>
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
                #pic{            
            height: 120px;
            width: 150px;
            background-repeat: no-repeat;
            background-size: 100% 100%;
}
        
/*
        td{
            left:10px;
        }
    
*/
    </style>
</head>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                    <div class="mdl-layout__header-row">
                        <span class="mdl-layout-title">Invoice History</span>
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
                    
    <div class="mdl-cell mdl-cell--6-col">  
                                
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            
            <input class="mdl-textfield__input" type="text" id="searchbox" ng-model="search">
            <label class="mdl-textfield__label" for="searchbox">Search by Customer.Mob.No/Invoice. No</label>
                                
        </div>
        
<!--
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored asssignbtn" onclick='openopup(this.id,"insert")' for="tt2" id="addpurbtn"> 
                                  
            <div class="mdl-tooltip mdl-tooltip--large" for="tt2">Add Customer</div>                               
            <i class=" material-icons" id="tt2" style="align:center;outline:none;">person_add</i>
                           
        </button>
-->
                                      
    </div>
    
    
<!--
    <div class="mdl-cell mdl-cell--2-col" id="cntdiv">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input forwhitecolor" type="text" id="custcount" name="custcount" placeholder="" value="<?php //echo $custcount; ?>"  readonly>
                        <label class="mdl-textfield__label" for="custcount" id="custlabel"><b>Customer Count</b></label>
            </div>
    </div>    
-->
</div>

                         <center>
                            <h4 class="custnotfound">Oops... No Invoice Found!</h4>
                         </center>
<br>
<br>
<br>
          
     <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                
         <thead>
                   
             <tr>    
                                        <th class="mdl-data-table__cell--non-numeric">Sr No</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Cust Name</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Cust Mob No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Total Inv Count</th>
                                        <th class="mdl-data-table__cell--non-numeric">Total Amt</th>
                                        <th class="mdl-data-table__cell--non-numeric">Rem Amt</th>
                                        <th class="mdl-data-table__cell--non-numeric">View</th>
                                    
            </tr>
                    
        </thead>
              
    </table>
     
<div class="tbl-content"> 
                  
    <table  class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;" >
    
    <tbody>
       
                    <tr ng-repeat="x in con  | filter:search "  class="ng-scope" ng-model="search">

                        <input type="hidden" id="tblcid{{x.CustID}}" value="{{x.CustID}}">                

                        <input type="hidden" id="tbllcustname{{x.CustID}}" value="{{x.custname}}">

                        <input type="hidden" id="tblcustmobile{{x.CustID}}" value="{{x.customermob}}">
                        
                                <td data-label="Sr No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                <td data-label="Cust Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.custname}}</td>
                                <td data-label="Cust Mob No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.customermob}}</td>
                                <td data-label="Total Inv Count" class="mdl-data-table__cell--non-numeric ng-binding">{{x.totalinvcount}}</td>
                                <td data-label="Total Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.totalamount}}</td>
                                <td data-label="Rem Amt" class="mdl-data-table__cell--non-numeric ng-binding">{{x.RemainingAmount}}</td>

                                <td data-label="View" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="View" onclick='editdata(this.id,"viewinvoices");' id="{{x.CustID}}" for="View">
                                               <div class="mdl-tooltip mdl-tooltip--large" for="View">View</div>
                                               <i class="material-icons" id="View" style="outline:none;">remove_red_eye</i>
                                          </button>
                                </td>
                        
                                  
                    </tr>
    
    </tbody>
                      
    </table>
              
</div>        

</main>
</div>
<script>
     function colsepup()
     {
        dialog.close();
        document.getElementById("cid").value = "";                
        document.getElementById("firstname").value = "";
        document.getElementById("lastname").value ="";
        document.getElementById("mobileno1").value = "";       
        document.getElementById("mobileno2").value =  "";    
        document.getElementById("aadharcard").value ="";             
        document.getElementById("photo").innerHTML =  "";     
        document.getElementById("address").value = "";
        document.getElementById("city").value =  "";
        document.getElementById("email").value =  "";  
        document.getElementById("pic").style.backgroundImage="";
         
          document.getElementById("insertdata").style.visibility = "visible";
         document.getElementById("updatedata").style.visibility = "visible";
         
         document.getElementById("custregname").innerHTML = document.getElementById("custregname").innerHTML.replace('Update Customer', 'Add Customer');
     }

    function openopup(val,val2) {
        if(val2=="insert")
            {
                 dialog.showModal();
                document.getElementById("updatedata").style.visibility = "hidden";
                document.getElementById("pic").style.backgroundImage="";
            }
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

   
      function editdata(val,val1) 
    {
        
        var custid=val;
        var customername=document.getElementById("tbllcustname"+custid).value;
        var customermobno=document.getElementById("tblcustmobile"+custid).value;
 
            window.location.href="allinvoices.php?cid="+custid+"&custname="+customername+"&custmobno="+customermobno;
        
    }
//    function fillvalues(val)
//    {
//        id = val;
//        document.getElementById("cid").value = document.getElementById("tblcid" + id).value;                
//        document.getElementById("firstname").value = document.getElementById("tblfname" + id).value; 
//        document.getElementById("lastname").value = document.getElementById("tbllname" + id).value;
//        document.getElementById("mobileno1").value = document.getElementById("tblmobile1" + id).value;          
//        document.getElementById("mobileno2").value = document.getElementById("tblmobile2" + id).value;          
//        document.getElementById("aadharcard").value = document.getElementById("tblaadharcard" + id).value;                  
//        document.getElementById("photo").innerHTML = document.getElementById("tblphoto" + id).value;          
//        document.getElementById("address").value = document.getElementById("tbladdress" + id).value; 
//        document.getElementById("city").value = document.getElementById("tblcity" + id).value; 
//        document.getElementById("email").value = document.getElementById("tblemail" + id).value;  
//        var pic=document.getElementById("tblPPhoto" + id).value;
//        document.getElementById("pic").style.backgroundImage="url('CustomerImages/"+pic+"')";
//             
//    }  
</script>
    
      <script>
          
          
                var cont = 0;
                var x = angular.module("myapp", []);
                x.controller("myctrl", function($scope, $http, $interval) {
                    $scope.getData = function() {
                        $http.get('customerinvoicehistoryjson.php').success(function(data) {

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
                    
//            var pagesShown = 1;
//            var pageSize = 10 ;
//
//            $scope.paginationLimit = function (x) {
//                return pageSize * pagesShown;
//            };
                });
    </script>

        <script src="js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
<?php }?>