<!doctype html>
<html lang="en">
  <link rel="stylesheet" href="insidecoupon.css">


<body>

  <div class="background"></div>
  <strong>  <a href="optioncomm.php">Home/</a><a href="insidecoupon.php">Coupon/</a></strong>
  <h1 align="center"><u><b>COUPON</b></u></h1>
  <section id="sec">

      <article>
         <button class="button" id="sa" onclick="setamt()" type="button">SET AMOUNT</button>
      </article>
      <article>
         <button class="button" id="ac" onclick="setcoupon1()" type="button">ENTER NORMAL COUPON</button>
      </article>
      <article>
         <button class="button"  id="lc" onclick="setcoupon2()" type="button">ENTER LATE COUPON</button>
      </article>
      <article>
         <button class="button" id="vc" onclick="viewcoupon()" type="button">VIEW COUPON</button>
      </article>

  </section>
</body>
<script>
function setamt()
{
  window.open("valueset.php","_self");
}
function setcoupon1()
{
  window.open("coupon2.php","_self");
}
function setcoupon2()
{
  window.open("latecoupon.php","_self");
}
function viewcoupon()
{
  window.open("viewcoupons.php","_self");
}
</script>
  </html>
  <?php
  include "header.php";
  include"dbconnect.php";
?>
