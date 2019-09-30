
<!doctype html>

<html lang="en">

<head>
  <link rel="stylesheet" href="optioncomm.css">
</head>
<body>


<div class="background"></div>
<strong>  <a href="optioncomm.php">Home/</a>
  <p><strong></strong</p>
<h2 id="heading">OPTIONS</h2>
<!-- <nav id = "navi">
    <ul  style="list-style-type:circle">
      <li id="home"> Home></li>
    </u1>
    <u1>
    <li id="settings">#Settings</li>
</u1>
  </nav> -->

  <section id="sec">
<table>
    <tr><td><article>
       <button class="button1" id="pu" onclick="purchases()" type="button">PURCHASES</button>
    </article></td>
  <td>  <article>
       <button class="button2" id="mj" onclick="messjoin()" type="button">MESS JOIN</button>
    </article></td>
    <td><article>
       <button class="button3" id="mr" onclick="reduction()" type="button">MESS REDUCTION</button>
    </article></td>
  <td>  <article>
       <button class="button4" id="co" onclick="coupon()" type="button">COUPON</button>
    </article></td>
  <td><article>
       <button class="button5" id="mi" onclick="milk()" type="button">MILK</button>
    </article></td>

    <td><article>
       <button class="button6" id="vtd" onclick="totaldishes()" type="button">VIEW TOTAL NO. OF DISHES</button>
    </article></td>
    <td><article>
       <button class="button7" id="vd" onclick="dues()" type="button">VIEW DUES</button>
    </article></td>
    <td><article>
       <button class="button8" id="vcd" onclick="caution()" type="button">VIEW CAUTION DEPOSIT</button>
    </article></td>
  <!-- <td>  <article>
       <button class="button9" id="gb" onclick="genbill()" type="button">GENERATE BILL</button>
    </article></td></tr> -->
</table>
  </section>
</body>
  <script>
  function messjoin()
  {
    window.open("joinnview.php","_self");
  }
  function reduction()
  {
    window.open("rednview.php","_self");
  }
  function coupon()
  {
    window.open("insidecoupon.php","_self");
  }
  function purchases()
  {
    window.open("Purchases.php","_self");
  }
  function milk()
  {
    window.open("milk.php","_self");
  }
  function totaldishes()
  {
    window.open("viewdishes.php","_self");
  }
  function dues()
  {
    window.open("dues.php","_self");
  }
  function caution()
  {
    window.open("viewcaution.php","_self");
  }



  </script>
</html>
<?php
include "header.php";
include"dbconnect.php";
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
