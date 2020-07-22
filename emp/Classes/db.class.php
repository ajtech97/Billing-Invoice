<?php
error_reporting(0);
date_default_timezone_set('Asia/kolkata');
$curdate=date('Y-m-d');
$curtime=date('H:i:s');
class maindbfunctions
{
            function connect()
            {

                 //$link = mysql_connect('localhost', 'nchsnewdb', 'NetComNewDb@#2017');
                 $link = mysql_connect('localhost', 'root', '123');
                if (!$link) {
                   $msg="There is some problem with the Connection Please Check.
                    The Error is : ".mysql_error();
                    mail("ajinkyalonkar88.al@gmail.com","BD EMPLOYEE ERROR",$msg);
                    //mail("ssv1437@gmail.com","lolo",$msg);
                    //mail("saurabhsomani@nchs.co.in","lolo",$msg);
//                    header("Location:error.php?sitename=NCHS");
                }
                else
                {
                    //$db_selected = mysql_select_db('nchs_ajnchs', $link);
                    $db_selected = mysql_select_db('bd', $link);
                    if (!$db_selected) {
                    $msg="There is some problem with the Database Selection Please Check.
                    The Error is : ".mysql_error();
                    mail("ajinkyalonkar88.al@gmail.com","BD EMPLOYEE ERROR",$msg);
                   //mail("ssv1437@gmail.com","lolo",$msg);
                    //mail("saurabhsomani@nchs.co.in","lolo",$msg);
//                    header("Location:error.php?sitename=NCHS");
                }   
                }
            }



            function ipaddress()
            {

                    if(!empty($_SERVER['HTTP_CLIENT_IP']))
                    {
                      $ip=$_SERVER['HTTP_CLIENT_IP'];
                    }
                    elseif (!empty($_SERVER['HTTP_CLIENT_IP']))
                    {
                          $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
                    }
                    else
                    {
                          $ip=$_SERVER['REMOTE_ADDR'];

                    }
                    return $ip;
            }


      function insertdb() {
          /*
          first argument is table name and then column name , value
          Eg. ...->insertdb('tablename','column_name1','value1','column_name2','value2');
          */
        $j = 0;
        $col = '';
        $val = '';
        $info = func_get_args();
        $num = func_num_args();

        $table = "`" . $info[0] . "`";

        for ($j = 1; $j < $num; $j++) {
            if (($j % 2) == 0) {
                $val = $val . "'" . $info[$j] . "',";
            }
            if (($j % 2) == 1) {

                $col = $col . "`" . $info[$j] . "`,";
            }
        }
        $val = rtrim($val, ",");
        $col = rtrim($col, ",");
//          echo "insert into $table($col) values($val)";
        $ans=mysql_query("insert into $table($col) values($val)");
          if($ans==1)
          {
              return "yes";
          }
          else
          {
              return "no";
          }
    }
    
    function updatedata()
	{
                global $conStr;
                $numargs=func_get_args();
                //echo $numargs."<br />\n";
                $len=func_num_args();
                //echo $len."<br />\n";
                $tablename=func_get_arg(0);
                //echo $tablename."<br />\n";
                $condition=func_get_arg(1);
                $condition="`".$condition."`";
                //echo $condition."<br />\n";
                $condval=func_get_arg(2);
                $condval='"'.$condval.'"';
                //echo $condval."<br />\n";

                $combineconditions=$condition."=".$condval;

                for($i=3,$j=4;$i<$len,$j<$len;$i+=2,$j+=2)
                {

                    $currcol=func_get_arg($i);
                    //echo $currcol."<br />\n"; 
                    $currcolval=func_get_arg($j);
                    //echo $currcolval."<br />\n";
                    $columns=$columns."`".$currcol."`='".$currcolval."',";

                }
                $MainStr=substr($columns,0,-1);
                //echo $MainStr."<br />\n";

               //echo "<br>". $finalQuery="UPDATE $tablename SET $MainStr WHERE $combineconditions";
                $finalQuery="UPDATE $tablename SET $MainStr WHERE $combineconditions";
                $finalQuery;
                $ans=mysql_query($finalQuery);
                $counter=mysql_affected_rows();
                if($counter>"0")
                {
                    return "yes";
                }
                else
                {
                    return "false";
                }
    }
    
