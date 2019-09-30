<html>
<link rel="stylesheet" href="generate.css">
<body>
<div class="background"></div>
</body>
</html>
<?php
include"header.php";
include 'dbconnect.php';

if(isset($_POST['establishment']))
{

$establishment = mysqli_real_escape_string($link, $_POST['establishment']);
$query = "UPDATE billfactors  SET establishment='$establishment' where id=1";
mysqli_query($link,$query);
}

// echo 'done';

?>

<HTML>
<head>
<title>Milk for 1st 15 Days</title>

</head>
<body>

<form action="milk30.php" method="post">

<font id="establishment" color="white">Milk Amount for first 15 days</font><br><br>
<input type="number" min="0" name="milk15" required><br><br>
<input id="submit" type="submit" name="submit" value="Submit">

</form>

</body>
</HTML>
