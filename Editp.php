<!doctype html>
<html lang="en">
  <link rel="stylesheet" href="Editp.css">
<body>
    <div class="background"></div>

    <strong>  <a href="optionusers.php">Home/</a><a href="Purchases.php">Purchases/</a><a href="Editp.php">EditPurchases</a></strong>
      <h2 align="center">EDIT PURCHASES</h2>
      <p><strong></strong</p>
<?php
include "header.php";
mysql_connect("localhost","root","")or die("OOps Unable to connect to the database");
mysql_select_db("hostel") or die("No Database Found");
//session_start();
// if(!isset($_SESSION['fromPurchases'])){
//    //send them back
//
//    header("Location: Adminlogin.php");
// }
  if(isset($_POST['view']))
  {

         $newday = $_POST['date'];
         $queryin = "UPDATE lastday
                  SET temper2='$newday' ";
         $sqlinp = mysql_query($queryin);

        $query = "select * from purchases where Date='$newday' ";
      $sql = mysql_query($query);
      $row=mysql_fetch_array($sql);
      $expp=$row[1];
      $expup=$row[2];
      $estp=$row[3];
      $estup=$row[4];

    //}

    echo "<h3>ENTERIES FOR $newday</h3>";





  }
if(isset($_POST['submit']))
{
  $date = $_POST['date'];
  $exp = $_POST['exp'];
  $exu = $_POST['exu'];
  $esp = $_POST['esp'];
  $esu = $_POST['esu'];
  $query1 = "select Date from purchases";
  $q1 = mysql_query($query1) or die(mysql_error());

  $flag=0;
  while($row=mysql_fetch_array($q1))
  {
    if($date==$row['Date'])
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
  if(!is_null($date))
  {
    $query = "update purchases set Expenditure_Paid='$exp',Expenditure_Unpaid='$exu',Establishment_Paid='$esp',Establishment_Unpaid='$esu' where Date='$date'";
  }
  else {
    echo "<h3>Date field cant be left blank</h3>";
  }
  if(mysql_query($query))
  {
    echo"<h2>Record Inserted Successfully</h2>";
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


  <div class="background"></div>
  <section>
    <font color="white">
    <form id="form" action="Editp.php" method="post">
      <li id="date">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter Date&nbsp&nbsp&nbsp&nbsp
      <input type="date"  name="date" required>


    <input id = "view" type="submit" name="view" value="View" font-size="20px">
  </li>
    <li id="exp">
      &nbspEdit Expenditure Paid&nbsp&nbsp&nbsp
      <input type="number"  name="exp" min="0" value="<?php echo @$expp;?>"><br>
</li>
<li id="exu">
  Edit Expenditure Unpaid
  <input type="number"  name="exu" min="0" value="<?php echo @$expup;?>"><br>
</li>
<li id="esp">
  &nbsp&nbspEdit Establishment Paid&nbsp
  <input type="number"  name="esp" min="0" value="<?php echo @$estp;?>">
</li>
<li id="esu">
  <p align="left" id=hi>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEdit Establishment Unpaid
    <input type="number"  name="esu" min="0" ></p><br>
</li>
      <li id="submit">
      <input id = "submit" type="submit" name="submit" value="Submit" font-size="20px">
    </li>
    </form>
</font>
  </section>
  </html>
