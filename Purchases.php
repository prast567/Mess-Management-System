
<!doctype html>

<html lang="en">

<head>
  <link rel="stylesheet" href="Purchases.css">

</head>
<body>


<div class="background"></div>
<strong>  <a href="optioncomm.php">Home/</a><a href="Purchases.php">Purchases/</a></strong>
<p><strong></strong</p>
<h2 id="heading" align="center">PURCHASES</h2>
<!-- <nav id = "navi">
    <ul  style="list-style-type:circle">
      <li id="home"> Home></li>
    </u1>
    <u1>
    <li id="settings">#Settings</li>
</u1>
  </nav> -->

  <section id="sec">
<table >
  <tr>
    <article>
      <td> <button class="button" id="add" onclick="funcadd()" type="button">ADD PURCHASES</button></td>
    </article>
    <article>
       <td><button class="button" id="edit" onclick="funcedit()" type="button">EDIT PURCHASES</button></td>
    </article>
    <article>
      <td> <button class="button2" id="remove" onclick="funcrem()" type="button">REMOVE PURCHASES</button></td>
    </article>
    <article>
      <td> <button class="button2" id="view" onclick="funcview()" type="button">VIEW PURCHASES</button></td>
    </article>
  </tr>
</table>
    <!-- <article>
       <button id="view" onclick="funcaddu()" type="button"><a>ADD USERS</a></button>
    </article>
    <article>
       <button id="view" onclick="funcdelu()" type="button"><a>DELETE USERS</a></button>
    </article>
    <article>
       <button id="view" onclick="funcviewu()" type="button"><a>VIEW USERS</a></button>
    </article> -->
  </section>
</body>
  <script>
  function funcadd()
  {
    window.open("Addp.php");
  }
  function funcedit()
  {
    window.open("Editp.php");
  }
  function funcrem()
  {
    window.open("Removep.php");
  }
  function funcview()
  {
    window.open("Viewp.php");
  }
  function funcaddu()
  {
    window.open("Addremusers.php")
  }
  function funcdelu()
  {
    window.open("Adddel.php")
  }
  function funcviewu()
  {
    window.open("Viewusers.php")
  }
  </script>
</html>
<?php
include"dbconnect.php";
include "header.php";
// session_start();
// if(!isset($_SESSION['fromMain'])){
//    //send them back
//    header("Location: Adminlogin.php");
// }
// else{
//    //reset the variable
//    session_destroy();
//    session_start();
//    $_SESSION['fromPurchases'] = "true";
//    //header("Location: Purchases.php");
// }
?>
