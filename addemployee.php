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
    
//    $emplocount=$obj->employeecount();
    
?>

<!DOCTYPE html>
<html ng-app="myapp" ng-controller="myctrl">
<head>
     <meta charset="UTF-8">
            <title>Add Employee</title>
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
     
            <link rel="stylesheet" href="css/employeepassword.css" type="text/css">
            <script src="js/jquery-1.12.3.min.js"></script>
            
        
<style>
                .menu7 {
                    background-color: #00BCD4;
                }
        
                .menuname7 {
                    color: #37474F;
                }
    
    
    
    .magnific_popup{
  position: fixed;
  height: 100%;
  width: 100%;
  background-color: white; 
  display: none;
  z-index: 1;
}     


    @keyframes popup_fadein {
        from {
            transform: scale(.5, .5);
        }
        to {
            transform: scale(1, 1);
        }
    }
    @keyframes popup_fadeout {
        from {
            transform: scale(1, 1);
        }
        to {
            transform: scale(.5, .5);
        }
    }

</style>
    <!--    /******loginformscript*****/-->

    <script>
    function popup(empval){
       
       $(".magnific_popup").fadeIn(100);
       $("#popuploginform").fadeIn(0);
        $("#popuploginform").css("animation-name", "popup_fadein");
       $("#popuploginform").css("animation-duration", ".5s");
        
       empfill(empval);  
}
        $(document).ready(function () {
   $("#closer").click(function(){
       $(".magnific_popup").fadeOut(300);
       $("#popuploginform").css("animation-name", "popup_fadeout");
       $("#popuploginform").css("animation-duration", ".5s");
   });
 });

        
//        
//        $(document).ready(function() {
//            $(".editemp").click(function() {
//                $("#passwo").fadeOut("slow");
//            });
//        });
        
    </script>
<!--    /******loginformscript*****/-->
    <script>
        
		function valid()
		{
        var empname = document.getElementById("empname").value;
        var mobno = document.getElementById("mobno").value;
        var password = document.getElementById("password").value;
        var confpassword = document.getElementById("confpassword").value;

        if(empname=="")
            {
              alert("Please Enter Employee Name");
                document.getElementById("empname").focus();
			  return false;
            }
        if(mobno.length!=10)
		{
			alert("Please Enter 10 Digits Mobile Number");
             document.getElementById("mobno").focus();
			return false;
		}
        if(password=="")
            {
              alert("Please Enter Password");
                document.getElementById("password").focus();
			  return false;
            }
        if(password.length<6)
		{
			alert("Please Enter Minimum 6 Digits Password");
            document.getElementById("password").focus();
			return false;
		}
       
      
        }
        
        function passvalid()
        {
              var passwordd = document.getElementById("passwordd").value;
        var confirmpasswordd = document.getElementById("confirmpasswordd").value;
             if(passwordd.length<6)
		{
			alert("Please Enter Minimum 6 Digits Password");
            document.getElementById("passwordd").focus();
			return false;
		}
         if(confirmpasswordd.length<6)
		{
			alert("Please Enter Minimum 6 Digits Confirm Password");
            document.getElementById("confirmpasswordd").focus();
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
            var empid=document.getElementById("EmpId").value;
            var mobb1=document.getElementById("mobno").value;
            
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var mob=this.responseText;
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
//        xmlhttp.open("GET", "addemployeevalidation.php?mobile="+mobb1+"&source=mob", true);
        xmlhttp.open("GET", "addemployeevalidation.php?mobile="+mobb1+"&empid="+empid, true);
        xmlhttp.send();   
            
}
                   
        function changepassvalid()
               {
                    var p=document.getElementById("passwordd").value;
                    var conp=document.getElementById("confirmpasswordd").value;
            
                    if(p==conp)
                        {
                            document.getElementById("conpasserror").innerHTML="";
                        }
                   else
                       {
                           document.getElementById("conpasserror").innerHTML="Please Enter Same Password*";
                       }
                   
               }
        
        function confpasswordvalidation()
        {
            var pass=document.getElementById("password").value;
            var confpass=document.getElementById("confpassword").value;
            if(pass==confpass)
                {
                    document.getElementById("confpassworderror").innerHTML="";
                }
            else
                {
                    document.getElementById("confpassworderror").innerHTML="Please Enter Same Password*";
                }
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
//        xmlhttp.open("GET", "addemployeevalidation.php?em="+emaill+"&source=email", true);
//        xmlhttp.send();
//    }
//        
//       

         function deleteemployee(val)
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
                window.location='addemployee.php';
              }
              else
              {
                alert("Try again...");
              window.location='addemployee.php';
              }
            }
          };
          xmlhttp.open("GET", "Delete_Employee.php?val="+val, true);
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
                        <span class="mdl-layout-title">Add Employee</span>
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
<div class="magnific_popup">
    
    <form method="post" name="form" id="popuploginform" action="updateemployeepassword.php" onsubmit="return passvalid()">
     
          <input type="hidden" name="UpdEmpId" id="UpdEmpId"> 
        
