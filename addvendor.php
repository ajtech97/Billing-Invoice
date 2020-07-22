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
//    $vencount=$obj->vendorcount();
?>

<!DOCTYPE html>
<html ng-app="myapp" ng-controller="myctrl">
<head>
     <meta charset="UTF-8">
            <title>Add Vendor</title>
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
                .menu6 {
                    background-color: #00BCD4;
                }
        
                .menuname6 {
                    color: #37474F;
                }

</style>
    
    <script>
		function valid()
		{
        var vfname = document.getElementById("vfirstname").value;
        var vaddress = document.getElementById("vaddress").value;
        var mob1 = document.getElementById("mobileno1").value;
        
		
        if(vfname=="")
            {
              alert("Please Enter First Name");
                document.getElementById("vfirstname").focus();
			  return false;
            }
        if(vaddress=="")
            {
              alert("Please Enter Address");
                document.getElementById("vaddress").focus();
			  return false;
            }
        if(mob1.length!=10)
		{
			alert("Please Enter 10 Digits Mobile Number");
            document.getElementById("mobileno1").focus();
			return false;
		}
        }
            
//        var setemail=document.getElementById("setemail").value;
//        var setmob=document.getElementById("setmob").value
////        alert(setemail);
////        alert(setmob);
//            if(setemail=="yes")
//            {
////                alert("kaka");
//                alert("Email Id Already Exist");
//                return false;
//            }
//            if(setmob=="yes")
//            {
////                    document.getElementById("insertdata").disabled=true;
//                alert("Mobile Number Already Exist");
//                return false;
//            }
//            
////            else
////            {
////                    document.getElementById("insertdata").disabled=false;
////            }
//		}
//        
//        function mobvalid() {
//            var mobb1=document.getElementById("mobileno1").value;
//            
//        var xmlhttp = new XMLHttpRequest();
//        xmlhttp.onreadystatechange = function() {
//            if (this.readyState == 4 && this.status == 200) {
//                var vmob=document.getElementById("setmob").value=this.responseText;
////                alert(vmob);
////                if(vmob=="yes")
////                    {   
////                        alert("Mobile No Already Exists");
////                        document.getElementById("insertdata").disabled=true;
////                    }
////                else
////                    {
////                        document.getElementById("insertdata").disabled=false;
//////                        alert("hi");
//////                        return true;
////                    }
////                 alert(document.getElementById("hid").value);
//            }
//        };
//        xmlhttp.open("GET", "customerregistrationvalidation.php?mobile="+mobb1+"&source=mob", true);
//        xmlhttp.send();   
//            
//           
//    
//}
//        function emailvalid() {
//
//        var emaill=document.getElementById("email").value;
//            
//        var xmlhttp = new XMLHttpRequest();
//        xmlhttp.onreadystatechange = function() {
//            if (this.readyState == 4 && this.status == 200) {
//                var vemail=document.getElementById("setemail").value=this.responseText;
////                alert(vemail);
////                if(emvalid=="yes")
////                    {
////                        
////                        alert("Email Id Already Exists");
////                        document.getElementById("insertdata").disabled=true;
////                    }
////                else
////                    {
////                        document.getElementById("insertdata").disabled=false;
////                    }
//             
//            }
//        };
//        xmlhttp.open("GET", "customerregistrationvalidation.php?em="+emaill+"&source=email", true);
//        xmlhttp.send();
//    }
//        
//        function validd()
//        {
//            mobvalid();
//            emailvalid();
//        }
//        
        
    function mobvalid() {
            var venid=document.getElementById("vid").value;
            var mobb1=document.getElementById("mobileno1").value;
//        alert(venid);    
//        alert(mobb1);    
        
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var mob=this.responseText;
//                alert(mob);
                if(mob=="yes")
                    {
                       document.getElementById("moberror").innerHTML="Mobile No Already Exist*";
                    }
                    else
                        {
                            document.getElementById("moberror").innerHTML="";
                        }
            }
        };
        xmlhttp.open("GET", "addvendorvalidation.php?mobile="+mobb1+"&vid="+venid, true);
        xmlhttp.send();   
            
}

         function deletevendor(val)
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
                window.location='addvendor.php';
              }
              else
              {
                alert("Try again...");
              window.location='addvendor.php';
              }
            }
          };
          xmlhttp.open("GET", "Delete_Vendor.php?val="+val, true);
          xmlhttp.send();
        }
      }
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
/*
        td{
            left:10px;
        }
*/
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
                        <span class="mdl-layout-title">Add Vendor</span>
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
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--4-col"></div>
                    
                            <div class="mdl-cell mdl-cell--6-col">  
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="searchbox" ng-model="search">
                                    <label class="mdl-textfield__label" for="searchbox">Search by Vendor.Mob.No</label>
                                </div>
                               <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored asssignbtn" onclick='openopup(this.id,"insert")' for="tt2" id="addpurbtn"> 
                                  <div class="mdl-tooltip mdl-tooltip--large" for="tt2">Add Vendor</div>
                                   <i class=" material-icons" id="tt2" style="align:center;outline:none;">person_add</i>
                               </button>
                            </div>
                            
