<HTML>
<head>
<title>Mess Join</title>
<link rel="stylesheet" href="join3.css">
</head>
<body>
<div class="background"></div>
<strong>  <a href="optioncomm.php">Home/</a><a href="joinnview.php">MessJoin/</a><a href="join3.php">NormalJoin</a></strong>

  
<form action="join3.php" method="post">
<font color="white" id="f">
Mess ID
<input type="text" name="MessID">
<br><br>
Menu

<select name="menu">
  <option value="VEG">Veg</option>
  <option value="VE">Veg+Egg</option>
  <option value="VF">Veg+Fish</option>
  <option value="VC">Veg+Chicken</option>
  <option value="NV">NonVeg</option>
  <option value="NVE">NonVeg-Egg</option>
  <option value="NVF">NonVeg-Fish</option>
  <option value="NVC">NonVeg-Chicken</option>
</select> <br> <br>
</font>
<input id="submit" type="submit" onclick="return confirm('Are you sure you want to Add this ID in JOIN LIST?')" name="submit" value="Submit">
</form>

</body>
</HTML>

<?php
include"header.php";
 $errormsg="ID ENTERED ALREADY JOINED!";
 $errormsg2="ID NOT FOUND";
 $successmsg="ID SUCCESSFULLY JOINED";
 if(isset($_POST['submit']))
 {

  include 'dbconnect.php';



// Escape user inputs for security
  $userchecker=0;
  $flag=1;
  $mid = mysqli_real_escape_string($link, $_POST['MessID']);
  $menu = mysqli_real_escape_string($link, $_POST['menu']);
  $day=date("d");
  $total=date("t");
  $effective=($total-$day);
  $query2='SELECT ID from users';
  $users=mysqli_query($link,$query2);
  while($rowuser=mysqli_fetch_array($users))
  {
    if(($rowuser[0]==$mid))
    {
      //check with join db
       $userchecker=1; //variable for validity of presence in user db
       $query='SELECT ID from messjoin';
       $search=mysqli_query($link,$query);

       while ($row=mysqli_fetch_array($search))
       {

        if(($row[0]==$mid))
        {
         $flag=0; //already joined
         break;
        }

       }

       if($flag==1) //yet to join
       {


        // attempt insert query execution
        $sql = "INSERT INTO messjoin (ID, menu,effective) VALUES ('$mid', '$menu','$effective')";
         if(mysqli_query($link, $sql))
         {
          echo ' <script type="text/javascript">
             alert("'.$successmsg.'");
            </script>
          ';

           $query_for_reduction="SELECT * from reduction";   //code for updating reduction db when join happens
           $reduced=mysqli_query($link,$query_for_reduction);
           while($rowred=mysqli_fetch_row($reduced))
           {
            if(($rowred[0]==$mid)&&($rowred[1]<3)&&($rowred[2]==1))
            {
             $query3="UPDATE reduction SET count=0,active=0 where ID='$rowred[0]'";
             mysqli_query($link,$query3);
            }
            else if (($rowred[0]==$mid)&&($rowred[1]>=3)&&($rowred[2]==1))
            {
             $query4="UPDATE reduction SET count=0,active=0,total=total+'$rowred[1]' where ID='$rowred[0]'";
             mysqli_query($link,$query4);
            }
           }

          }

         else
         {
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
         }



         mysqli_close($link);
       }

       else
       {
        echo ' <script type="text/javascript">
             alert("'.$errormsg.'");
        </script>
        ';
       }







     //end of check with join db
    }




  }
  if($userchecker==0)
    {
        echo ' <script type="text/javascript">
             alert("'.$errormsg2.'");
        </script>
        ';
    }

 }
?>
