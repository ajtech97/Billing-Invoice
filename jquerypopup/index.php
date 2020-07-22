    
    <link rel="stylesheet" href="css/editorviewinvoiceform.css" type="text/css">
    

<!--    /******loginformscript*****/-->
    <script src="js/jquery-2.2.3.js"></script>
    <script>
    function popup(){
       $(".magnific_popup").fadeIn(100);
       $("#popuploginform").fadeIn(0);
        $("#popuploginform").css("animation-name", "popup_fadein");
       $("#popuploginform").css("animation-duration", ".5s");
}

    </script>
<!--    /******loginformscript*****/-->
    <style>

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
<div class="magnific_popup">
    
    <form method="post" name="form" id="popuploginform">
                 
    <br>
    <br>
        
        
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">
                                
         <thead>
                   
             <tr>    
                                        <th class="mdl-data-table__cell--non-numeric">Sr.No</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Inv. Date</th>         
                                        <th class="mdl-data-table__cell--non-numeric">Inv. No</th>
                                        <th class="mdl-data-table__cell--non-numeric">Cust. Name</th>
                                        <th class="mdl-data-table__cell--non-numeric">ProductName</th>
                                        <th class="mdl-data-table__cell--non-numeric">Quantity</th>
                                        <th class="mdl-data-table__cell--non-numeric">Amount</th>
                                        <th class="mdl-data-table__cell--non-numeric">Discount</th>
                                        <th class="mdl-data-table__cell--non-numeric">Status</th>
                                        <th class="mdl-data-table__cell--non-numeric">Edit</th>
<!--                                        <th class="mdl-data-table__cell--non-numeric">Delete</th>-->
                                    
            </tr>
                    
        </thead>
              
    </table> 
        
<div class="tbl-content"> 
    
    <table  class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;" >
    
    <tbody>
       
                    <tr ng-repeat="x in con  | filter:search "  class="ng-scope" ng-model="search">
<!--

                        <input type="hidden" id="tblcid{{x.CustID}}" value="{{x.CustID}}">                
                        <input type="hidden" id="tblfname{{x.CustID}}" value="{{x.fname}}">
                        <input type="hidden" id="tbllname{{x.CustID}}" value="{{x.lname}}">
                        <input type="hidden" id="tblmobile1{{x.CustID}}" value="{{x.mob1}}">
                        <input type="hidden" id="tblmobile2{{x.CustID}}" value="{{x.mob2}}">
                        <input type="hidden" id="tblaadharcard{{x.CustID}}" value="{{x.aadhar}}">
                        <input type="hidden" id="tblphoto{{x.CustID}}" value="{{x.photo}}">
                        <input type="hidden" id="tbladdress{{x.CustID}}" value="{{x.add}}">
                        <input type="hidden" id="tblcity{{x.CustID}}" value="{{x.city}}">
                        <input type="hidden" id="tblemail{{x.CustID}}" value="{{x.email}}">
-->
                        
                                <td data-label="Cust. Id" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                <td data-label="Cust. Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.fname+" "+x.lname}}</td>
                                <td data-label="Cust. Mob No." class="mdl-data-table__cell--non-numeric ng-binding">{{x.mob1}}</td>

<!--
                                        <td data-label="Update" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Edit Customer" onclick='editdata(this.id,"update")' id="{{x.CustID}}" for="kkk"> 
                                               <div class="mdl-tooltip mdl-tooltip--large" for="kkk">Edit Customer</div>
                                               <i class="material-icons" id="kkk" style="outline:none">edit</i> 
                                            </button>
                                        </td>
                        
                                         <td data-label="Delete" class="mdl-data-table__cell--non-numeric ng-binding">
                                           <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Delete Customer" onclick='deletecust(this.id)' id="{{x.CustID}}" for="deletecust">
                                               <div class="mdl-tooltip mdl-tooltip--large" for="deletecust">Delete Customer</div>
                                               <i class="material-icons" id="deletecust" style="outline:none;">delete</i>
                                            </button>
                                        </td>
-->
                    </tr>
    
    </tbody>
                      
    </table>
              
</div> 
        
    </form>
</div>  