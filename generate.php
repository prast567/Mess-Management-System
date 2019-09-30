<html>
<link rel="stylesheet" href="generate.css">
<body>
  <div class="background"></div>
</body>
</html>
<?php
include"header.php";
include 'dbconnect.php';

if(isset($_POST['milk30']))
{

$milk30 = mysqli_real_escape_string($link, $_POST['milk30']);
$query = "UPDATE billfactors  SET milk30='$milk30' where id=1";
mysqli_query($link,$query);
}

// echo 'done';

$query="SELECT SUM(EXPENDITURE_PAID) as total FROM dummypurchases";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['total'];
   $totalpaid=$row['total'];
}

// echo '<br>';

$query="SELECT SUM(EXPENDITURE_UNPAID) as total FROM dummypurchases";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['total'];
   $totalunpaid=$row['total'];
}

// echo $totalunpaid;

$query="SELECT coupon FROM billfactors where id=1";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['coupon'];
   $coupon=$row['coupon'];
}

$query="SELECT extra FROM billfactors where id=1";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['extra'];
   $extra=$row['extra'];
}


$query="SELECT milk FROM billfactors where id=1";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['milk'];
   $milk=$row['milk'];
}


$query="SELECT openstock FROM billfactors where id=1";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['openstock'];
   $openstock=$row['openstock'];
}


$query="SELECT closestock FROM billfactors where id=1";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['closestock'];
   $closestock=$row['closestock'];
}

$query="SELECT COUNT(id) as inmates FROM users";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['inmates'];
   $inmates=$row['inmates'];
}

$perday=(($totalpaid+$totalunpaid)-($coupon+$extra+$milk)+($openstock-$closestock))/($inmates);   //calculation of per day rate

$query="UPDATE billfactors set perday='$perday' where id=1";
mysqli_query($link,$query);



$query="SELECT milk15 FROM billfactors where id=1";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['milk15'];
   $milk15=$row['milk15'];
}


$query="SELECT milk30 FROM billfactors where id=1";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['milk30'];
   $milk30=$row['milk30'];
}

//establishment fee calculation


$query="SELECT SUM(ESTABLISHMENT_PAID) as total FROM dummypurchases";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['total'];
   $totalpaidestbl=$row['total'];
}

// echo '<br>';

$query="SELECT SUM(ESTABLISHMENT_UNPAID) as total FROM dummypurchases";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['total'];
   $totalunpaidestbl=$row['total'];
}


$query="SELECT establishment FROM billfactors where id=1";
$result=mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result))
{
  //  echo $row['establishment'];
   $estbl=$row['establishment'];
}

$totestbl=($totalpaidestbl+$totalunpaidestbl+$estbl)/($inmates);


//calculation of personal bill

$query="SELECT * from dummyeffdays";
$result=mysqli_query($link,$query);

while($row=mysqli_fetch_array($result))
{
 $id=$row[0];
 $amount=($row[1]*$perday)+($totestbl);
 $query2="SELECT * from milkfirsthalf";
 $result2=mysqli_query($link,$query2);


 while($row2=mysqli_fetch_array($result2))
 {
  if($row2[0]==$id)
  {
   $amount=$amount+$milk15;
   break;
  }
 }
 $query3="SELECT * from milksecondhalf";
 $result3=mysqli_query($link,$query3);


 while($row3=mysqli_fetch_array($result3))
 {
  if($row3[0]==$id)
  {
   $amount=$amount+$milk30;
   break;
  }
 }
 $query4="SELECT * from users";
 $result4=mysqli_query($link,$query4);
 while($row4=mysqli_fetch_array($result4))
 {
  if($row4[0]==$id)
  {
   $query5="UPDATE users set due=due+'$amount' where id='$id'";
   mysqli_query($link,$query5);
   break;
  }
 }


}
echo"<h2> <br><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBILL GENERATED SUCCESSFULLY. CLICK ON HOME BUTTON.</h2>";


?>
