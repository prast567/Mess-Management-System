<html>
<link rel="stylesheet" href="generate.css">
<body>
<div class="background"></div>
</body>
</html>
<?php
include"header.php";
include 'dbconnect.php';

if(isset($_POST['milk15']))
{

$milk15 = mysqli_real_escape_string($link, $_POST['milk15']);
$query = "UPDATE billfactors  SET milk15='$milk15' where id=1";
mysqli_query($link,$query);
}

// echo 'done';

?>



<HTML>
<head>
<title>Milk for 2nd 15 Days</title>

</head>
<body>

<form action="generate.php" method="post">

<font id="establishment" color="white">Milk Amount for second 15 days</font><br><br>
<input type="number" min="0" name="milk30" required><br><br>
<input id="submit" type="submit" name="submit" value="Submit">

</form>

</body>
</HTML>
