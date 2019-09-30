<!doctype html>
<html lang="en">
  <link rel="stylesheet" href="interiordues.css">


<body>

  <div class="background"></div>
  <strong>  <a href="optionusers.php">Home/</a><a href="interiordues.php">DuesDetail/</a></strong>

    <p><strong></strong</p>
  <h1 align="center"><u>DUES</u></h1>
  <section id="sec">

    <article>
       <button class="button" id="viewdues" onclick="funcviewdues()" type="button">VIEW DUES</button>
    </article>
    <article>
       <button class="button" id="editdues" onclick="funceditdues()" type="button">EDIT DUES</button>
    </article>
  </section>
</body>
<script>
function funcviewdues()
{
   window.open("dues.php","_self");
}
function funceditdues()
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
