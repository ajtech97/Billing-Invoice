<?php
session_start();
error_reporting(0);
if($_SESSION['emp_username']=="")
{
    header("location:login.php");   
}
else{
?>
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
            <img src="images/login.png" class="demo-avatar">
            <div class="demo-avatar-dropdown">
                <span>
            <?php
                            include("Classes/db.class.php");
                            $obj=new maindbfunctions();
                            $obj->connect();
                            $mob=$_SESSION['emp_username'];
                            $UserName=$obj->getemployeename($mob);
                            
                            date_default_timezone_get('Asia/kolkata');
                             $time = date("H");
                            if ($time>"4" && $time < "12") {
                                echo "Good Morning, ".$UserName;
                            } 
                            else if ($time >= "12" && $time < "17") {
                                echo "Good Afternoon, ".$UserName;
                            } 
                            else if ($time >= "17" && $time <= "21") {
                                echo "Good Evening, ".$UserName;
                            } 
                            else if ($time >= "21" || $time>=0) {
                                echo "Good Night, ".$UserName;
                            }
            ?>
            </span>
                <div class="mdl-layout-spacer"></div>
                <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                    <a class="mdl-navigation__link" href="logout.php">
                        <li class="mdl-menu__item"> Logout</li>
                    </a>
                </ul>
            </div>
        </header>

        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">


            <a class="mdl-navigation__link menu1" href="index.php">
                <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">account_balance_wallet</i>
                <b class="fortxtchange menuname1">Customer's Assigned</b>
            </a>
            
             <a class="mdl-navigation__link menu2" href="order.php">
             <i class="material-icons">local_shipping</i>
              <b class="fortxtchange menuname2">Orders</b>
              </a>


        </nav>
    </div>
<?php }?>
