<?php
include"header.php";
  include"dbconnect.php";
$query1 = "select * from purchases";
$q1 = mysql_query($query1);
$flag=1;
while($r=mysql_fetch_array($q1))
{
  $dt = $r['Date'];
  $exp = $r['Expenditure_Paid'];
  $expu = $r['Expenditure_Unpaid'];
  $esp = $r['Establishment_Paid'];
  $espu = $r['Establishment_Unpaid'];
  $query2 = "insert into dummypurchases values('$dt','$exp','$expu','$esp','$espu')";
  $r=mysql_query($query2);
  if($r)
  $flag=1;
  else
  {
    $flag=0;
  }


}
if($flag==1)
{
  echo"Value Inserted Successfully";

}
else {
  echo"Not Inserted";
}


?>
