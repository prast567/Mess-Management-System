<html>
<link rel="stylesheet" href="generate.css">
<body>
<div class="background"></div>
</body>
</html>
<?php
include "header.php";
include 'dbconnect.php';

$coupon = mysqli_real_escape_string($link, $_POST['coupon']);
$query = "UPDATE billfactors  SET coupon='$coupon' where id=1";
mysqli_query($link,$query);

// echo 'done';

?>

<HTML>
<head>
<title>Total Extra</title>

</head>
<body>

<form action="milkamount.php" method="post">

<font id="establishment" color="white">Total Extra</font><br><br>
<input type="number" min="0" name="extra" required><br><br>
<input id="submit" type="submit" name="submit" value="Submit">

</form>

</body>
</HTML>
