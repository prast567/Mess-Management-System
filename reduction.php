<HTML>
<head>
  <link rel="stylesheet" href="reduction.css">
<title>REDUCTION</title>

</head>
<body>
<div class="background"></div>
<strong>  <a href="optioncomm.php">Home/</a><a href="rednview.php">MessReduction&View/</a><a href="reduction.php">NewReduction</a></strong>
<form action="reduction.php" method="post">

<font id="f" color="white">Mess ID<br><br>
<input type="text" name="MessID"></font>
<br><br>
<input id="submit" type="submit" name="submit" onclick="return confirm('Are you sure you want to ADD this in ID in MESS CUT?')" value="Submit">
</form>
</body>
</html>
<?php
include"dbconnect.php";
include"header.php";
if(isset($_POST['submit']))
 {

  include 'dbconnect.php';
  $success="SUCCESSFULLY ADDED INTO THE REDUCTION LIST";
  $cuterror="ALREADY IN THE REDUCTION LIST!";
  $finderror="USER NOT JOINED!";
  $mid=mysqli_real_escape_string($link, $_POST['MessID']);
  $flag=0;
  $query='SELECT * from reduction';
  $search=mysqli_query($link,$query);
  while($row=mysqli_fetch_row($search)) //search if id already there in reduction db
  {
   if(($row[0]==$mid)&&($row[2]==1)) //id already in reduction db and active
   {

        echo ' <script type="text/javascript">
             alert("'.$cuterror.'");
        </script>
        ';
      $flag=1;
   	break;
   }

   else if(($row[0]==$mid)&&($row[2]==0))  //id already in db but inactive
   {
    $query="UPDATE reduction SET active=1 where ID='$mid'";
    mysqli_query($link,$query);
    $flag=1;
    echo ' <script type="text/javascript">
             alert("'.$success.'");
        </script>
        ';
    break;
   }

   else //check if the id is in join list
   {
    $query2='SELECT ID from messjoin';
    $search2=mysqli_query($link,$query2);
    while($row2=mysqli_fetch_array($search2))
    {

      if(($row2[0]==$mid))
      {
       $query3="INSERT into reduction (ID,count,active) values ('$mid',0,1)";
       mysqli_query($link,$query2);
       echo ' <script type="text/javascript">
             alert("'.$success.'");
        </script>
        ';
       break;
       $flag=1;
      }
    }

   }
  }
  if($flag==0)
  {
    echo ' <script type="text/javascript">
             alert("'.$finderror.'");
        </script>
        ';
  }
 }
?>
