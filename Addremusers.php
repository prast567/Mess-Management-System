<!doctype html>
<html lang="en">
  <link rel="stylesheet" href="Addremusers.css">
<body>
  <div class="background"></div>
<strong>  <a href="optionusers.php">Home/</a><a href="interioruser.php">Users/</a><a href="Addremusers.php">Add Users/</a></strong>
  <p id="hi" align="center"><strong> ADD USERS</strong</p>
  <section>

    <font color="white">
    <form id="form" action="Addremusers.php" method="post">
    <li id="name">
      Enter Full Name&nbsp
      <input type="text" name="name" required><br>
    </li>
      <li id="dept">
      &nbsp&nbspEnter Dept. Name&nbsp
      <input type="text" name="dept" required><br>
    </li>
    <li id="sem">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter Year&nbsp
    <input type="number" name="sem" min="1996" required><br>
  </li>
  <li id="cno">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter Card No
  <input type="number" name="cno" ><br>
</li>
<li id="rno">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter Room No
<input type="text" name="rno" required><br>
</li>
</li>
<li id="cau">
Enter Caution Deposit
<input type="number" name="cau"><br>
</li>

      <li id="submit">
      <input id = "submit" type="submit" name="submit" value="Submit" onclick="return confirm('Are you sure you want to add this Student?')" font-size="20px">
    </li>
    </form>
</font>
  </section>
  </html>
  <?php
  include "header.php";
  include"dbconnect.php";
  //session_start();
  // if(!isset($_SESSION['fromPurchases'])){
  //    //send them back
  //    header("Location: Adminlogin.php");
  // }
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $year = $_POST['sem'];
    $cno = $_POST['cno'];
    $cau = $_POST['cau'];
    $rno=$_POST['rno'];

    if(!is_null($name))
    {
      $query = "select ID from users";
      $sql = mysql_query($query);
      $c= 101;

      //$row= mysql_fetch_array($sql);

      //echo"a=$row[0]  b=$row[1]";
$i=0;
   while($row = mysql_fetch_array($sql))
    {


         //echo"<<br>$row[$i]<br>";
        // echo"<br>t $i<br>";
        if(($row[0])==$c)
        {
          //echo"inr<br>";
          $c++;
        }
        else {//echo"dfawfd";
          break;
        }
++$i;
    }
      //echo"<br>$c";
      $query = "insert into users (ID,NAME,DEPT,YEAR,ROOM_NO,I_CARD_NO,CAUTION_DEPOSIT) values ('$c','$name','$dept','$year','$rno','$cno','$cau')";
      //echo"<br>$query";

    if(mysql_query($query))
    {
      echo '<script language="javascript">';
echo 'alert("USER SUCCESSFULLY ADDED and ID is '.$c.'")';
echo '</script>';
    }
    else {
      echo '<script language="javascript">';
echo 'alert("NOT INSERTED")';
echo '</script>';
    }
  }
}

?>
