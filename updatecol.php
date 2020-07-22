<?php
include("Classes/db.class.php");
    $obj=new maindbfunctions();
    $obj->connect();

    $query=mysql_query("DROP VIEW order_table_data");
    echo $query;
    ?>