<?php
error_reporting(0);
class user
{
    function userlogin($user,$pass)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou,EmpName FROM employee where (MobileNo='".$user."' and password='".$pass."') and emp_display_or_not='YES'");
        $row=mysql_fetch_array($query);
        $count=$row['cou'];
        if($count>0)
        {
            return $row['EmpName'];
        }
        else
        {
            return "no";
        }
    }
}
?>