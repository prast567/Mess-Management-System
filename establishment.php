<html>
<link rel="stylesheet" href="generate.css">
<body>
<div class="background"></div>
</body>
</html>
<?php
include"header.php";
include 'dbconnect.php';

if(isset($_POST['closestock']))
{

$closestock = mysqli_real_escape_string($link, $_POST['closestock']);
$query = "UPDATE billfactors  SET closestock='$closestock' where id=1";
mysqli_query($link,$query);

}



?>


<HTML>
<head>
<title>Establishment</title>

</head>
<body>

<form action="milk15.php" method="post">

<font id="establishment" color="white">Close Stock</font><br><br>
<input  type="number" min="0" name="establishment" required><br><br>
<input id="submit" type="submit" name="submit" value="Submit">

</form>

</body>
</HTML>
