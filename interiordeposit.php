<!doctype html>
<html lang="en">
  <link rel="stylesheet" href="interiordeposit.css">


<body>

  <div class="background"></div>
  <strong>  <a href="optionusers.php">Home/</a><a href="interiodeposit.php">DepositDetails/</a></strong>

    <p><strong></strong</p>
  <h1 align="center"><u>USERS</u></h1>
  <section id="sec">

    <article>
       <button class="button" id="viewcaution" onclick="funcviewcaution()" type="button">VIEW CAUTION DEPOSITS</button>
    </article>
    <article>
       <button class="button" id="editcaution" onclick="funceditcaution()" type="button">EDIT CAUTION DEPOSITS</button>
    </article>
  </section>
</body>
<script>
unction funcviewcaution()
{
   window.open("viewcaution.php","_self");
}
function funceditcaution()
{
   window.open("#");
}
</script>
  </html>
  <?php
  include "header.php";
  mysql_connect("localhost","root","")or die("OOps Unable to connect to the database");
  mysql_select_db("hostel") or die("No Database Found");

?>
