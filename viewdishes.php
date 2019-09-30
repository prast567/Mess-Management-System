<!doctype html>
<html lang="en">
<link rel="stylesheet" href="viewdishes.css">
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

      $query = "select * from countfinal";
      $sql = mysql_query($query);
      if((mysql_num_rows($sql)==0))
      {
        echo"<h2>No data Found</h2>";
      }
      else {
      while($row= mysql_fetch_array($sql))
      {
        echo"<table border='3'>";
        echo "<tr bgcolor='#D0D3D4'><th>DAY<td>".$row[0]."</td></th></tr>";
        echo "<tr bgcolor='#979A9A' ><th>BREAKFAST<td>".$row[1]."</td></th></tr>";
        echo "<tr bgcolor='#D0D3D4'><th>VEG LUNCH<td>".$row[2]."</td></th></tr>";
        echo "<tr bgcolor='#979A9A'><th>VEG LUNCH + EGG<td>".$row[3]."</td></th></tr>";
        echo "<tr bgcolor='#D0D3D4'><th>VEG LUNCH + FISH<td>".$row[4]."</td></th></tr>";
        echo "<tr bgcolor='#979A9A'><th>VEG LUNCH + CHICKEN<td>".$row[5]."</td></th></tr>";
        echo "<tr bgcolor='#D0D3D4'><th>NON VEG LUNCH<td>".$row[6]."</td></th></tr>";
        echo "<tr bgcolor='#979A9A'><th>NON VEG LUNCH - EGG<td>".$row[7]."</td></th></tr>";
        echo "<tr bgcolor='#D0D3D4'><th>NON VEG LUNCH - FISH<td>".$row[8]."</td></th></tr>";
        echo "<tr bgcolor='#979A9A'><th>NON VEG LUNCH - CHICKEN<td>".$row[9]."</td></th></tr>";
        echo "<tr bgcolor='#D0D3D4'><th>TEA<td>".$row[10]."</td></th></tr>";
        echo "<tr bgcolor='#979A9A'><th>TEA + SNACKS<td>".$row[11]."</td></th></tr>";
        echo "<tr bgcolor='#D0D3D4'><th>VEG DINNER<td>".$row[12]."</td></th></tr>";
        echo "<tr bgcolor='#979A9A'><th>VEG DINNER + EGG<td>".$row[13]."</td></th></tr>";
        echo "<tr bgcolor='#D0D3D4'><th>VEG DINNER + FISH<td>".$row[14]."</td></th></tr>";
        echo "<tr bgcolor='#979A9A'><th>VEG DINNER + CHICKEN<td>".$row[15]."</td></th></tr>";
        echo "<tr bgcolor='#D0D3D4'><th>NON VEG DINNER<td>".$row[16]."</td></th></tr>";
        echo "<tr bgcolor='#979A9A'><th>NON VEG DINNER - EGG<td>".$row[17]."</td></th></tr>";
        echo "<tr bgcolor='#D0D3D4'><th>NON VEG DINNER - FISH<td>".$row[18]."</td></th></tr>";
        echo "<tr bgcolor='#979A9A'><th>NON VEG DINNER - CHICKEN<td>".$row[19]."</td></th></tr>";



      }
      echo "</table>";
    }

    if(!mysql_query($query))
    {
      echo"<h2>Error</h2>";
    }



?>
