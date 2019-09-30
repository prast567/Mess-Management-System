<?php
include"header.php";
  include"dbconnect.php";

$query1 = "select ID,effective from messjoin";
$query2 = "select ID, total from reduction";
$q1 = mysql_query($query1);
$q2 = mysql_query($query2);
$flag=1;
$idj = array();
$effj = array();
$idr = array();
$effr = array();
$i=0;
$j=0;
while($r=mysql_fetch_array($q1))
{
  $idj[$i]=$r['ID'];
  $effj[$i]=$r['effective'];
  ++$i;


}

while($r=mysql_fetch_array($q2))
{
  $idr[$j]=$r['ID'];
  $effr[$j]=$r['total'];
  ++$j;


}
$f=0;
if($i==0)
$f=1;
if($f==0)
{
$flag=0;
for($k=0; $k<$i; $k++)
{
  for($l=0; $l<$j; $l++)
  {
    if($idj[$k]==$idr[$l])
    {
      $d = $effj[$k]-$effr[$l];
      $query3 = "insert into dummyeffdays values ('$idj[$k]','$d')";
      mysql_query($query3);
      $flag=1;
      break;
    }
    else {
      $flag=0;
    }

  }
  if($flag==0)
  {
    $query4 = "insert into dummyeffdays values ('$idj[$k]','$effj[$k]')";
    mysql_query($query4);
  }

}
}

echo"Calculation Successfull";

?>
