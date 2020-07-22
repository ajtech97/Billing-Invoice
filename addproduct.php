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

    $obj->getproductpic();
//    $procount=$obj->productcount();
?>

<!DOCTYPE html>
<html ng-app="myapp" ng-controller="myctrl">
<head>
     <meta charset="UTF-8">
            <title>Add Product</title>
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
                .menu5 {
                    background-color: #00BCD4;
                }
        
                .menuname5 {
                    color: #37474F;
                    
                }
    
    


</style>
    <script>
		function valid()
		{
            var pname = document.getElementById("productname").value;
            var pprice = document.getElementById("productprice").value;
            var sprice = document.getElementById("sellingproductprice").value;

		if(pname=="")
		{
		    alert("Please Enter Product Name");
             document.getElementById("productname").focus();
			return false;
		}
        if(pprice=="")
            {
            alert("Please Enter Buying Product Price");
                document.getElementById("productprice").focus();
			return false; 
            }       
         
        if(sprice=="")
            {
            alert("Please Enter Selling Product Price");
                document.getElementById("sellingproductprice").focus();
			return false; 
            }       
        }
        
        
        function productvalid() {
            var proname=document.getElementById("productname").value;
            
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var pro=this.responseText;
                if(pro=="yes")
                    {
                       document.getElementById("proerror").innerHTML="Product Already Exist*";
                    }
                else{
                    document.getElementById("proerror").innerHTML="";
                }
            }
        };
        xmlhttp.open("GET", "addproductvalidation.php?proname="+proname, true);             
        xmlhttp.send();   
            
        }
        
        function deleteproduct(val)
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
                window.location='addproduct.php';
              }
              else
              {
                alert("Try again...");
              window.location='addproduct.php';
              }
            }
          };
          xmlhttp.open("GET", "Delete_Product.php?val="+val, true);
          xmlhttp.send();
        }
      }
        
//        function readURL(input) {
//
//  if (input.files && input.files[0]) {
//    var reader = new FileReader();
//
//    reader.onload = function(e) {
//      $('#pic').attr('background-image', e.target.result);
//    }
//
//    reader.readAsDataURL(input.files[0]);
//  }
//}
//
//$("#photo").change(function() {
//  readURL(this);
//});
        
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
    </style>
    
</head>
<body>
    
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                    <div class="mdl-layout__header-row">
                        <span class="mdl-layout-title">Add Product</span>
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
                                    <label class="mdl-textfield__label" for="searchbox">Search by Product Name</label>
                                </div>
                               <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored asssignbtn" onclick='openopup(this.id,"insert")' for="tt2" id="addpurbtn"> 
                                  <div class="mdl-tooltip mdl-tooltip--large" for="tt2">Add Product</div>
                                   <i class=" material-icons" id="tt2" style="align:center;outline:none;">person_add</i>
                               </button>
                            </div>
                            
<!--
                                <div class="mdl-cell mdl-cell--2-col" id="cntdiv">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input forwhitecolor" type="text" id="procnt" name="procnt" placeholder="" value="<?php //echo $procount; ?>"  readonly>
                                                    <label class="mdl-textfield__label" for="procnt" id="prolabel"><b>Product Count</b></label>
                                        </div>
                                </div> 
-->
                        </div>

                         <center>
                            <h4 class="custnotfound">Oops... No Product Found!</h4>
                         </center>

<br>
<br>
<br>
   <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                <thead>
                                    <tr>    
                                        <th class="mdl-data-table__cell--non-numeric">Sr No</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Pro Name</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Buying Pro Price</th>
                                        <th class="mdl-data-table__cell--non-numeric">Selling Pro Price</th>
                                        <th class="mdl-data-table__cell--non-numeric">Edit/View</th>
                                        <th class="mdl-data-table__cell--non-numeric">Delete</th>
                                    </tr>

                                </thead>
     </table>
<div class="tbl-content"> 
    <table  class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                <tbody>
                                    
                    <tr ng-repeat="x in con  | filter:search "  class="ng-scope" ng-model="search">

                        <input type="hidden" id="tblpid{{x.pid}}" value="{{x.pid}}">                
                        <input type="hidden" id="tblpname{{x.pid}}" value="{{x.pname}}">
                        <input type="hidden" id="tblpprice{{x.pid}}" value="{{x.pprice}}">
                        <input type="hidden" id="tblsellingpprice{{x.pid}}" value="{{x.sellingpprice}}">
                        <input type="hidden" id="tblPPhoto{{x.pid}}" value="{{x.PPhoto}}">
                       
