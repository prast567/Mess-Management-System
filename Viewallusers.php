<!doctype html>
<html lang="en">
<link rel="stylesheet" href="Viewallusers.css">
<body>
  <div class="background"></div>
  <strong>  <a href="optionusers.php">Home/</a><a href="interioruser.php">Users/</a><a href="Viewallusers.php">ViewAllUsers/</a></strong>
  <p><strong></strong</p>
  </html>
  <?php
  include "header.php";
  include"dbconnect2.php";
  $query = "select ID,NAME,DEPT,ROOM_NO,I_CARD_NO,YEAR,CAUTION_DEPOSIT from users";
  $q = mysql_query($query);
  $k=0;
  echo "<br><br><table id='table' border='4'><tr bgcolor='#D0D3D4'><th><h3>ID's</h3></th><th><h3>NAME</h3></th><th><h3>DEPT</h3></th><th><h3>ROOM_NO</h3></th><th><h3>I_CARD_NO</h3></th><th><h3>YEAR</h3></th><th><h3>CAUTION_DEPOSIT</h3></th></tr>";
  while($row=mysql_fetch_array($q))
  {
    if($k%2==0)
    {
    echo "<tr bgcolor='#979A9A'>";
    echo "<td><p id='row'>" . $row['ID'] . "</p></td>";
    echo "<td><p id='row'>" . $row['NAME'] . "</p></td>";
    echo "<td><p id='row'>" . $row['DEPT'] . "</p></td>";
    echo "<td><p id='row'>" . $row['ROOM_NO'] . "</p></td>";
    echo "<td><p id='row'>" . $row['I_CARD_NO'] . "</p></td>";
    echo "<td><p id='row'>" . $row['YEAR'] . "</p></td>";
    echo "<td><p id='row'>" . $row['CAUTION_DEPOSIT'] . "</p></td>";
   
    echo "</tr>";
    ++$k;
  }
  else {
    echo "<tr bgcolor='#D0D3D4'>";
    echo "<td><p id='row'>" . $row['ID'] . "</p></td>";
    echo "<td><p id='row'>" . $row['NAME'] . "</p></td>";
    echo "<td><p id='row'>" . $row['DEPT'] . "</p></td>";
    echo "<td><p id='row'>" . $row['ROOM_NO'] . "</p></td>";
    echo "<td><p id='row'>" . $row['I_CARD_NO'] . "</p></td>";
    echo "<td><p id='row'>" . $row['YEAR'] . "</p></td>";
    echo "<td><p id='row'>" . $row['CAUTION_DEPOSIT'] . "</p></td>";
    echo "</tr>";
    ++$k;
  }
  }
