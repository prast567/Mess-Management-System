<!doctype html>
<html lang="en">
  <link rel="stylesheet" href="joinnview.css">


<body>

  <div class="background"></div>
  <strong>  <a href="optioncomm.php">Home/</a><a href="joinnview.php">MessJoin/</a></strong>

    <p><strong></strong</p>
  <h1 align="center"><u>MESS JOIN/VIEW</u></h1>
  <section id="sec">

      <article>
         <button class="button" id="nj" onclick="normaljoin()" type="button">NORMAL JOIN</button>
      </article>
      <article>
         <button class="button" id="lj" onclick="latejoin()" type="button">LATE JOIN</button>
      </article>
      <article>
         <button class="button" id="vj" onclick="viewjoin()" type="button">VIEW JOIN</button>
      </article>


  </section>
</body>
<script>
function normaljoin()
{
  window.open("join3.php","_self");
}
function latejoin()
{
  window.open("late_join.php","_self");
}
function viewjoin()
{
  window.open("viewjoin.php","_self");
}
</script>
  </html>
  <?php
  include "header.php";
  mysql_connect("localhost","root","")or die("OOps Unable to connect to the database");
  mysql_select_db("hostel") or die("No Database Found");

?>