    function checkrecorsarepresentornot($tablename,$columnname,$value)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$columnname."='".$value."'");
        $row=mysql_fetch_array($query);
        $count=$row['cou'];
        if($count>0)
        {
            return "yes";
        }
        else
        {
            return "no";
        }
    }

    function  getinvoiceid($invoiceno)
    {
        $invid=mysql_query("select InvId from invoices where InvoiceNo='$invoiceno'");
        $row=mysql_fetch_array($invid);
        $inid=$row['InvId'];
        return $inid;
    }
    
    function getcustmobno($custid)
    {
        $query=mysql_query("select Mobile from customer where CustId=$custid");
        $row=mysql_fetch_array($query);
        $mobno=$row["Mobile"];
        return $mobno;
    }
    ////////
    function getemployeename($mob)
    {
        $query=mysql_query("select EmpName from employee where MobileNo='".$mob."' and emp_display_or_not='YES'");
        $row=mysql_fetch_array($query);
        $uname=$row["EmpName"];
        return $uname;
    }

    function getemployeeEmpID($mob)
    {
        $query=mysql_query("select EmpId from employee where MobileNo='".$mob."' and emp_display_or_not='YES'");
        $row=mysql_fetch_array($query);
        $empid=$row["EmpId"];
        return $empid;
    }
    
    function custname($custid)
    {
        $query=mysql_query("select FName,LName from customer where CustId=$custid and cust_display_or_not='YES'");
        $row=mysql_fetch_array($query);
        $custname=$row['FName']." ".$row["LName"];
        return $custname;
    
    }
    
    function getinvoicestatus($invoiceid)
    {
        $query=mysql_query("select InvoiceStatus from invoices where InvId=$invoiceid");
        $row=mysql_fetch_array($query);
        $invstatus=$row["InvoiceStatus"];
        if($invstatus==0)
        {
            $que=mysql_query("select PaymentStatus from paymentstatus where PSId=$invstatus");
            $sta=mysql_fetch_array($que);
            $invstatus=$sta["PaymentStatus"];
            return $invstatus;
        }
        if($invstatus==1)
        {
            $que=mysql_query("select PaymentStatus from paymentstatus where PSId=$invstatus");
            $sta=mysql_fetch_array($que);
            $invstatus=$sta["PaymentStatus"];
            return $invstatus;
        }
        if($invstatus==2)
        {
            $que=mysql_query("select PaymentStatus from paymentstatus where PSId=$invstatus");
            $sta=mysql_fetch_array($que);
            $invstatus=$sta["PaymentStatus"];
            return $invstatus;
        }
    }
    
    /*Orders*/
    
     function getcustomerlist()
    {
        $data="";
        $auth = mysql_query("Select CustId,FName,LName from customer where cust_display_or_not like 'YES'");
        while($row=mysql_fetch_array($auth))
        {
            $data.="<option>".$row['FName']."  ".$row['LName']."</option>";
        }
        return $data;
    }
    function getcustomerlistselected($mob)
    {
        $query1=mysql_query("select EmpId from employee where MobileNo='".$mob."' and emp_display_or_not='YES'");
        $row1=mysql_fetch_array($query1);
        $empid=$row1["EmpId"];        
        $data="";
        $auth=mysql_query("select custid from assigncustomers where empid=$empid");
        while($row=mysql_fetch_array($auth))
        {
                $cuid=$row['custid'];
                $auth1 = mysql_query("Select CustId,FName,LName from customer where (CustId=$cuid and cust_display_or_not like 'YES') ");
               while($row2=mysql_fetch_array($auth1))
                {
                    $data.="<option>".$row2['FName']."  ".$row2['LName']."</option>";  
                }
         }
        return $data;
    }
    
    function getcustid($custname)
    {
         $custn=str_replace(' ','',$custname);
         $ssno=mysql_query("select CustId from customer where FullName='$custn' and cust_display_or_not like 'YES'");       
         $custid=mysql_fetch_array($ssno);
         $custoid=$custid['CustId'];
         return  $custoid;
    }
    
     function getproductlist()
    {
        $data="";
        $auth = mysql_query("Select PId,PName,SPPrice from product where pro_display_or_not like 'YES'");
        while($row=mysql_fetch_array($auth))
        {
//            $data.=' < option value="'.$row['PName'].'" >'".$row['PName']."  ".$row['PPrice']."'</option>';
            $data.=' <option value="'.$row['PName'].'('.$row['SPPrice'].')">'.$row['PName'].' ('.$row['SPPrice'].' ₹)</option>';
//            $data.='<option value="'.$row['PName'].'"></option>';
            
        }
        return $data;
    }
    
    function orderserialnostarting()
    {
        $query=mysql_query("select OrderNo from orders");
        $row1=mysql_fetch_array($query);
        $ono=$row1['OrderNo'];
        if($ono=="")
        {
            $ssno=mysql_query("select * from allserialnostarting");
            $row2=mysql_fetch_array($ssno);
            $serno=$row2['orderstar'];

        }
        else
        {
            $alinno=mysql_query("select OrderNo from orders order by OrderNo desc");
            $row3=mysql_fetch_array($alinno);
            $serno=$row3['OrderNo'];
            $serno++;
        }
         return $serno;
    }
    
     function  getorderid($orderno)
    {
        $oid=mysql_query("select OId from orders where OrderNo='$orderno'");
        $row=mysql_fetch_array($oid);
        $orderid=$row['OId'];
        return $orderid;
    }
    
    function getorderno($oid)
    {
        $ono=mysql_query("select OrderNo from orders where OId='$oid'");
        $row=mysql_fetch_array($ono);
        $orderno=$row['OrderNo'];
        return $orderno;
    }
    
    function getorderdate($oid)
    {
        $odate=mysql_query("select ODate from orders where OId='$oid'");
        $row=mysql_fetch_array($odate);
        $orderdate=$row['ODate'];
        return $orderdate;
    }
    
    function checkcustexistornot($custid)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou from customer where CustId=$custid and cust_display_or_not='YES'");
        $row=mysql_fetch_array($query);
        $count=$row['cou'];
        if($count>0)
        {
            return "yes";
        }
        else
        {
            return "no";
        }
    }
    
    
    /*Orders*/
    
}
    ?>
