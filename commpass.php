<!doctype html>

<html lang="en">
<link rel="stylesheet" href="login.css">
<body>
  <div class="background"></div>
  <strong>  <a href="optionusers.php">Home/</a><a href="interiordepass.php">Password/</a><a href="commpass.php">GenerateMessCommetteePassword/</a></strong>
  <p><strong></strong</p>
  <section>
  <font color="white">
    <form id = "form1" name="login"  method="post" accept-charset="utf-8">
      <p id="loginhere"><u>COMMITTEE PASSWORD CHANGE</u></p><br>
  <ul style="list-style-type:none">
    <li id="username"><label for="usermail" >Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <input type="text" name="username" placeholder="Enter Username" required></li><br>
    <li id="password"><label for="password" >Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <input type="password" name="password" placeholder="Enter Password" required></li><br>
    <li id="submit">
    <input type="submit" name="submit1" value="SUBMIT" onclick="return confirm('Are you sure to Change the Password?')"></li>
  </ul>
</form>
  </section>
  </html>
  <?php
  include "header.php";

include"dbconnect.php";

    //   function func()
    //   {
    //     $link = "<script>window.open('Purchases.php')</script>";
    //     echo "$link";
    // }

  if(isset($_POST['submit1']))
  {
    $uname = $_POST['username'];
    $pass = $_POST['password'];

//session_start();
//$_SESSION['fromMain'] = "true";
$query1 = "select * from commpass";
$q1 = mysql_query($query1);
$numrow = mysql_num_rows($q1);
if($numrow==0)
{
  $bool = 1;
  $date = date("Y-m-d");
  // echo"$date";
  $last_date = date("Y-m-t", strtotime($date));
  $q2 = "insert into commpass values ('$uname','$pass','$last_date','$bool')";
  if(mysql_query($q2))
  {
    echo '<script language="javascript">';
    echo 'alert("Password Has been SUCCESSFULLY CHANGED, New Username is '.$uname.' and Password is '.$pass.'")';
    echo '</script>';
  }
  else{
    echo '<script language="javascript">';
    echo 'alert("ERROR in Changing the Password")';
    echo '</script>';
  }
}
else if($numrow==1)
{
  $query2 = "select PASSWORD,LAST_DATE from commpass";
  $q2 = mysql_query($query2);
  // $d = date("Y-m-d");
  // $date="2017-04-01";
  $date = date("Y-m-d");
  $last_date = date("Y-m-t", strtotime($date));

  while($row=mysql_fetch_array($q2))
  {
    $oldpass = $row['PASSWORD'];
    if($oldpass!=$pass)
    {if($date>$row['LAST_DATE'])
    {
      $query3 = "update commpass set BOOLEAN='0'";
      $query4 = "insert into commpass values('$uname','$pass','$last_date','1')";
      if(mysql_query($query3) and (mysql_query($query4)))
      {echo '<script language="javascript">';
      echo 'alert("New Committee Password has been Successfully Set. Username is '.$uname.' and Password is '.$pass.'")';
      echo '</script>';}
    }
    else {
      echo '<script language="javascript">';
      echo 'alert("Sorry!!! New Committee cant be appointed today.")';
      echo '</script>';
    }

}
else {
  echo '<script language="javascript">';
  echo 'alert("Present Committee and Previous Committee Password cant be same")';
  echo '</script>';
}
break;
}


}
else {
  echo '<script language="javascript">';
  echo 'alert("Sorry!!! New Committee has already been appointed.")';
  echo '</script>';
}
}


?>
