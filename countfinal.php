<?php
include"header.php";
  mysql_connect("localhost","root","")or die("OOps Unable to connect to the database");
  mysql_select_db("hostel") or die("No Database Found");

  $d = date('Y-m-d', strtotime('+0 day'));
  //echo"$d";
  $sepparator = '-';
  $parts = explode($sepparator, $d);
  $currdate = date("l", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));
  echo"<br>$currdate";
  $query="select * from count where DAYS='$currdate'";
  $query1="select menu from messjoin";
  $qq = mysql_query($query);
  $q1 = mysql_query($query1);
  $lv = 0;
  $lve = 0;
  $lvf = 0;
  $lvc = 0;
  $lnv = 0;
  $lnve = 0;
  $lnvf = 0;
  $lnvc = 0;
  $dv = 0;
  $dve = 0;
  $dvf = 0;
  $dvc = 0;
  $dnv = 0;
  $dnve = 0;
  $dnvf = 0;
  $dnvc = 0;
  $break = 0;
  $tea = 0;
  $tea_snacks = 0;
  while($r=mysql_fetch_array($qq))
  {
    $lv=$r['LU_V'];
    $lve=$r['LU_VE'];
    $lvf=$r['LU_VF'];
    $lvc=$r['LU_VC'];
    $lnv=$r['LU_NV'];
    $lnve=$r['LU_NVE'];
    $lnvf=$r['LU_NVF'];
    $lnvc=$r['LU_NVC'];
    $dv=$r['DI_V'];
    $dve=$r['DI_VE'];
    $dvf=$r['DI_VF'];
    $dvc=$r['DI_VC'];
    $dnv=$r['DI_NV'];
    $dnve=$r['DI_NVE'];
    $dnvf=$r['DI_NVF'];
    $dnvc=$r['DI_NVC'];
    $break = $r['BREAKFAST'];
    $tea = $r['TEA'];
    $tea_snacks = $r['TEA_SNACKS'];
  }

  while($r1=mysql_fetch_array($q1))
  {
    if($r1[0]=="Veg")
    {
      ++$break;
      ++$lv;
      ++$dv;
      $tea_snacks;
    }
    else if($r1[0]=="Veg+Egg")
    {
      ++$break;
      ++$lve;
      ++$dve;
      $tea_snacks;
    }
    else if($r1[0]=="Veg+Fish")
    {
      ++$break;

      ++$lvf;
      ++$dvf;
      $tea_snacks;
    }
    else if($r1[0]=="Veg+Chicken")
    {
      ++$break;
      ++$lvc;
      ++$dvc;
      $tea_snacks;
    }
    else if($r1[0]=="NonVeg")
    {
      ++$break;
      ++$lnv;
      ++$dnv;
      $tea_snacks;
    }
    else if($r1[0]=="NonVeg-Egg")
    {
      ++$break;
      ++$lnve;
      ++$dnve;
      $tea_snacks;
    }
    else if($r1[0]=="NonVeg-Fish")
    {
      ++$break;
      ++$lnvf;
      ++$dnvf;
      $tea_snacks;
    }
    else if($r1[0]=="NonVeg-Chicken")
    {
      ++$break;
      ++$lnvc;
      ++$dnvc;
      $tea_snacks;
    }
  }
$query3 = "delete from countfinal";
$query4 = "insert into countfinal values ('$currdate','$break','$lv','$lve',
'$lvf','$lvc','$lnv','$lnve','$lnvf','$lnvc',
'$tea','$tea_snacks','$dv','$dve','$dvf',
'$dvc','$dnv','$dnve','$dnvf','$dnvc')";
$q3 = mysql_query($query3);
$q4 = mysql_query($query4);
if($q3 and $q4)
echo"Value Entered Successfully";
else
echo"Value Not Entered";


?>
