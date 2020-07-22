<?php
     include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();

    $query=mysql_query("delete from purchasebilldata");
    echo $query;
    ?>