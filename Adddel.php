<!doctype html>
<html lang="en">
<link rel="stylesheet" href="Adddel.css">
<body>

  <div class="background"></div>
<strong>  <a href="optionusers.php">Home/</a><a href="interioruser.php">Users/</a><a href="Adddel.php">RemoveUsers/</a></strong>
<p><strong></strong</p>
  <section >

    <form id="form" action="Adddel.php" method="post">
   <li id="id">
    <font color="white">Enter ID of the Student You want to Delete</font>
    <br><input type="number" name="id" min="101" ><br>
  </li>
      <li id="submit">
      <input id = "submit" type="submit" name="submit" value="Submit" onclick="return confirm('Are you sure you want to Delete this ID?')" font-size="20px">
    </li>
    </form>

  </section>

</body>
  </html>
  <?php
  include "header.php";
  include"dbconnect.php";
  // mysql_connect("localhost","root","")or die("OOps Unable to connect to the database");
  // mysql_select_db("hostel") or die("No Database Found");

  if(isset($_POST['submit']))
  {
    $id = $_POST['id'];
    if(!is_null($id))
    {
      $query = "select ID from users";
      $sql = mysql_query($query);
      $flag;
   while($row = mysql_fetch_array($sql))
    {
        if(($row[0])==$id)
        {
          $flag=0;
          break;
        }
        else {
          $flag=1;

        }

    }

      if($flag==0)
      {echo '<script language="javascript">';
echo 'alert("DATA FOUND")';
echo '</script>';}
      else {
        echo '<script language="javascript">';
  echo 'alert("NO DATA FOUND")';
  echo '</script>';
      }
      $query = "delete from users where id='$id'";
      $query1 = "delete from messjoin where id='$id'";
      $query2 = "delete from dummyeffdays where id='$id'";
      $query3 = "delete from latejoin where id ='$id'";
      $query4 = "delete from milkfirsthalf where id='$id'";
      $query5 = "delete from milksecondhalf where id='$id'";
      $query6 = "delete from reduction where id='$id'";


    if(mysql_query($query) and mysql_query($query1) and mysql_query($query2) and mysql_query($query3) and mysql_query($query4) and mysql_query($query5) and mysql_query($query6) and $flag==0)
    {
      echo '<script language="javascript">';
echo 'alert("Record DELETED Successfully")';
echo '</script>';
    }
    else {
      echo '<script language="javascript">';
echo 'alert("Record NOT Deleted")';
echo '</script>';
    }
  }
}

?>
