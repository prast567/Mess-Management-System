<html>
<link rel="stylesheet" href="generate.css">
<body>
<div class="background"></div>
</body>
</html>
<?php
include"header.php";
include 'dbconnect.php';

$milk = mysqli_real_escape_string($link, $_POST['milk']);
$query = "UPDATE billfactors  SET milk='$milk' where id=1";
mysqli_query($link,$query);

// echo 'done';

?>

<HTML>
<head>
<title>Opening Stock</title>

</head>
<body>

<form action="closestock.php" method="post">

<font id="establishment" color="white">Opening Stock</font><br><br>
<input type="number" min="0" name="opstock" required><br><br>
<input id="submit" type="submit" name="submit" value="Submit">

</form>

</body>
</HTML>