<!--        <input type="hidden" id="Updeid{{x.EmpId}}" value="{{x.EmpId}}"> -->
        
        <div class="mdl-grid">
         <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="password" name="passwordd" id="passwordd" placeholder="" required>
                    <label class="mdl-textfield__label" for="passwordd">Password*</label>
                    
                </div>
        </div>
        
        <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="password" name="confirmpasswordd" id="confirmpasswordd" placeholder="" required onkeyup="changepassvalid()">
                    <label class="mdl-textfield__label" for="confirmpasswordd">Confirm Password*</label>
                    
                </div>
            <p id="conpasserror" style="color:red;"></p>
        </div>
            
        
               
     </div>
        
        <div class="mdl-grid">
        <div class="mdl-dialog__actions" style="top:0px;position:relative;right:0px;">        
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" id="closer"  type="button">   
                                            
                <i class="material-icons forwhitecolor">close</i> Close
                                        
            </button>
            
            <button  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" type="submit" value="update" id="updatepass" name="updatepass">
                <i class="material-icons forwhitecolor">send</i>Update
            </button>
            
        </div>
        </div>
        
<!--        <div class="mdl-grid">-->
            
<!--            <div class="mdl-cell mdl-cell--6-col"></div> -->
       
<!--        </div>-->
    </form>
</div>   
     
     
<input type="hidden" id="setmob" value="">
<input type="hidden" id="setemail" value="">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--4-col"></div>
                    
                            <div class="mdl-cell mdl-cell--6-col">  
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="searchbox" ng-model="search">
                                    <label class="mdl-textfield__label" for="searchbox">Search by Employee.Mob.No</label>
                                </div>
                               <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored asssignbtn" onclick='openopup(this.id,"insert")' for="tt2" id="addpurbtn"> 
                                  <div class="mdl-tooltip mdl-tooltip--large" for="tt2">Add Employee</div>
                                   <i class=" material-icons" id="tt2" style="align:center;outline:none;">person_add</i>
                               </button>
                            </div>
                            
<!--
                             <div class="mdl-cell mdl-cell--2-col" id="cntdiv">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input forwhitecolor" type="text" id="emplo" name="emplo" placeholder="" value="<?php //echo $emplocount; ?>"  readonly>
                                                    <label class="mdl-textfield__label" for="emplo" id="emplolabel"><b>Employee Count</b></label>
                                        </div>
                            </div> 
-->
                        </div>
     
                

                         <center>
                            <h4 class="custnotfound">Oops... No Employee Found!</h4>
                         </center>

<br>
<br>
<br>
<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                <thead>
                                    <tr>    
                                        <th class="mdl-data-table__cell--non-numeric">Sr No</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Emp Name</th>         
                                         <th class="mdl-data-table__cell--non-numeric">Emp Mob No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Edit/View</th>
                                        <th class="mdl-data-table__cell--non-numeric">Change password</th>
                                        <th class="mdl-data-table__cell--non-numeric">Delete</th>
                                    </tr>

                                </thead>