<!--
                             <div class="mdl-cell mdl-cell--2-col" id="cntdiv">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input forwhitecolor" type="text" id="vencnt" name="vencnt" placeholder="" value="<?php //echo $vencount; ?>"  readonly>
                                                    <label class="mdl-textfield__label" for="vencnt" id="venlabel"><b>Vendor Count</b></label>
                                        </div>
                            </div> 
-->
                        </div>

                         <center>
                            <h4 class="custnotfound">Oops... No Vendor Found!</h4>
                         </center>

<br>
<br>
<br>
<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                <thead>
                                    <tr>    
                                        <th class="mdl-data-table__cell--non-numeric">Sr No</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Ven Name</th>         
                                         <th class="mdl-data-table__cell--non-numeric">Ven Mob No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Edit/View</th>
                                        <th class="mdl-data-table__cell--non-numeric">Delete</th>
                                    </tr>

                                </thead>
</table>
     <div class="tbl-content">
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                <tbody>
                                    <tr ng-repeat="x in con  | filter:search "  class="ng-scope" ng-model="search">

                        <input type="hidden" id="tblvid{{x.vid}}" value="{{x.vid}}">                
                        <input type="hidden" id="tblvfname{{x.vid}}" value="{{x.vfname}}">
                        <input type="hidden" id="tblvlname{{x.vid}}" value="{{x.vlname}}">
                        <input type="hidden" id="tblvaddress{{x.vid}}" value="{{x.vaddress}}">
                        <input type="hidden" id="tblvmobile{{x.vid}}" value="{{x.vmobile}}">
                        <input type="hidden" id="tblvanomobile{{x.vid}}" value="{{x.vanomobile}}">
                        <input type="hidden" id="tblPPhoto{{x.vid}}" value="{{x.VPhoto}}">

<!--
     
     $data.= '{"vid":"'.$vid.'","vfname":"'.$vfname.'","vlname":"'.$vlname.'","vaddress":"'.$vaddress.'","vmobile":"'.$vmobile.'","currdate":"'.$currdate.'"},';
-->
                                        
                                <td data-label="Ven Id" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                <td data-label="Ven Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.vfname+" "+x.vlname}}</td>
                                <td data-label="Ven Mob No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.vmobile}}</td>
                                        
                                        <td data-label="Edit/View" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Edit/View Vendor" onclick='editdata(this.id,"update")' id="{{x.vid}}" for="kkk"> 
                                               <div class="mdl-tooltip mdl-tooltip--large" for="kkk">Edit/View Vendor</div>
                                               <i class="material-icons" id="kkk" style="outline:none">edit</i> 
                                            </button>
                                        </td>
                                        
                                        <td data-label="Delete" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Delete Vendor" onclick='deletevendor(this.id)' id="{{x.vid}}" for="deletevendor">
                                               <div class="mdl-tooltip mdl-tooltip--large" for="deletevendor">Delete Vendor</div>
                                               <i class="material-icons" id="deletevendor" style="outline:none">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
         </table>
     </div>
<dialog class="mdl-dialog">
    <form method="post" action="addvendorinsertupdate.php" onsubmit="return valid();" enctype="multipart/form-data">
        
<!--        <div id="custregtext">Customer Registration</div>-->
        <h4 id="addvendtxt">Add Vendor</h4>
<!--        <h4 id="custregupdate">Update Customer Information</h4>-->
        <hr>
         <input type="hidden" name="vid" id="vid"> 
<!--
        <input type="text" id="demotxt">
    <input type="text" id="demo1txt">
    <input type="text" id="demo">
