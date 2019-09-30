<?php include 'dbconnect.php'; ?>

<HTML>
  <link rel="stylesheet" href="coupon2.css">
<head>
<title>Late Coupon</title>

</head>
<body>
<div class="background"></div>
<form action="latecoupon.php" method="post">

Name<br>
<input type="text" name="name">
<br><br>


Room Number<br>
<input type="text" name="room">
<br><br>


MENU<br>
<select name="menu">
  <option value="VEG">Veg</option>
  <option value="VE">Veg+Egg</option>
  <option value="VF">Veg+Fish</option>
  <option value="VC">Veg+Chicken</option>
  <option value="NV">Non.Veg</option>
  <option value="NVE">Non.Veg-Egg</option>
  <option value="NVF">Non.Veg-Fish</option>
  <option value="NVC">Non.Veg-Chicken</option>
</select> <br> <br>

Breakfast
<input type="checkbox" name="breakfast" value="1">

<br>

Lunch
<input type="checkbox" name="lunch" value="1">

<br>

Tea
<input type="checkbox" name="tea" value="1">

<br>

Tea+Snacks
<input type="checkbox" name="tea+snacks" value="1">

<br>

Snacks
<input type="checkbox" name="snacks" value="1">

<br>

Dinner
<input type="checkbox" name="dinner" value="1">

<br>



<input id="submit" type="submit" name="submit" value="submit">
</form>

</body>
</HTML>


<?php
include"header.php";
include"dbconnect.php";
 $breakfast=0; $lunch=0; $tea=0; $teasnacks=0; $snacks=0; $dinner=0;
 $successmsg="COUPON ADDED SUCCESSFULLY!";
 $errormsg="ERROR!";

 if(isset($_POST['submit']))
 {
  $name = mysqli_real_escape_string($link, $_POST['name']);
  $room = mysqli_real_escape_string($link, $_POST['room']);
  $menu= mysqli_real_escape_string($link, $_POST['menu']);
  if(isset($_POST['breakfast']))
  {
   $breakfast=mysqli_real_escape_string($link, $_POST['breakfast']);
  }
  if(isset($_POST['lunch']))
  {
   $lunch=mysqli_real_escape_string($link, $_POST['lunch']);
  }
  if(isset($_POST['tea']))
  {
   $tea=mysqli_real_escape_string($link, $_POST['tea']);
  }
  if(isset($_POST['tea+snacks']))
  {
   $teasnacks=mysqli_real_escape_string($link, $_POST['tea+snacks']);
  }
  if(isset($_POST['snacks']))
  {
   $snacks=mysqli_real_escape_string($link, $_POST['snacks']);
  }
  if(isset($_POST['dinner']))
  {
   $dinner=mysqli_real_escape_string($link, $_POST['dinner']);
  }
  $query="SELECT COUNT(id) as count FROM latecoupon";
  $result=mysqli_query($link,$query);
  while ($row = mysqli_fetch_assoc($result))
  {
   $coupon=$row['count'];
  }
  $id=$coupon+1;
  if($teasnacks==1)
  {
    $tea=0;
    $snacks=0;
  }

  echo $id;
  echo $name;
  echo $breakfast;
  echo $snacks;

 $query="INSERT into latecoupon (id,Name,room,Menu,Breakfast,Lunch,Tea,TeaSnacks,Snacks,Dinner) VALUES ('$id','$name','$room','$menu','$breakfast','$lunch','$tea','$teasnacks','$snacks','$dinner')";
 if(mysqli_query($link,$query))
 {
  echo ' <script type="text/javascript">
             alert("'.$successmsg.'");
            </script>
          ';
 }
 else {
    echo ' <script type="text/javascript">
             alert("'.$errormsg.'");
            </script>
          ';
  }


 }



 ?>
