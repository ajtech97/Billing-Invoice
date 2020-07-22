<?php
error_reporting(0);
date_default_timezone_set('Asia/kolkata');
//$currentdate=date('d-m-Y');
//$curtime=date('H:i:s');
// $currdate=date("d-m-Y",strtotime($row['Currdate']));
class maindbfunctions
{
            function connect()
            {

                 $link = mysql_connect('localhost', 'root', '');
                if (!$link) {
                   $msg="There is some problem with the Connection Please Check.
                    The Error is : ".mysql_error();
                    mail("ajinkyalonkar88.al@gmail.com","BD ADMIN ERROR",$msg);

                }
                else
                {
                    //$db_selected = mysql_select_db('nchs_ajnchs', $link);
                    $db_selected = mysql_select_db('bd', $link);
                    if (!$db_selected) {
                    $msg="There is some problem with the Database Selection Please Check.
                    The Error is : ".mysql_error();
                    mail("ajinkyalonkar88.al@gmail.com","BD ADMIN ERROR",$msg);
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

//    function updatepass($tablename,$columnname,$rnpass)
//    {
//        $query=mysql_query("update ".$tablename." set pass='$rnpass' where UId=1");
//        if($query==1)
//        {
//            return "yes";
//        }
//        else
//        {
//            return "no";
//        }
//    }
    function updatepass($tablename,$name,$username,$rnpass,$mob,$anomob,$email,$address,$curdate,$curtime,$ip)
    {
      $query=mysql_query("update ".$tablename." set name='$name',uname='$username',pass='$rnpass',mobileno='$mob',AnotherMobileNo='$anomob',EmailId='$email',Address='$address',CurrDateTime='$curdate $curtime',IpAddress='$ip' where UId=1");
        if($query==1)
        {
            return "yes";
        }
        else
        {
            return "no";
        }
    }

    function checkemailarepresentornot($tablename,$columnname,$value)
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

    function checkcustmobnoarepresentornot($tablename,$colmob,$value,$custid)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$colmob."='".$value."' and CustId<>'$custid' and cust_display_or_not='YES'");
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

     function checkmobnoarepresentornotcustomer($tablename,$colmob,$value)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$colmob."='".$value."' and cust_display_or_not='YES'");
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

    function checkvendormobnoarepresentornot($tablename,$colmob,$value,$vid)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$colmob."='".$value."' and VId<>'$vid' and ven_display_or_not='YES'");
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

//    function checkmobnoarepresentornot($tablename,$colmob,$value)
//    {
//        $count=0;
//        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$colmob."='".$value."'");
//        $row=mysql_fetch_array($query);
//        $count=$row['cou'];
//        if($count>0)
//        {
//            return "yes";
//        }
//        else
//        {
//            return "no";
//        }
//    }