-->
        <div class="mdl-grid">
            
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                
                    <input class="mdl-textfield__input" type="text" name="vfirstname" id="vfirstname" placeholder="" required>
                    <label class="mdl-textfield__label" for="vfirstname">First Name*</label>
                
                </div>
            </div>
            
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                
                    <input class="mdl-textfield__input" type="text" name="vlastname" id="vlastname" placeholder="">
                    <label class="mdl-textfield__label" for="vlastname">Last Name</label>
                
                </div>
            </div>
            
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="file" name="vendorphoto" id="photo" placeholder="">
                    <label class="mdl-textfield__label" for="photo">Photo</label>
                    
                </div>
                <div id="pic">
                            
                </div>
            </div>
            
        </div>
        
        <div class="mdl-grid">
            
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                
                    <input class="mdl-textfield__input" type="text" name="vaddress" id="vaddress" placeholder="" required>
                    <label class="mdl-textfield__label" for="vlastname">Vendor Address*</label>
                
                </div>
            </div>
            
         <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="text" name="mobno" id="mobileno1" placeholder="" maxlength="10" onkeypress='return event.charCode >=48 && event.charCode<=57' onkeyup="mobvalid()" required>
                    <label class="mdl-textfield__label" for="mobileno">Mobile Number*</label>
            
                </div>
             <p id="moberror" style="color:red;"></p>
            </div>
            
            <div class="mdl-cell mdl-cell--4-col">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                
                    <input class="mdl-textfield__input" type="text" name="anomobno" id="mobileno2" placeholder="Eg - 8652691949 , 9969717142">
                    <label class="mdl-textfield__label" for="anomobno">Another Mobile Number</label>
                
                  </div>
            </div>
            
        </div>
        
        <hr>
                                    
        <div class="mdl-dialog__actions" id="btnaction">
                                        
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" onclick="colsepup()" type="button">
                                            
                <i class="material-icons forwhitecolor">close</i> Close
                                        
            </button>
            
<!--            <input type="submit" value="submit" id="insertdata" name="submit"  onclick="return emailvalid()">-->
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" type="submit" value="submit" id="insertdata"  name="submit">
                <i class="material-icons forwhitecolor">send</i>Add    
<!--               onclick="return mobvalid();"                         -->
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
     function colsepup() {
         
    dialog.close();
        document.getElementById("vid").value = "";                
        document.getElementById("vfirstname").value = "";
        document.getElementById("vlastname").value ="";
        document.getElementById("vaddress").value ="";
        document.getElementById("mobileno1").value ="";
        document.getElementById("mobileno2").value ="";
        document.getElementById("photo").value ="";
         document.getElementById("pic").style.backgroundImage="";
         
        document.getElementById("insertdata").style.visibility = "visible";
        document.getElementById("updatedata").style.visibility = "visible";
                                
        document.getElementById("addvendtxt").innerHTML = document.getElementById("addvendtxt").innerHTML.replace('Update Vendor', 'Add Vendor');
     }

    function openopup(val,val2) {
       if(val2=="insert")
            {
                 dialog.showModal();
                document.getElementById("updatedata").style.visibility = "hidden";
                document.getElementById("pic").style.backgroundImage="";
            }
                                     
            
        
    }
    
    function editdata(val,val1) {
        if(val1=="update")
        {
            dialog.showModal();
            fillvalues(val);
            document.getElementById("insertdata").style.visibility = "hidden";
            document.getElementById("addvendtxt").innerHTML = document.getElementById("addvendtxt").innerHTML.replace('Add Vendor', 'Update Vendor');

        }
    }
function fillvalues(val)
    {
        id = val;
        document.getElementById("vid").value = document.getElementById("tblvid" + id).value;                
        document.getElementById("vfirstname").value = document.getElementById("tblvfname" + id).value; 
        document.getElementById("vlastname").value = document.getElementById("tblvlname" + id).value;
        document.getElementById("vaddress").value = document.getElementById("tblvaddress" + id).value;          
        document.getElementById("mobileno1").value = document.getElementById("tblvmobile" + id).value;    
        document.getElementById("mobileno2").value = document.getElementById("tblvanomobile" + id).value; 
        var pic=document.getElementById("tblPPhoto" + id).value;
        document.getElementById("pic").style.backgroundImage="url('VendorImages/"+pic+"')";
    }  

//tblvid
//tblvfname
//tblvlname
//tblvaddress
//tblvmobile
//tblvanomobile
//
        
        
//    vfirstname
//vlastname
//photo
//vaddress
//mobileno1
//mobileno2
    
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
                        $http.get('addvendorjson.php').success(function(data) {

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