</table>
     <div class="tbl-content">
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                <tbody>
                                    <tr ng-repeat="x in con  | filter:search "  class="ng-scope" ng-model="search">
                                        
                        <input type="hidden" id="tbleid{{x.EmpId}}" value="{{x.EmpId}}">                
                        <input type="hidden" id="tblename{{x.EmpId}}" value="{{x.EmpName}}">
                        <input type="hidden" id="tbleemail{{x.EmpId}}" value="{{x.Email}}">
                        <input type="hidden" id="tblemobile{{x.EmpId}}" value="{{x.MobileNo}}">
                        <input type="hidden" id="tbleaddress{{x.EmpId}}" value="{{x.Address}}">
                        <input type="hidden" id="tblepassword{{x.EmpId}}" value="{{x.Password}}">
                        <input type="hidden" id="tbleconfpassword{{x.EmpId}}" value="{{x.ConfPassword}}">
                        <input type="hidden" id="tblecurrdatetime{{x.EmpId}}" value="{{x.CurrDateTime}}">
                        <input type="hidden" id="tblPPhoto{{x.EmpId}}" value="{{x.photo}}">

<!--
     
     $data.= '{"vid":"'.$vid.'","vfname":"'.$vfname.'","vlname":"'.$vlname.'","vaddress":"'.$vaddress.'","vmobile":"'.$vmobile.'","currdate":"'.$currdate.'"},';
-->
                                        
                                <td data-label="Sr No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                <td data-label="Emp Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.EmpName}}</td>
                                <td data-label="Emp Mob No" class="mdl-data-table__cell--non-numeric ng-binding">{{x.MobileNo}}</td>
                                        
                                        <td data-label="Edit/View" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn editemp" title="Edit/View Employee" onclick='editdata(this.id,"update")' id="{{x.EmpId}}" for="kkk"> 
                                               <div class="mdl-tooltip mdl-tooltip--large" for="kkk">Edit/View Employee</div>
                                               <i class="material-icons" id="kkk" style="outline:none">edit</i> 
                                            </button>
                                        </td>
                                        
                                         <td data-label="Chnage password" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Change Password" onclick='popup(this.id)' id="{{x.EmpId}}" for="cpass"> 
                                               <div class="mdl-tooltip mdl-tooltip--large" for="cpass">Change Password</div>
                                               <i class="material-icons" id="cpass" style="outline:none">vpn_key</i> 
                                            </button>
                                        </td>
                                        
                                        <td data-label="Delete" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Delete Employee" onclick='deleteemployee(this.id)' id="{{x.EmpId}}" for="deleteemployee">
                                               <div class="mdl-tooltip mdl-tooltip--large" for="deleteemployee">Delete Employee</div>
                                               <i class="material-icons" id="deleteemployee" style="outline:none">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
         </table>
     </div>
<dialog class="mdl-dialog">
    <form method="post" action="addemployeeinsertupdate.php" onsubmit="return valid();" enctype="multipart/form-data">
        
<!--        <div id="custregtext">Customer Registration</div>-->
        <h4 id="addemptxt">Add Employee</h4>
<!--        <h4 id="custregupdate">Update Customer Information</h4>-->
        <hr>
         <input type="hidden" name="EmpId" id="EmpId"> 
       

<!--
        <input type="text" id="demotxt">
    <input type="text" id="demo1txt">
    <input type="text" id="demo">