<!-- $data.= '{"pid":"'.$pid.'","pname":"'.$pname.'","pprice":"'.$pprice.'","date":"'.$currdate.'"},';-->
                                        
                                <td data-label="Sr No" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                <td data-label="Pro Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.pname}}</td>
                                <td data-label="Buying Pro Price" class="mdl-data-table__cell--non-numeric ng-binding">{{x.pprice}}</td>
                                <td data-label="Selling Pro Price" class="mdl-data-table__cell--non-numeric ng-binding">{{x.sellingpprice}}</td>

                                        <td data-label="Edit/View" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Edit/View Product" onclick='editdata(this.id,"update")' id="{{x.pid}}" for="kkk"> 
                                               <div class="mdl-tooltip mdl-tooltip--large" for="kkk">Edit/View Product</div>
                                               <i class="material-icons" id="kkk" style="outline:none">edit</i> 
                                            </button>
                                        </td>
                                        
                                         <td data-label="Delete" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Delete Product" onclick='deleteproduct(this.id)' id="{{x.pid}}" for="deleteproduct">
                                               <div class="mdl-tooltip mdl-tooltip--large" for="deleteproduct">Delete Product</div>
                                               <i class="material-icons" id="deleteproduct" style="outline:none">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                </tbody>
        </table>
</div>
     
<dialog class="mdl-dialog">
    <form method="post" action="addproductinsertupdate.php" onsubmit="return valid();" enctype="multipart/form-data">
        
<!--        <div id="custregtext">Customer Registration</div>-->
        <h4 id="producttxt">Add Product</h4>
<!--        <h4 id="custregupdate">Update Customer Information</h4>-->
        <hr>
         <input type="hidden" name="pid" id="pid">
<!--
        <input type="text" id="demotxt">
    <input type="text" id="demo1txt">
    <input type="text" id="demo">
-->
        <div class="mdl-grid">
            
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                
                    <input class="mdl-textfield__input" type="text" name="productname" id="productname" placeholder="" required  onkeyup="productvalid();">
                    <label class="mdl-textfield__label" for="productname">Product Name*</label>
                
                </div>
                <p id="proerror" style="color:red;"></p>
            </div>                       
                      
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="text" name="productprice" id="productprice" placeholder="" required onkeypress='return event.charCode >=48 && event.charCode<=57'>
                    <label class="mdl-textfield__label" for="productprice">Buying Product Price*</label>
            
                </div>
            </div>
            
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="text" name="sellingproductprice" id="sellingproductprice" placeholder="" required onkeypress='return event.charCode >=48 && event.charCode<=57'>
                    <label class="mdl-textfield__label" for="sellingproductprice">Selling Product Price*</label>
            
                </div>
            </div>
            
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                
                    <input class="mdl-textfield__input" type="file" name="productphoto" id="photo" placeholder="" value="C:/wamp/www/bdproject/ProductImages/">
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
        document.getElementById("pid").value = "";                
        document.getElementById("productname").value = "";
        document.getElementById("productprice").value ="";
        document.getElementById("sellingproductprice").value ="";
        document.getElementById("photo").value ="";
        document.getElementById("insertdata").style.visibility = "visible";
        document.getElementById("updatedata").style.visibility = "visible";
        document.getElementById("pic").style.backgroundImage="";
         
        document.getElementById("producttxt").innerHTML = document.getElementById("producttxt").innerHTML.replace('Update Product Information', 'Add Product');
     
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

   
     
//productname
//productprice
//tblpid
//tblpname
//tblpprice

function editdata(val,val1) {
        if(val1=="update")
        {
            dialog.showModal();
            fillvalues(val);
            document.getElementById("insertdata").style.visibility = "hidden";
            document.getElementById("producttxt").innerHTML = document.getElementById("producttxt").innerHTML.replace('Add Product', 'Update Product Information');

        }
}
     function fillvalues(val)
    {
        id = val;
        document.getElementById("pid").value = document.getElementById("tblpid" + id).value;                
        document.getElementById("productname").value = document.getElementById("tblpname" + id).value; 
        document.getElementById("productprice").value = document.getElementById("tblpprice" + id).value;
        document.getElementById("sellingproductprice").value = document.getElementById("tblsellingpprice" + id).value;
        var pic=document.getElementById("tblPPhoto" + id).value;
        document.getElementById("pic").style.backgroundImage="url('ProductImages/"+pic+"')";
        
    }  
</script>
    
      <script>
          
          
                var cont = 0;
                var x = angular.module("myapp", []);
                x.controller("myctrl", function($scope, $http, $interval) {
                    $scope.getData = function() {
                        $http.get('addproductjson.php').success(function(data) {

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