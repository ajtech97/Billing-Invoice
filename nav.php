<?php
session_start();
error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");   
}
else{

    $custcount=$obj->customercount();
    $procount=$obj->productcount();
    $vencount=$obj->vendorcount();
    $emplocount=$obj->employeecount();
    $ordcount=$obj->ordercount();
    $assignempcount=$obj->assignemployeecount();
    $invcount=$obj->invoicecount();
    $purbillcount=$obj->purchasebillcount();
    
?>
<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/login.png" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>
            <?php
                            date_default_timezone_get('Asia/kolkata');
                             $time = date("H");
                            if ($time>"4" && $time < "12") {
                                echo "Good Morning, Sameer";
                            } 
                            else if ($time >= "12" && $time < "17") {
                                echo "Good Afternoon, Sameer";
                            } 
                            else if ($time >= "17" && $time <= "21") {
                                echo "Good Evening, Sameer";
                            } 
                            else if ($time >= "21" || $time>=0) {
                                echo "Good Night, Sameer";
                            }
            ?>
<!--                sameer@gmail.com-->
            </span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                <a class="mdl-navigation__link" href="accountsetting.php"><li class="mdl-menu__item"> Account Settings</li></a>
                <a class="mdl-navigation__link" href="logout.php"><li class="mdl-menu__item"> Logout</li></a>
            </ul>
          </div>
        </header>

        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
            
                <a class="mdl-navigation__link menu1" href="index.php">
                <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">account_balance_wallet</i>
                <b class="fortxtchange menuname1">Customer Payment</b>
                </a>
            
                <a class="mdl-navigation__link menu9" href="vendorpayment.php">
                <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">account_balance_wallet</i>
                <b class="fortxtchange menuname9">Vendor Payment</b>
                </a>
            
                <a class="mdl-navigation__link menu15" href="customerinvoicehistory.php">
                <i class="mdl-color-text--blue-grey-400 material-icons">remove_red_eye</i>
                <b class="fortxtchange menuname15">Invoice History</b>
                </a>
            
                <a class="mdl-navigation__link menu3" href="purchasebill.php">
                <i class="mdl-color-text--blue-grey-400 material-icons">assignment_turned_in</i>
                <b class="fortxtchange menuname3">purchase Bill <?php echo "<sup style='font-size:14px;'>(".$purbillcount.")</sup>";?></b>
                </a>
              
            <a class="mdl-navigation__link menu2" href="invoice.php">
              <i class="mdl-color-text--blue-grey-400 material-icons">receipt</i>
              <b class="fortxtchange menuname2">Invoice <?php echo "<sup style='font-size:14px;'>(".$invcount.")</sup>";?></b>
              </a>
            
             <a class="mdl-navigation__link menu12" href="assignemployee.php">
             <i class="material-icons">how_to_reg</i>
              <b class="fortxtchange menuname12">Assign Employee <?php echo "<sup style='font-size:14px;'>(".$assignempcount.")</sup>";?></b>
              </a>
            
             <a class="mdl-navigation__link menu14" href="assigncustomers.php">
             <i class="material-icons">how_to_reg</i>
              <b class="fortxtchange menuname14">Assign Customers</b>
              </a>
            
            <a class="mdl-navigation__link menu13" href="order.php">
             <i class="material-icons">local_shipping</i>
              <b class="fortxtchange menuname13">Orders <?php echo "<sup style='font-size:14px;'>(".$ordcount.")</sup>";?></b>
              </a>
     
            <a class="mdl-navigation__link menu4" href="addcustomer.php">
                <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add</i>
                <b class="fortxtchange menuname4">Customer <?php echo "<sup style='font-size:14px;'>(".$custcount.")</sup>";?></b>
            </a>
            
             <a class="mdl-navigation__link menu5" href="addproduct.php">
              <i class="mdl-color-text--blue-grey-400 material-icons">add</i>
                 <b class="fortxtchange menuname5">Product <?php echo "<sup style='font-size:14px;'>(".$procount.")</sup>";?></b>
             </a>
            
            
          <a class="mdl-navigation__link menu6" href="addvendor.php">
              <i class="mdl-color-text--blue-grey-400 material-icons">add</i>
              <b class="fortxtchange menuname6">Vendor <?php echo "<sup style='font-size:14px;'>(".$vencount.")</sup>";?></b>
          </a>
            
            <a class="mdl-navigation__link menu7" href="addemployee.php">
              <i class="mdl-color-text--blue-grey-400 material-icons">add</i>
              <b class="fortxtchange menuname7">Employee <?php echo "<sup style='font-size:14px;'>(".$emplocount.")</sup>";?></b>
          </a>
        
            <a class="mdl-navigation__link menu11" href="report.php">
              <i class="mdl-color-text--blue-grey-400 material-icons">today</i>
              <b class="fortxtchange menuname11">Daily Report</b>
          </a>
            

            
        </nav>
      </div>
<?php }?>