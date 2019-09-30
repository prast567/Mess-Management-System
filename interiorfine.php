<!doctype html>
<html lang="en">
  <link rel="stylesheet" href="interiorfine.css">


<body>

  <div class="background"></div>
  <strong>  <a href="optionusers.php">Home/</a><a href="interiorfine.php">Edit/ViewFine/</a></strong>

    <p><strong></strong</p>
  <h1 align="center"><u>EDIT/VIEW FINE</u></h1>
  <section id="sec">

    <article>
       <button class="button" id="editfine" onclick="funceditfine()" type="button">EDIT FINE</button>
    </article>
    <article>
       <button class="button" id="viewfine" onclick="funcviewfine()" type="button">VIEW FINE</button>
    </article>
  </section>
</body>
<script>
function funceditfine()
{
   window.open("editfine.php","_self");
}
function funcviewfine()
{
   window.open("fine.php","_self");
}
</script>
  </html>
  <?php
  include "header.php";
  mysql_connect("localhost","root","")or die("OOps Unable to connect to the database");
  mysql_select_db("hostel") or die("No Database Found");

?>
