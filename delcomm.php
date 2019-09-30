<!doctype html>
<html lang="en">
<link rel="stylesheet" href="dues.css">
<body>
  <div class="background"></div>
  </html>
  <?php
  include "header.php";
  include"dbconnect.php";
 $query = "delete from commpass where BOOLEAN='0'";

  if(mysql_query($query))
  {
    echo"<h2><br><br>&nbsp&nbsp&nbspPrevious Committee Has Been Successfully Deleted!!!!</h2>";
  }
  else {
    echo"<h2><br><br>&nbsp&nbsp&nbspNo Previous Committee exists</h2>";
  }
  ?>
