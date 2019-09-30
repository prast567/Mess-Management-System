<html>
<link rel="stylesheet" href="generate.css">
<body>
<div class="background"></div>
</body>
</html>
<?php
include "header.php";
include 'dbconnect.php';


if(isset($_POST['extra']))
{

$extra = mysqli_real_escape_string($link, $_POST['extra']);
$query = "UPDATE billfactors  SET extra='$extra' where id=1";
mysqli_query($link,$query);
// echo 'done';
}



?>

<HTML>
<head>
<title>Total Milk Amount</title>

</head>
<body>

<form action="openstock.php" method="post">

<font id="establishment" color="white">Total Milk Amount</font><br><br>
<input type="number" min="0" name="milk" required><br><br>
<input id="submit" type="submit" name="submit" value="Submit">

</form>

</body>
</HTML>
