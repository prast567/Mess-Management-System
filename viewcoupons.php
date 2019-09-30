<!doctype html>
<html lang="en">
<link rel="stylesheet" href="viewcoupon.css">
<body>
  <div class="background"></div>
  </html>
  <?php
  include "header.php";
  include"dbconnect.php";
  //session_start();
  // if(!isset($_SESSION['fromPurchases'])){
  //    //send them back
  //    header("Location: Adminlogin.php");
  // }
      $query = "select * from coupon";
      $query1 = "select * from latecoupon";
      $sql = mysql_query($query);
      $sql1 = mysql_query($query1);


    if((mysql_num_rows($sql)==0))
    {
      echo"<br>";
      echo"<h2>No data Found in Late Join</h2>";
    }
    else
    {
  echo "<br><br><table id='nj' border='4'><tr><th><h3>NORMAL COUPONS's</h3></th><th><h3>NAME</h3></th><th><h3>ROOM NO.</h3></th><th><h3>MENU</h3></th>
  <th><h3>BREAKFAST</h3></th><th><h3>LUNCH</h3></th><th><h3>TEA</h3></th><th><h3>TEA+SNACKS</h3></th><th><h3>SNACKS</h3></th><th><h3>DINNER</h3></th></tr>";
while($row= mysql_fetch_array($sql))
{

  echo "<tr>";
  echo "<td><p id='row'>" . $row['id'] . "</p></td>";
  echo "<td><p id='row'>" . $row['Name'] . "</p></td>";
  echo "<td><p id='row'>" . $row['room'] . "</p></td>";
  echo "<td><p id='row'>" . $row['Menu'] . "</p></td>";
  echo "<td><p id='row'>" . $row['Breakfast'] . "</p></td>";
  echo "<td><p id='row'>" . $row['Lunch'] . "</p></td>";
  echo "<td><p id='row'>" . $row['Tea'] . "</p></td>";
  echo "<td><p id='row'>" . $row['TeaSnacks'] . "</p></td>";
  echo "<td><p id='row'>" . $row['Snacks'] . "</p></td>";
  echo "<td><p id='row'>" . $row['Dinner'] . "</p></td>";

  echo "</tr>";
}
echo "</table>";}
// echo"qwdqdeqd";
if((mysql_num_rows($sql1)==0))
{
  echo"<br>";
  echo"<h2>No data Found in Normal Join</h2>";
}
else {

// echo"sfvmek";
 echo "<br><br><table id='lj' border='4'><tr><th><h3>LATE COUPONS's</h3></th><th><h3>NAME</h3></th><th><h3>ROOM NO.</h3></th><th><h3>MENU</h3></th>
 <th><h3>BREAKFAST</h3></th><th><h3>LUNCH</h3></th><th><h3>TEA</h3></th><th><h3>TEA+SNACKS</h3></th><th><h3>SNACKS</h3></th><th><h3>DINNER</h3></th></tr>";
    while($ro= mysql_fetch_array($sql1))
    {

    echo "<tr>";
    echo "<td><p id='row'>" . $ro['id'] . "</p></td>";
    echo "<td><p id='row'>" . $ro['Name'] . "</p></td>";
    echo "<td><p id='row'>" . $ro['room'] . "</p></td>";
    echo "<td><p id='row'>" . $ro['Menu'] . "</p></td>";
    echo "<td><p id='row'>" . $ro['Breakfast'] . "</p></td>";
    echo "<td><p id='row'>" . $ro['Lunch'] . "</p></td>";
    echo "<td><p id='row'>" . $ro['Tea'] . "</p></td>";
    echo "<td><p id='row'>" . $ro['TeaSnacks'] . "</p></td>";
    echo "<td><p id='row'>" . $ro['Snacks'] . "</p></td>";
    echo "<td><p id='row'>" . $ro['Dinner'] . "</p></td>";

    echo "</tr>";
    }
    echo "</table>";
}




?>
