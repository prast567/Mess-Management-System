<!doctype html>
<html lang="en">
<link rel="stylesheet" href="dues.css">
<body>
  <div class="background"></div>
  <strong>  <a href="optionusers.php">Home/</a><a href="interiordues.php">Dues/</a><a href="dues.php">DuesDetail/</a></strong>
  <p><strong></strong</p>
  </html>
  <?php
  include "header.php";
  mysql_connect("localhost","root","")or die("OOps Unable to connect to the database");
  mysql_select_db("hostel") or die("No Database Found");

  $query = "select ID,DUE from users";
  $q = mysql_query($query);
  $k=0;
  echo "<br><br><table id='table' border='4'><tr bgcolor='#D0D3D4'><th><h3>ID's</h3></th><th><h3>DUES</h3></th></tr>";
  while($row=mysql_fetch_array($q))
  {
    if($k%2==0)
    {
    echo "<tr bgcolor='#979A9A'>";
    echo "<td><p id='row'>" . $row['ID'] . "</p></td>";
    echo "<td><p id='row'>" . $row['DUE'] . "</p></td>";
    echo "</tr>";
    ++$k;
  }
  else {
    echo "<tr bgcolor='#D0D3D4'>";
    echo "<td><p id='row'>" . $row['ID'] . "</p></td>";
    echo "<td><p id='row'>" . $row['DUE'] . "</p></td>";
    echo "</tr>";
    ++$k;
  }
  }
