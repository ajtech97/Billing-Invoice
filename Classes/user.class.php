<?php
error_reporting(0);
class user
{
    function userlogin($user,$pass)
    {
        $count=0;
     
        $query=mysql_query("select count(*) as cou,name from users where uname='".$user."' and pass='".$pass."'");
        $row=mysql_fetch_array($query);
        $count=$row['cou'];
        if($count>0)
        {
            return $row['name'];
        }
        else
        {
            return "no";
        }
    }
}

?>