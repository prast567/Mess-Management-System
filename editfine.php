<HTML>
<head>
<title>EDIT FINE</title>
<link rel="stylesheet" href="join3.css">
</head>
<body>
<div class="background"></div>
<strong>  <a href="optionusers.php">Home/</a><a href="interiorfine.php">EditOrViewFine/</a><a href="editfine.php">EditFine</a></strong>


<form action="editfine.php" method="post">
<font color="white" id="f">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMess ID
<input type="text" name="MessID" required>
<br><br>
TOTAL FINE
<input type="text" name="fineamount">
<br><br>

</font>
<input id="submit" type="submit" onclick="return confirm('Are you sure you want to UPDATE fine?')" name="submit" value="Submit">
</form>

</body>
</HTML>

<?php
include"header.php";
mysql_connect("localhost","root","")or die("OOps Unable to connect to the database");
mysql_select_db("hostel") or die("No Database Found");
 $errormsg="ID ENTERED ALREADY JOINED!";
 $errormsg2="ID NOT FOUND";
 $successmsg="ID SUCCESSFULLY JOINED";
 if(isset($_POST['submit']))
 {


  $flag=0;
$id=$_POST['MessID'];
$fine=$_POST['fineamount'];
$sql2="select ID from users";
$result2=mysql_query($sql2);
while($row2=mysql_fetch_array($result2))
{
  if($row2[0]==$id)
  {
  $flag=1;
  break;
}
}
if($flag==1)
{
  $query="select FINE from users where ID='$id'";
  $result = mysql_query($query);
//$row= mysql_num_rows($result);


if( !is_null($result) )    //probably could use isset here or empty
{
  $query5 = "UPDATE users
           SET FINE='$fine'
           WHERE ID='$id'";
  $sql5 = mysql_query($query5);
  echo"UPDATED SUCCESSFULLY";


}
else
{
    $query3 = "insert into users (FINE) values ('$fine') where ID='$id'";
    $sql1=mysql_query($query3);
echo"UPDATED";

}
}
else{
  echo"Record not found";
}
}

?>
