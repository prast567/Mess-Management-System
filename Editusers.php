 <!doctype html>
<html lang="en">
  <link rel="stylesheet" href="Addremusers.css">
<body>
  <div class="background"></div>
<strong>  <a href="optionusers.php">Home/</a><a href="interioruser.php">Users/</a><a href="Editusers.php">EditUsers/</a></strong>
<p id="hi" align="center"><strong> EDIT USERS</strong</p>

  <?php

  include "header.php";
  include"dbconnect2.php";
  //session_start();
  // if(!isset($_SESSION['fromPurchases'])){
  //    //send them back
  //    header("Location: Adminlogin.php");
  // }
   if(isset($_POST['view']))
  {

         $id=$_POST['id'];
         $queryin = "UPDATE lastday
                  SET temper3='$id' ";
         $sqlinp = mysql_query($queryin);

        $query = "select * from users where ID='$id' ";
      $sql = mysql_query($query);
      if($row=mysql_fetch_array($sql))
	  {
      $name=$row[1];
      $dept=$row[2];
      $year=$row[5];
      $cno=$row[4];
	  $cau=$row[7];
	  $rno=$row[3];

	  echo "<h3>ENTERIES FOR $id</h3>";
  }
	  else{
		  echo "<h3>DATA NOT FOUND</h3>";

	  }





  }


if(isset($_POST['submit']))
{
	 $id = $_POST['id'];
  $name = $_POST['name'];
    $dept = $_POST['dept'];
    $year = $_POST['sem'];
    $cno = $_POST['cno'];
    $cau = $_POST['cau'];
    $rno=$_POST['rno'];

		$query1 = "select ID from users";
  $q1 = mysql_query($query1) or die(mysql_error());

  $flag=0;
  while($row=mysql_fetch_array($q1))
  {
    if($id==$row['ID'])
    {
      $flag=1;
      break;
    }
    else {
      $flag=0;
    }

  }
  // echo"$flag";
  if($flag==1)
  {
       if(!is_null($id) )
			{
				$query = "update users set NAME='$name',DEPT='$dept',ROOM_NO='$rno',I_CARD_NO='$cno',YEAR='$year',CAUTION_DEPOSIT='$cau' where ID='$id'";
			}

							if(mysql_query($query))
  {
    echo"<h2>Record Updated Successfully</h2>";
  }
  else {
    die(mysql_error());
    echo"<h2>Not Inserted!!!!</h2>";
  }
}
else {
  echo"<h2>Record Not Found</h2>";
}
}

?>



<section>
    <font color="white">
    <form id="form" action="Editusers.php" method="post">
	<li id="rno">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter ID
<input type="number" id="id" name="id" required>

      <input id="view" type="submit" name="view" value="View" font-size="20px">

</li>
</font>
</form>
</section>



  <section>
    <font color="white">
    <form id="form" action="Editusers.php" method="post">
	<li id="id">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter ID
<input type="number" id="id" name="id" value="<?php echo @$id;?>"  readonly="readonly" >



</li>
    <li id="name">
      Enter Full Name&nbsp
      <input type="text" name="name" value="<?php echo @$name;?>" required><br>
    </li>
      <li id="dept">
      &nbsp&nbspEnter Dept. Name&nbsp
      <input type="text" name="dept" value="<?php echo @$dept;?>" required><br>
    </li>
    <li id="sem">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter Year&nbsp
    <input type="number" name="sem" min="1996" value="<?php echo @$year;?>" required><br>
  </li>
  <li id="cno">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter Card No
  <input type="number" name="cno" value="<?php echo @$cno;?>" required><br>
</li>
<li id="rno">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter Room No
<input type="number" name="rno" value="<?php echo @$rno;?>" required><br>
</li>
</li>
<li id="cau">
Enter Caution Deposit
<input type="number" name="cau" value="<?php echo @$cau;?>" required><br>
</li>

      <li id="submit">
      <input id = "submit" type="submit" name="submit" value="Submit"  font-size="20px">
    </li>
    </form>
</font>
  </section>

  </body>
  </html>