    function checkmobnoarepresentornotvendor($tablename,$colmob,$value)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$colmob."='".$value."' and ven_display_or_not='YES'");
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


    function checkempmobnoarepresentornot($tablename,$colmob,$value,$empid)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$colmob."='".$value."' and EmpId<>'$empid' and emp_display_or_not='YES'");
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

    function checkmobnoarepresentornotemployee($tablename,$colmob,$value)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$colmob."='".$value."' and emp_display_or_not='YES'");
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

    function checkalreadyproductarepresentornot($tablename,$columnname,$value,$PId)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$columnname."='".$value."' and PId<>'$PId' and pro_display_or_not='YES'");
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

    function checkproductarepresentornot($tablename,$columnname,$value)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$columnname."='".$value."' and pro_display_or_not='YES'");
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


    function deleterecord($tablename,$columnname,$value)
    {
        $query=mysql_query("delete from ".$tablename." where ".$columnname."='".$value."'");
        if($query==1)
        {
            return "yes";
        }
        else
        {
            return "no";
        }
    }

    function getcount($tablename,$columnname,$value)
    {
        #return the total count
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$columnname."='".$value."'");
        $row=mysql_fetch_array($query);
        $count=$row['cou'];
        return $count;
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
    function checkvendexistornot($vendorid)
    {
        $count=0;
        $query=mysql_query("select count(*) as cou from vendor where VId=$vendorid and ven_display_or_not='YES'");
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




    function updatecustomerdata($tablename,$fname,$lname,$custfn,$email,$city,$address,$mobno,$anomobno,$state,$country,$photo,$aadharcard,$CId)
    {
        $query=mysql_query("update ".$tablename." set FName='$fname',LName='$lname',FullName='$custfn',Address='$address',City='$city',Emailid='$email',Mobile='$mobno',Mobile2='$anomobno',State='$state',Country='$country',Photo='$photo',AadharCard='$aadharcard' where CustId=$CId");
        return $query;
    }

    function updatecustomerdatawithoutphoto($tablename,$fname,$lname,$custfn,$email,$city,$address,$mobno,$anomobno,$state,$country,$aadharcard,$CId)
    {
       $query=mysql_query("update ".$tablename." set FName='$fname',LName='$lname',FullName='$custfn',Address='$address',City='$city',Emailid='$email',Mobile='$mobno',Mobile2='$anomobno',State='$state',Country='$country',AadharCard='$aadharcard' where CustId=$CId");
       return $query;
    }

    function updatelocationdata($tablename,$lname,$lcode,$LId)
    {
        $query=mysql_query("update ".$tablename." set LName='$lname',LCode='$lcode' where LId='$LId'");
        return $query;
    }

    function updateproductdata($tablename,$pname,$pprice,$sprice,$pphoto,$PId)
    {
        $query=mysql_query("update ".$tablename." set PName='$pname',PPrice='$pprice',SPPrice='$sprice',PPhoto='$pphoto' where PId='$PId'");
        return $query;
    }
    function updateproductdatawithoutphoto($tablename,$pname,$pprice,$sprice,$PId)
    {
        $query=mysql_query("update ".$tablename." set PName='$pname',PPrice='$pprice',SPPrice='$sprice' where PId='$PId'");
        return $query;
    }

    function updatevendordata($tablename,$vfname,$vlname,$vendfn,$photo,$vaddress,$vmobno,$vanomob,$VId)
    {
        $query=mysql_query("update ".$tablename." set VFName='$vfname',VLName='$vlname',FullName='$vendfn',VPhoto='$photo',VAddress='$vaddress',VMobile='$vmobno',VAnotherContact='$vanomob' where VId='$VId'");
        return $query;
    }
    function updatevendordatawithoutphoto($tablename,$vfname,$vlname,$vendfn,$vaddress,$vmobno,$vanomob,$VId)
    {
       $query=mysql_query("update ".$tablename." set VFName='$vfname',VLName='$vlname',FullName='$vendfn',VAddress='$vaddress',VMobile='$vmobno',VAnotherContact='$vanomob' where VId='$VId'");
        return $query;
    }

    function updateemployeedata($tablename,$empname,$email,$mobno,$eaddress,$photo,$EmpId)
    {
        $query=mysql_query("update ".$tablename." set EmpName='$empname',Email='$email',MobileNo='$mobno',Address='$eaddress',EmpPhoto='$photo' where EmpId='$EmpId'");
        return $query;
    }

    function updateemployeedatawithoutphoto($tablename,$empname,$email,$mobno,$eaddress,$empid)
    {
        $query=mysql_query("update ".$tablename." set EmpName='$empname',Email='$email',MobileNo='$mobno',Address='$eaddress' where EmpId='$empid'");
        return $query;
    }

    function updateemplyeepassword($tablename,$pass,$confpass,$empid)
    {
        $query=mysql_query("update ".$tablename." set Password='$pass',ConfPassword='$confpass' where EmpId='$empid'");
        return $query;
    }
    function getvendorlist()
    {
        $data="";
        $auth = mysql_query("Select VId,VFName,VLName from vendor where ven_display_or_not like 'YES'");
        while($row=mysql_fetch_array($auth))
        {
//            value="'.$row['VId'].'"
            $data.='<option>'.$row['VFName'].' '.$row['VLName'].'</option>';
        }
        return $data;
    }
    function getvendid($vendorname)
    {
//        $query=mysql_query("select VId from vendor where VendorName='$vendorname'");

         $venn=str_replace(' ','',$vendorname);
         $ssno=mysql_query("select VId from vendor where FullName='$venn' and ven_display_or_not like 'YES'");
         $vid=mysql_fetch_array($ssno);
         $venid=$vid['VId'];
         return $venid;
    }

    function getproductlist()
    {
        $data="";
        $auth = mysql_query("Select PId,PName,SPPrice from product where pro_display_or_not like 'YES'");
        while($row=mysql_fetch_array($auth))
        {
//            $data.=' < option value="'.$row['PName'].'" >'".$row['PName']."  ".$row['PPrice']."'</option>';
            $data.=' <option value="'.$row['PName'].'('.$row['SPPrice'].')">'.$row['PName'].' ('.$row['SPPrice'].' ₹)</option>';
//            $data.=' <option id="getsellingpriceo'+$counter+'" onclick="" value="'.$row['PName'].'" >'.$row['PName'].' ('.$row['SPPrice'].' ₹)</option>';
//            $data.='<option value="'.$row['PName'].'"></option>';

        }
        return $data;
    }
     function getvendorproductlist()
    {
        $data="";
        $auth = mysql_query("Select PId,PName,PPrice from product where pro_display_or_not like 'YES'");
        while($row=mysql_fetch_array($auth))
        {
//            $data.=' < option value="'.$row['PName'].'" >'".$row['PName']."  ".$row['PPrice']."'</option>';
            $data.=' <option value="'.$row['PName'].'('.$row['PPrice'].')">'.$row['PName'].' ('.$row['PPrice'].' ₹)</option>';
//            $data.='<option value="'.$row['PName'].'"></option>';

        }
        return $data;
    }
//    function getcustomerlist()
//    {
//        $data="";
//        $auth = mysql_query("Select CustId,FName,LName from customer where cust_display_or_not like 'YES'");
//        while($row=mysql_fetch_array($auth))
//        {
//            $data.="<option value='".$row['CustId']."'>".$row['FName']."  ".$row['LName']."</option>";
//        }
//        return $data;
//    }

    function getcustomerlist()
    {
        $data="";
        $auth = mysql_query("Select CustId,FName,LName from customer where cust_display_or_not like 'YES'");
        while($row=mysql_fetch_array($auth))
        {
//            value='".$row['CustId']."'
            $data.="<option>".$row['FName']."  ".$row['LName']."</option>";
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

    function getcustomerlistcheckbox()
    {
        $data="";
        $cus="";
        $auth = mysql_query("Select * from customer where cust_display_or_not like 'YES' order by CustId ASC");
        while($row=mysql_fetch_array($auth))
        {
//            $data.="<div class='mdl-cell mdl-cell--3-col'><label class='mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect' for='id".$row['CustId']."'><input type='checkbox' id='id".$row['CustId']."' class='mdl-checkbox__input' value='".$row['CustId']."' name='getcustlistchk'><span class='mdl-checkbox__label'>".$row['FName']."  ".$row['LName']."</span></label></div>";
            $data.="<div class='mdl-cell mdl-cell--4-col'><input type='checkbox' id='id".$row['CustId']."'  value='".$row['CustId']."' name='getcustlistchk'><label for='id".$row['CustId']."'><span class='mdl-checkbox__label'>".$row['FName']."  ".$row['LName']."  (".$row['Mobile'].") "."</span></label></div>";
            $cus=$row['CustId'];
        }
        $data.="<input type='hidden' name='clearcheck' value='$cus' id='clearchkid'>";
        return $data;
    }
    function invoiceserialnostarting()
    {
        $query=mysql_query("select InvoiceNo from invoices");
        $row1=mysql_fetch_array($query);
        $invno=$row1['InvoiceNo'];
        if($invno=="")
        {
            $ssno=mysql_query("select * from allserialnostarting");
            $row2=mysql_fetch_array($ssno);
            $serno=$row2['Invoices'];

        }
        else
        {
            $alinno=mysql_query("select InvoiceNo from invoices order by InvoiceNo desc");
            $row3=mysql_fetch_array($alinno);
            $serno=$row3['InvoiceNo'];
            $serno++;
        }
         return $serno;
    }

    /*sun*/
    function custname($custid)
    {
        $query=mysql_query("select FName,LName from customer where CustId=$custid and cust_display_or_not like 'YES'");
        $row=mysql_fetch_array($query);
        $custname=$row['FName']." ".$row["LName"];
        return $custname;

    }
     /*sun*/
    function employeename($empid)
    {
         $query=mysql_query("select EmpName from employee where EmpId=$empid and emp_display_or_not like 'YES'");
        $row=mysql_fetch_array($query);
        $empname=$row['EmpName'];
        return $empname;
    }

    function employeelist()
    {
        $data="";
        $auth = mysql_query("Select EmpId,EmpName from employee where emp_display_or_not like 'YES'");
        while($row=mysql_fetch_array($auth))
        {
//            $data.="<option value='".$row['EmpId']."'>".$row['EmpName']."</option>";
            $data.='<option value="'.$row['EmpId'].'">'.$row['EmpName'].'</option>';
        }
        return $data;
    }

     /*sun*/
    function  getinvoiceid($invoiceno)
    {
        $invid=mysql_query("select InvId from invoices where InvoiceNo='$invoiceno' and invoice_del_yes_no='YES'");
        $row=mysql_fetch_array($invid);
        $inid=$row['InvId'];
        return $inid;
    }
 /*sun*/


    function billpurchaseserialnostarting()
    {
        $query=mysql_query("select BillNo from purchasebills");
        $row1=mysql_fetch_array($query);
        $billno=$row1['BillNo'];
        if($billno=="")
        {
            $ssno=mysql_query("select * from allserialnostarting");
            $row2=mysql_fetch_array($ssno);
            $serno=$row2['PurchaseBill'];
        }
        else
        {
            $alinno=mysql_query("select BillNo from purchasebills order by BillNo desc");
            $row3=mysql_fetch_array($alinno);
            $serno=$row3['BillNo'];
            $serno++;
        }
         return $serno;
    }
    function vendname($vendid)
    {
        $query=mysql_query("select VFName,VLName from vendor where VId=$vendid");
        $row=mysql_fetch_array($query);
        $vendname=$row['VFName']." ".$row["VLName"];
        return $vendname;
    }

    function getvendmobno($vendid)
    {
        $query=mysql_query("select VMobile from vendor where VId=$vendid");
        $row=mysql_fetch_array($query);
        $vendmobno=$row['VMobile'];
        return $vendmobno;
    }

    function  getpurchasebillid($purchasebillno)
    {
        $purchaseid=mysql_query("select PBId from purchasebills where BillNo='$purchasebillno' and purchase_del_yes_no='YES'");
        $row=mysql_fetch_array($purchaseid);
        $purid=$row['PBId'];
        return $purid;
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
    function getbillingstatus($billno)
    {
        $query=mysql_query("select BillingStatus from purchasebills where BillNo=$billno");
        $row=mysql_fetch_array($query);
        $billstatus=$row["BillingStatus"];
        if($billstatus==0)
        {
            $que=mysql_query("select PaymentStatus from paymentstatus where PSId=$billstatus");
            $sta=mysql_fetch_array($que);
            $billstatus=$sta["PaymentStatus"];
            return $billstatus;
        }
        if($billstatus==1)
        {
            $que=mysql_query("select PaymentStatus from paymentstatus where PSId=$billstatus");
            $sta=mysql_fetch_array($que);
            $billstatus=$sta["PaymentStatus"];
            return $billstatus;
        }
        if($billstatus==2)
        {
            $que=mysql_query("select PaymentStatus from paymentstatus where PSId=$billstatus");
            $sta=mysql_fetch_array($que);
            $billstatus=$sta["PaymentStatus"];
            return $billstatus;
        }
    }
    function getemployeename($empid)
    {
        $query=mysql_query("select EmpName from employee where EmpId=$empid");
        $row=mysql_fetch_array($query);
        $empname=$row['EmpName'];
        return $empname;
    }


    /*****************************SUNIL************************************************/


function getInvRemainingAmmountForupdate($value)
{
  $obj=new maindbfunctions();
  $obj->connect();
  $query="SELECT PaidAmount FROM  `paymenthistory` WHERE  `InvoiceNo` =$value";
  $paidamm=mysql_query($query);
  $row=mysql_fetch_array($paidamm);
  $paidamount=$row['PaidAmount'];
  return $paidamount;
}

function getRemainingAmmountForupdate($value)
{
  $obj=new maindbfunctions();
  $obj->connect();
  $query="SELECT PaidAmount FROM  `vendorpaymenthistory` WHERE  `Billno` =$value";
  $paidamm=mysql_query($query);
  $row=mysql_fetch_array($paidamm);
  $paidamount=$row['PaidAmount'];
  return $paidamount;
}

     /*sun*/
    function updatepurchasebill($tablename,$custid,$invoicedate,$duedate,$subtotal,$discount,$discounttype,$total,$curdate,$curtime,$invoiceno)
    {
      $obj=new maindbfunctions();
      $obj->connect();
      $paidamm=$obj->getRemainingAmmountForupdate($invoiceno);
      if($paidamm=="")
      {
      $remaining=$total;
    }else {
      $remaining=$paidamm;
    }
      $query=mysql_query("UPDATE `$tablename` SET `Vid`='$custid',`BillDate`='$invoicedate',`DueDate`='$duedate',`SubTotal`='$subtotal',`Discount`='$discount',`Disc_Type`='$discounttype',`Total`='$total',`CurrDateTime`='$curdate $curtime',`RemainingAmount`=$remaining WHERE `BillNo` = $invoiceno");
      if($query)
      {
        $ans="yes";
      }
      else {
        $ans="no";
      }
      return $ans;
    }
     /*sun*/


     function updateinvoice($tablename,$custid,$invoicedate,$duedate,$photo,$subtotal,$discount,$discounttype,$total,$curdate,$curtime,$invoiceno)
    {
      $obj=new maindbfunctions();
      $obj->connect();
      $paidamm=$obj->getInvRemainingAmmountForupdate($invoiceno);
    if($paidamm=="")
      {
      $remaining=$total;
    }else {
      $remaining=$paidamm;
    }
        $query=mysql_query("UPDATE `$tablename` SET `CustId`='$custid',`InvoiceDate`='$invoicedate',`DueDate`='$duedate',`InvPhoto`='$photo',`SubTotal`='$subtotal',`Discount`='$discount',`Disc_Type`='$discounttype',`TotalAmount`='$total',`CurrDateTime`='$curdate $curtime',`RemainingAmount`=$remaining WHERE `InvoiceNo` = $invoiceno");
      if($query)
      {
        $ans="yes";
      }
      else {
        $ans="no";
      }
      return $ans;
    }

    function updateinvoicedata($tablename,$productname,$pid,$quantity,$product_ammount,$discount,$curdate,$curtime,$total_ammount,$invdid,$productchangeprice)
    {
      $query=mysql_query("UPDATE `$tablename` SET `ProductName`='$productname',`ProductId`=$pid,`Quantity`=$quantity,`Amount`=$product_ammount,`Discount`=$discount,`CurrDateTime`='$curdate $curtime',`TotalAmount`=$total_ammount,`ChangeProPrice`=$productchangeprice WHERE `InvDataId`=$invdid");
      if($query)
      {
        $ans="yes";
      }
      else {
        $ans="no";
      }
      return $ans;
    }
     /*sun*/
    function updatepurchasebilldata($tablename,$productname,$pid,$quantity,$product_ammount,$discount,$curdate,$curtime,$total_ammount,$invidinvoice,$productchangeprice)
    {
      $query=mysql_query("UPDATE `$tablename` SET `ProductName`='$productname',`ProductId`=$pid,`Quantity`=$quantity,`Amount`=$product_ammount,`Discount`=$discount,`CurrDateTime`='$curdate $curtime',`Total`=$total_ammount,`ChangeProPrice`=$productchangeprice WHERE `PBDId`=$invidinvoice");
      if($query)
      {
        $ans="yes";
      }
      else {
        $ans="no";
      }
      return $ans;
    }
     /*sun*/
  function file_upload_function($file,$foldername)
{
$_FILES["'.$file.'"];
$errors= array();
$file_name = $_FILES["$file"]["name"];
$file_size =$_FILES["$file"]["size"];
$file_tmp =$_FILES["$file"]["tmp_name"];
$file_type=$_FILES["$file"]["type"];
//***********************************************************************
$target_dir = $foldername."/";
$target_file = $target_dir . basename($_FILES["$file"]["name"]).$file_name;
//***********************************************************************
$file_ext=strtolower(end(explode('.',$_FILES["$file"]["name"])));

$expensions= array("jpg","jpeg","png","PNG","JPEG","JPG");
if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPG or JPEG or PNG file.";
}
if ($_FILES["$file"]["size"] > 2097152) {
$errors[]='File size must be less than 2 MB';
}
// if($file_size > 2097152){
// echo "hhhiiiiiiiiiii";
// $errors[]='File size must be less than 2 MB';
// }
date_default_timezone_set("Asia/Kolkata");
$currdate=date('Y')."_".date('d')."_".date('m');
$currtime=date('H')."_".date('i')."_".date('s');
$f_name=$currdate."_".$currtime."_".$file_name;
if(empty($errors)==true)
{
if (move_uploaded_file($file_tmp,$target_dir.$f_name))
{
$errors[]=$f_name;
}
else
{
$errors[]="Sorry, there was an error uploading your file.";
}
}
return $errors[0];
}

    /*****************************SUNIL************************************************/

function getproductdataid($tablename,$col1,$val1,$col2,$val2)
{
    $q="SELECT * FROM  `$tablename` WHERE  `$col2` =$val2 AND  `$col1` =  '$val1'";
    $pbdid=mysql_query($q);
    $row=mysql_fetch_array($pbdid);
    $pbdid=$row['PBDId'];
    return $pbdid;
}
function getinvproductdataid($tablename,$col1,$val1,$col2,$val2)
{
    $q="SELECT * FROM  `$tablename` WHERE  `$col2` =$val2 AND  `$col1` =  '$val1'";
    $pbdid=mysql_query($q);
    $row=mysql_fetch_array($pbdid);
    $pbdid=$row['InvDataId'];
    return $pbdid;
}
function getorderproductdataid($tablename,$col1,$val1,$col2,$val2)
{
    $q="SELECT * FROM  `$tablename` WHERE  `$col2` =$val2 AND  `$col1` =  '$val1'";
    $odid=mysql_query($q);
    $row=mysql_fetch_array($odid);
    $odid=$row['OrderDataId'];
    return $odid;
}
function getinvempid($tablename,$col1,$val1,$col2,$val2)
{
    $q="SELECT * FROM  `$tablename` WHERE  `$col2` =$val2 AND  `$col1` =  '$val1'";
    $invempid=mysql_query($q);
    $row=mysql_fetch_array($invempid);
    $invempid=$row['InvEmpId'];
    return  $invempid;
}

   /*RC*******************************************/

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
     function getvendorcontact($vendid)
    {
        $query=mysql_query("select VMobile from vendor where VId=$vendid");
        $row=mysql_fetch_array($query);
        $vendcontact=$row['VMobile'];
        return $vendcontact;
    }
 function getcustmobno($custid)
    {
        $query=mysql_query("select Mobile from customer where CustId=$custid");
        $row=mysql_fetch_array($query);
        $mobno=$row["Mobile"];
        return $mobno;
    }
   function getempdashemployeename($mob)
    {
        $query=mysql_query("select EmpName from employee where MobileNo='".$mob."'");
        $row=mysql_fetch_array($query);
        $uname=$row["EmpName"];
        return $uname;
    }
    function getemployeeEmpID($mob)
    {
        $query=mysql_query("select EmpId from employee where MobileNo='".$mob."'");
        $row=mysql_fetch_array($query);
        $empid=$row["EmpId"];
        return $empid;
    }


   /*RC*******************************************/



    /**********************************Payment Total*********************/

    /*Vendor Payment*/

    function vendortotalpayment()
    {
        $query=mysql_query("select sum(Total) from purchasebills where purchase_del_yes_no='YES'");
        $row=mysql_fetch_array($query);
        $total=$row["sum(Total)"];
        if($total=="")
        {
            return 0;
        }
        else
        {
        return $total;
        }
    }
    function vendorpendingpayment()
    {
        $query=mysql_query("select sum(RemainingAmount) from purchasebills where purchase_del_yes_no='YES' and (BillingStatus='0' or BillingStatus='1')");
        $row=mysql_fetch_array($query);
        $total=$row["sum(RemainingAmount)"];
        if($total=="")
        {
            return 0;
        }
        else
        {
        return $total;
        }
    }
    function vendpaidpayment()
    {
        $query=mysql_query("select sum(Total),sum(RemainingAmount) from purchasebills where purchase_del_yes_no='YES'");
        $row=mysql_fetch_array($query);
        $total=$row["sum(Total)"];
        $remaining=$row["sum(RemainingAmount)"];
        $paid=$total-$remaining;
        if($paid=="")
        {
            return 0;
        }
        else
        {
            return $paid;
        }
    }


    /*Vendor Payment*/

    /**/

    /*Customer Payment*/

    function customertotalpayment()
    {
        $query=mysql_query("select sum(TotalAmount) from invoices where invoice_del_yes_no='YES'");
        $row=mysql_fetch_array($query);
        $total=$row["sum(TotalAmount)"];
        if($total=="")
        {
            return 0;
        }
        else
        {
        return $total;
        }
    }

    function customerpendingpayment()
    {
        $query=mysql_query("select sum(RemainingAmount) from invoices where invoice_del_yes_no='YES' and (InvoiceStatus='0' or InvoiceStatus='1')");
        $row=mysql_fetch_array($query);
        $total=$row["sum(RemainingAmount)"];
        if($total=="")
        {
            return 0;
        }
        else
        {
        return $total;
        }
    }
    function customerpaidpayment()
    {
        $query=mysql_query("select sum(TotalAmount),sum(RemainingAmount) from invoices where invoice_del_yes_no='YES'");
        $row=mysql_fetch_array($query);
        $total=$row["sum(TotalAmount)"];
        $remaining=$row["sum(RemainingAmount)"];
        $paid=$total-$remaining;
        if($paid=="")
        {
            return 0;
        }
        else
        {
            return $paid;
        }
    }

     function customertodayspayment()
    {
	  date_default_timezone_set('Asia/kolkata');
    	 $curdate=date('Y-m-d');
        $query=mysql_query("select sum(PaidAmount) from paymenthistory where PaymentDate='$curdate'");
        $row=mysql_fetch_array($query);
        $paidamount=$row["sum(PaidAmount)"];
        if($paidamount=="")
        {
            return 0;
        }
        else
        {
            return $paidamount;
        }
    }
     function vendortodayspayment()
    {
	date_default_timezone_set('Asia/kolkata');
    	 $curdate=date('Y-m-d');
        $query=mysql_query("select sum(PaidAmount) from vendorpaymenthistory where PaymentDate='$curdate'");
        $row=mysql_fetch_array($query);
        $paidamount=$row["sum(PaidAmount)"];
        if($paidamount=="")
        {
            return 0;
        }
        else
        {
            return $paidamount;
        }
    }


//    function reportprofitamount()
//    {
//        $query1=mysql_query("select sum(Total) from purchasebills where purchase_del_yes_no='YES'");
//        $row1=mysql_fetch_array($query1);
//        $total1=$row1["sum(Total)"];
//
//        $query=mysql_query("select sum(TotalAmount) from invoices where invoice_del_yes_no='YES'");
//        $row=mysql_fetch_array($query);
//        $total=$row["sum(TotalAmount)"];
//
//        $totalamount=$total-$total1;
//        return $totalamount;
//
//    }



    /*Customer Payment*/



    /*Photo name*/

    function getproductpic()
    {
        $query=mysql_query("select PPhoto from product");
        $row=mysql_fetch_array($query);
        $photoname=$row["PPhoto"];
        return $photoname;
    }

    /*Employee*/

//    function updateemployee($tablename,$empyesno,$inid)
//    {
//         $query=mysql_query("UPDATE `$tablename` SET `Assign_Emp`='$empyesno' WHERE `InvId`=$inid");
//    }

    /*Employee*/



//    function getstockproduct()
//    {
//
//         $query=mysql_query("select * FROM report_purchase");
//
//        while($row=mysql_fetch_array($query))
//        {
//            $productid=$row["ProductId"];
//            $quantitypur=$row["qupur"];
//
//            $query1=mysql_query("select * FROM report_invoice where ProductId='$productid'");
//            $row1=mysql_fetch_array($query1);
//            $quantityinv=$row1["quinv"];
//
//             if($quantityinv=="")
//                        {
//                            $quantityinv=0;
//                        }
//
//             $availabelstock=$quantitypur-$quantityinv;
//            if($availabelstock<=10)
//                        {
//                            $productname.=$row["ProductName"]."<br>";
//
//                        }
//        }
//        return $productname;
//    }

    function customercount()
    {
        $query=mysql_query("select count(*) as cou from customer where cust_display_or_not='YES'");
        $row=mysql_fetch_array($query);
        $custcount=$row["cou"];
        return $custcount;
    }

     function productcount()
    {
        $query=mysql_query("select count(*) as cou from product where pro_display_or_not='YES'");
        $row=mysql_fetch_array($query);
        $procount=$row["cou"];
        return $procount;
    }

     function vendorcount()
    {
        $query=mysql_query("select count(*) as cou from vendor where ven_display_or_not='YES'");
        $row=mysql_fetch_array($query);
        $vencount=$row["cou"];
        return $vencount;
    }

    function employeecount()
    {
        $query=mysql_query("select count(*) as cou from employee where emp_display_or_not='YES'");
        $row=mysql_fetch_array($query);
        $empcount=$row["cou"];
        return $empcount;
    }

     function ordercount()
    {
        $query=mysql_query("select count(*) as cou from orders where order_del_yes_no='YES'");
        $row=mysql_fetch_array($query);
        $ordercount=$row["cou"];
        return $ordercount;
    }

      function assignemployeecount()
    {
        $query=mysql_query("select count(*) as cou from invoices where invoice_del_yes_no='YES'");
        $row=mysql_fetch_array($query);
        $assignempcount=$row["cou"];
        return $assignempcount;
    }

    function invoicecount()
    {
        $query=mysql_query("select count(*) as cou from invoices where invoice_del_yes_no='YES'");
        $row=mysql_fetch_array($query);
        $invoicecount=$row["cou"];
        return $invoicecount;
    }
     function purchasebillcount()
    {
        $query=mysql_query("select count(*) as cou from purchasebills where purchase_del_yes_no='YES'");
        $row=mysql_fetch_array($query);
        $purchasecount=$row["cou"];
        return $purchasecount;
    }
//    function customerpaymentcount()
//    {
//        $query=mysql_query("select count(*) as cou from invoice_table_data where invoice_del_yes_no='YES'");
//        $row=mysql_fetch_array($query);
//        $custpaymentcount=$row["cou"];
//        return $custpaymentcount;
//    }
//
//    function vendorpaymentcount()
//    {
//        $query=mysql_query("select count(*) as cou from purchase_table_data where purchase_del_yes_no='YES'");
//        $row=mysql_fetch_array($query);
//        $venpaymentcount=$row["cou"];
//        return $venpaymentcount;
//    }
      function product_present_in_purchaseBill_or_not($tablename,$col1,$val1,$col2,$val2)
      {
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$col1."='".$val1."' and ".$col2."='".$val2."'");
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

        function product_present_in_invoice_or_not($tablename,$col1,$val1,$col2,$val2)
      {
        $count=0;
        $query=mysql_query("select count(*) as cou from ".$tablename." where ".$col1."='".$val1."' and ".$col2."='".$val2."'");
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



}
?>
