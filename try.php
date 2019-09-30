<html>
<form method="post" action="try.php">
    <input type="submit" name="submit" value="delete" onclick="return confirm('Are you sure you want to delete this?')" />
</form>
</html>
<?php
// date_default_timezone_set('Asia/Kolkata');
// $d = date('Y-m-d', strtotime('+0 day'));
// //echo"$d";
// $sepparator = '-';
// $parts = explode($sepparator, $d);
// $dayForDate = date("l", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));
// //echo"<br>$dayForDate";
// $time = date('H:i:s');
// $time= date("H:i", strtotime($time));
// $time1 = "00:43";
// if($time<$time1)
// {
//   echo"$time";
// }
// else if($time==$time1){
//   echo"equal";
// }
// else {
//   echo"$time1";
// }
include"header.php";
include "dbconnect.php";
if ($_POST['submit']) {

  $id=106;
      // $id = $_POST['idToDelete'];
      $query = "delete from users where id = '$id'";
      mysql_query($query) or die(mysql_error());
   }
   else {
     die(mysql_error());
   }
 ?>
