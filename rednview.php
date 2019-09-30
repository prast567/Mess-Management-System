<!doctype html>
<html lang="en">
  <link rel="stylesheet" href="joinnview.css">


<body>

  <div class="background"></div>
  <strong>  <a href="optioncomm.php">Home/</a><a href="rednview.php">MessReduction&View/</a></strong>
  <h1 align="center"><u>MESS REDUCTION/VIEW</u></h1>
  <section id="sec">

      <article>
         <button class="button" id="nj" onclick="newred()" type="button">NEW REDUCTION</button>
      </article>
      <article>
         <button class="button" id="vj" onclick="viewred()" type="button">VIEW REDUCTION</button>
      </article>


  </section>
</body>
<script>
function newred()
{
  window.open("reduction.php");
}
function viewred()
{
  window.open("viewred.php");
}
</script>
  </html>
  <?php
  include"dbconnect.php";
  include "header.php";
  mysql_connect("localhost","root","")or die("OOps Unable to connect to the database");
  mysql_select_db("hostel") or die("No Database Found");

?>
