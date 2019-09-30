<HTML>
<head>
<title>MILK JOIN</title>
<link rel="stylesheet" href="milk.css">
</head>
<body>
<div class="background"></div>

<form action="milk.php" method="post">
  <font color="white">
 <p id="mj"><u><b>MILK JOIN</b></u></p><br><br>
<p id="id">Mess ID&nbsp&nbsp&nbsp&nbsp
<input type="text" name="id"></p>
<br><br>

 <br> <br>
<input id="submit" type="submit" name="submit" onclick="return confirm('Are you sure you want to ADD this ID in MILK JOIN?')" value="Submit">
</form>
</font>
</body>
</HTML>



<?php
include"header.php";
include "dbconnect2.php";
date_default_timezone_set('Asia/Kolkata');
 $errormsg="ID ENTERED ALREADY JOINED!";
 $errormsg2="ID NOT FOUND";
 $successmsg="ID SUCCESSFULLY JOINED";
 if(isset($_POST['submit']))
 {
$id = $_POST['id'];
           if(!is_null($id))
            {
              $query = "select ID from users";
              $sql = mysql_query($query);
              $flag;$c1;$c2;
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

                          if($flag==1)
                        {  echo '<script language="javascript">';
                    echo 'alert("No DATA Found for the User")';
                    echo '</script>';}
                  else {
                                $system =date("Y-m-d H:i:s");
                                $today = date("Y-m-15 H:i:s");


                                if($system<$today)
                                  {


                                    $query4 = "select ID from milkfirsthalf";
                                    $sql = mysql_query($query4);
                                    $flag;
                                                   while($row = mysql_fetch_array($sql))
                                               {
                                                           if(($row[0])==$id)
                                                                  {
                                                                    $c1=0;
                                                                    break;
                                                                  }
                                                                        else {
                                                                              $c1=1;

                                                                             }

                                                }

                                                if($c1==0)
                                            {echo '<script language="javascript">';
                                            echo 'alert("'.$errormsg.' FOR 1ST HALF OF THE MONTH")';
                                            echo '</script>';}

                                    else {






                                      $query2 = "insert into milkfirsthalf (id) values ('$id')";
                                      $sql=mysql_query($query2);
                                      echo '<script language="javascript">';
                                echo 'alert("'.$successmsg.' FOR 1ST HALF OF THE MONTH")';
                                echo '</script>';
                                    }
                                    }

                                      else

                                      {

                                        $query5 = "select ID from milksecondhalf";
                                        $sql = mysql_query($query5);
                                        $flag;
                                                       while($row = mysql_fetch_array($sql))
                                                   {
                                                               if(($row[0])==$id)
                                                                      {
                                                                        $c2=0;
                                                                        break;
                                                                      }
                                                                            else {
                                                                                  $c2=1;

                                                                                 }

                                                    }

                                                    if($c2==0)
                                                      echo"$errormsg";
                                                      else{

                                        $query3 = "insert into milksecondhalf (id) values ('$id')";
                                        $sql=mysql_query($query3);
                                        echo '<script language="javascript">';
                                  echo 'alert("'.$successmsg.' FOR 2ND HALF OF THE MONTH")';
                                  echo '</script>';
                                      }
                                      }









                            }
}
}
?>
