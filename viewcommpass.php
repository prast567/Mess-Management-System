<!doctype html>
<html lang="en">
<link rel="stylesheet" href="dues.css">
<body>
  <div class="background"></div>
  <strong>  <a href="optionusers.php">Home/</a><a href="interiordepass.php">Password/</a><a href="viewcommpass.php">ViewMessCommitteePassword/</a></strong>
  <p><strong></strong</p>
  </html>
  <?php
  include "header.php";
  include"dbconnect.php";

 $query = "select * from commpass";
  $q = mysql_query($query);
  echo "<br><br><table id='table' border='4'><tr bgcolor='#D0D3D4'><th><h3>STATUS</h3></th><th><h3>USERNAME</h3></th><th><h3>PASSWORD</h3></th></tr>";
  $k = 0;
  while($row=mysql_fetch_array($q))
  {
    if($k%2==0)
    {

      // echo "<br><br><table id='table' border='4'><tr bgcolor='#D0D3D4'><th><h3>STATUS</h3></th><th><h3>USERNAME</h3></th><th><h3>PASSWORD</h3></th></tr>";
    echo "<tr bgcolor='#979A9A'>";
    if($row['BOOLEAN']=='1')
    echo "<td><p id='row'>" ."Present Month". "</p></td>";
    else {
      echo "<td><p id='row'>" ."Previous Month". "</p></td>";

    }
    echo "<td><p id='row'>" . $row['USERNAME'] . "</p></td>";
    echo "<td><p id='row'>" . $row['PASSWORD'] . "</p></td>";
    echo "</tr>";
    ++$k;
  }
  else {

    // echo "<br><br><table id='table' border='4'><tr bgcolor='#D0D3D4'><th><h3>STATUS</h3></th><th><h3>USERNAME</h3></th><th><h3>PASSWORD</h3></th></tr>";
    echo "<tr bgcolor='#D0D3D4'>";
    if($row['BOOLEAN']=='1')
    echo "<td><p id='row'>" ."Present Month". "</p></td>";
    else {
      echo "<td><p id='row'>" ."Previous Month". "</p></td>";
    }
    echo "<td><p id='row'>" . $row['USERNAME'] . "</p></td>";
    echo "<td><p id='row'>" . $row['PASSWORD'] . "</p></td>";
    echo "</tr>";
    ++$k;
  }
  }