-->
        <div class="mdl-grid">
            
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                
                    <input class="mdl-textfield__input" type="text" name="empname" id="empname" placeholder="" required>
                    <label class="mdl-textfield__label" for="empname">Employee Name*</label>
                
                </div>
            </div>
            
             <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    
                    <input class="mdl-textfield__input" type="email" name="email" id="email" placeholder="">                            
                    <label class="mdl-textfield__label" for="email">Email</label>
                                            
                </div>
            </div>
            
            
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="text" name="mobno" id="mobno" placeholder="" maxlength="10" onkeypress='return event.charCode >=48 && event.charCode<=57' onkeyup="mobvalid()" required>
                    <label class="mdl-textfield__label" for="mobno">Mobile Number(Username)*</label>
            
                </div>
                <p id="moberror" style="color:red;"></p>
            </div>
 
        </div>
        
        <div class="mdl-grid">
            
                       
            
            <div class="mdl-cell mdl-cell--4-col" id="passwo">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="password" name="password" id="password" placeholder="" required>
                    <label class="mdl-textfield__label" for="password">Password*</label>
                    
                </div>
            </div>
            
             <div class="mdl-cell mdl-cell--4-col" id="confpass">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="password" name="confpassword" id="confpassword" placeholder="" onkeyup="confpasswordvalidation()" required>
                    <label class="mdl-textfield__label" for="confpassword">Confirm Password*</label>
                     
                </div>
                 <p id="confpassworderror" style="color:red;"></p>
            </div>
            
            
            
            
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                
                    <input class="mdl-textfield__input" type="text" name="eaddress" id="eaddress" placeholder="">
                    <label class="mdl-textfield__label" for="eaddress">Employee Address</label>
                
                </div>
            </div>
            
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="file" name="employeephoto" id="photo" placeholder="">
                    <label class="mdl-textfield__label" for="photo">Photo</label>
                    
                </div>
                <div id="pic">
                
                </div>
            </div>
            
        </div>
        
        <hr>
                                    
        <div class="mdl-dialog__actions" id="btnaction">
                                        
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" onclick="colsepup()" type="button">
                                            
                <i class="material-icons forwhitecolor">close</i> Close
                                        
            </button>
            
<!--            <input type="submit" value="submit" id="insertdata" name="submit"  onclick="return emailvalid()">-->
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" type="submit" value="submit" id="insertdata"  name="insertdata">
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
        document.getElementById("EmpId").value = "";                
        document.getElementById("empname").value = "";
        document.getElementById("email").value ="";
        document.getElementById("mobno").value ="";
        document.getElementById("eaddress").value ="";
        document.getElementById("password").value ="";
        document.getElementById("confpassword").value ="";
        document.getElementById("photo").value ="";
         document.getElementById("pic").style.backgroundImage="";
         
        document.getElementById("insertdata").style.visibility = "visible";
        document.getElementById("updatedata").style.visibility = "visible";
                                
        document.getElementById("addemptxt").innerHTML = document.getElementById("addemptxt").innerHTML.replace('Update Employee', 'Add Employee');
     }

    function openopup(val,val2) {
       if(val2=="insert")
            {
                 dialog.showModal();
                document.getElementById("password").disabled=false;
                document.getElementById("confpassword").disabled=false;
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
            document.getElementById("addemptxt").innerHTML = document.getElementById("addemptxt").innerHTML.replace('Add Employee', 'Update Employee');

        }
    }
function fillvalues(val)
    {
        id = val;

        document.getElementById("EmpId").value = document.getElementById("tbleid" + id).value;                
        document.getElementById("empname").value = document.getElementById("tblename" + id).value; 
        document.getElementById("email").value = document.getElementById("tbleemail" + id).value;
        document.getElementById("mobno").value = document.getElementById("tblemobile" + id).value;          
        document.getElementById("eaddress").value = document.getElementById("tbleaddress" + id).value;    
        document.getElementById("password").value= document.getElementById("tblepassword"+ id).value;
        document.getElementById("confpassword").value= document.getElementById("tbleconfpassword"+ id).value;
        document.getElementById("password").disabled=true;
        document.getElementById("confpassword").disabled=true;
        var pic=document.getElementById("tblPPhoto" + id).value;
         document.getElementById("pic").style.backgroundImage="url('EmployeeImages/"+pic+"')";
    }  
    
    function empfill(empval)
    {
//        alert(empval);
        document.getElementById("UpdEmpId").value =empval;
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
                        $http.get('addemployeejson.php').success(function(data) {

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