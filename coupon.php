<?php
include"header.php";
include"dbconnect.php";// $currdate="MONDAY";  //Getting the Server time
date_default_timezone_set('Asia/Kolkata');
$currdate=date('l', strtotime('+1 day'));
//echo"$currdate";
if(isset($_POST['submit']))
  { //----------Storing the acto of menu buttons----------//

    $name = $_POST['name'];
      $room_no = $_POST['room_no'];
    $diet = $_POST['diet'];
    $breakfast = $_POST['break'];
    $lunch = $_POST['lunch'];
    $tea = $_POST['tea'];
    $snacks=$_POST['snacks'];
	$teasnacks = $_POST['tea+sn'];
    $dinner = $_POST['dinner'];
    $query1 = "select * from valueset2 where DAYS='$currdate'";
    $data=Array();
    //$i=0;$bre=0;$lu=0;$tead=0;$tsd=0;$did=0;
    $res=mysql_query($query1);
    while($row=mysql_fetch_array($res))
    {
      $data[0]=$row['BREAKFAST'];
      $data[1]=$row['LUNCH'];
      $data[2]=$row['TEA'];
      $data[3]=$row['TEA_SNACKS'];
      $data[4]=$row['DINNER'];
      $data[5]=$row['SNACKS'];
}
//$total = ($br*$data[0])+($lu*$data[1])+($te*$data[2])+($ts*$data[3])+($di*$data[4])+($s*$data[5]);
    //-----Selecting all the rates of server date----------//
    $br=0;
    $lu=0;
    $lu_v=0;
    $lu_ve=0;
    $lu_vf=0;
    $lu_vc=0;
    $lu_nv=0;
    $lu_nve=0;
    $lu_nvf=0;
    $lu_nvc=0;
    $te=0;
    $ts=0;
    $di=0;
    $di_v=0;
    $di_ve=0;
    $di_vf=0;
    $di_vc=0;
    $di_nv=0;
    $di_nve=0;
    $di_nvf=0;
    $di_nvc=0;
    $lu_egg=0;
    $di_egg=0;
    $lu_fish=0;
    $di_fish=0;
    $lu_ch=0;
    $di_ch=0;
    $s=0;
    $breakl=0;
      $l =0;
        $lnv=0;
          $le =0;
            $lf=0;
              $lc=0;
                $tel =0;
                  $snac=0;
                    $tes =0;
                      $dg =0;
                      $dng =0;
                        $de =0;
                          $df =0;
                            $dc =0;
                             $di=0;
                             $lu=0;
                               $am=0;
//------------Setting the flags of each Menu to 0-------------//


//---------------CHecking which option is choosen and setting the flags for the corresponding Menu----------//
if($diet=="none")
{
  if($tea=="Yes")
   {
     $te=$te+1;
   }
   if($snacks=="Yes")
   {
     $s=$s+1;
   }

   if($teasnacks=="Yes")
   {
     $ts=$ts+1;
   }
   if($breakfast=="Yes"||$lunch=="Yes"||$dinner=="Yes")
   {
     echo '<script language="javascript">';
     echo 'alert("Please Select a Diet First")';
     echo '</script>';
}
}


if($diet=="lu_v")
{
       if($breakfast=="Yes")
       {
         $br=$br+1;
       }

       if($lunch=="Yes")
       {
         $lu=1;
         $lu_v=$lu_v+1;
       }

      if($tea=="Yes")
       {
         $te=$te+1;
       }
       if($snacks=="Yes")
       {
         $s=$s+1;
       }

       if($teasnacks=="Yes")
       {
         $ts=$ts+1;
       }
       if($dinner=="Yes")
       {
         $di=1;
         $di_v=$di_v+1;
       }

     }
     if($diet=="lu_v+e")
     {
            if($breakfast=="Yes")
            {
              $br=$br+1;
            }

            if($lunch=="Yes")
            {
              $lu=1;
              $lu_v=$lu_v+1;
              $lu_egg=  $lu_egg+1;
            //  echo "$lu_v";
            }

           if($tea=="Yes")
            {
              $te=$te+1;
            }
            if($snacks=="Yes")
            {
              $s=$s+1;
            }

            if($teasnacks=="Yes")
            {
              $ts=$ts+1;
            }
            if($dinner=="Yes")
            {
              $di=1;
              $di_v=$di_v+1;
                $di_egg=$di_egg+1;
            }

          }
          if($diet=="lu_v+f")
          {
                 if($breakfast=="Yes")
                 {
                   $br=$br+1;
                 }

                 if($lunch=="Yes")
                 {
                   $lu=1;
                   $lu_v=$lu_v+1;
                   $lu_fish=$lu_fish+1;
                 }

                if($tea=="Yes")
                 {
                   $te=$te+1;
                 }
                 if($snacks=="Yes")
                 {
                   $s=$s+1;
                 }

                 if($teasnacks=="Yes")
                 {
                   $ts=$ts+1;
                 }
                 if($dinner=="Yes")
                 {
                   $di=1;
                   $di_v=$di_v+1;
                   $di_fish=$di_fish+1;
                 }

               }
               if($diet=="lu_v+c")
               {
                      if($breakfast=="Yes")
                      {
                        $br=$br+1;
                      }

                      if($lunch=="Yes")
                      {
                        $lu=1;
                        $lu_v=$lu_v+1;
                        $lu_ch=$lu_ch+1;
                      }

                     if($tea=="Yes")
                      {
                        $te=$te+1;
                      }
                      if($snacks=="Yes")
                      {
                        $s=$s+1;
                      }

                      if($teasnacks=="Yes")
                      {
                        $ts=$ts+1;
                      }
                      if($dinner=="Yes")
                      {
                        $di=1;
                        $di_v=$di_v+1;
                        $di_ch= $di_ch+1;
                      }

                    }
                    if($diet=="lu_nv")
                    {
                           if($breakfast=="Yes")
                           {
                             $br=$br+1;
                           }

                           if($lunch=="Yes")
                           {
                             $lu=1;
                             $lu_nv=$lu_nv+1;
                             $lu_egg=$lu_egg+1;
                             $lu_fish=$lu_fish+1;
                            $lu_ch=$lu_ch+1;
                           }

                          if($tea=="Yes")
                           {
                             $te=$te+1;
                           }
                           if($snacks=="Yes")
                           {
                             $s=$s+1;
                           }

                           if($teasnacks=="Yes")
                           {
                             $ts=$ts+1;
                           }
                           if($dinner=="Yes")
                           {
                             $di=1;
                             $di_nv=$di_nv+1;
                             $di_egg=$di_egg+1;
                             $di_fish=$di_fish+1;
                            $di_ch=$di_ch+1;
                           }

                         }
                         if($diet=="lu_nv-e")
                         {
                                if($breakfast=="Yes")
                                {
                                  $br=$br+1;
                                }

                                if($lunch=="Yes")
                                {
                                  $lu=1;
                                  $lu_nv=$lu_nv+1;
                                  $lu_fish=$lu_fish+1;
                                 $lu_ch=$lu_ch+1;
                                }

                               if($tea=="Yes")
                                {
                                  $te=$te+1;
                                }
                                if($snacks=="Yes")
                                {
                                  $s=$s+1;
                                }

                                if($teasnacks=="Yes")
                                {
                                  $ts=$ts+1;
                                }
                                if($dinner=="Yes")
                                {
                                  $di=1;
                                  $di_v=$di_v+1;
                                  $di_fish=$di_fish+1;
                                 $di_ch=$di_ch+1;
                                }

                              }
                              if($diet=="lu_nv-f")
                              {
                                     if($breakfast=="Yes")
                                     {
                                       $br=$br+1;
                                     }

                                     if($lunch=="Yes")
                                     {
                                       $lu=1;
                                       $lu_nv=$lu_nv+1;
                                       $lu_egg=$lu_egg+1;
                                      $lu_ch=$lu_ch+1;
                                     }

                                    if($tea=="Yes")
                                     {
                                       $te=$te+1;
                                     }
                                     if($snacks=="Yes")
                                     {
                                       $s=$s+1;
                                     }

                                     if($teasnacks=="Yes")
                                     {
                                       $ts=$ts+1;
                                     }
                                     if($dinner=="Yes")
                                     {$di=1;
                                       $di_nv=$di_nv+1;
                                       $di_egg=$di_egg+1;
                                      $di_ch=$di_ch+1;
                                     }

                                   }
                                   if($diet=="lu_nv-c")
                                   {
                                          if($breakfast=="Yes")
                                          {
                                            $br=$br+1;
                                          }

                                          if($lunch=="Yes")
                                          {
                                            $lu=1;
                                            $lu_nv=$lu_nv+1;
                                            $lu_egg=$lu_egg+1;
                                           $lu_fish=$lu_fish+1;
                                          }

                                         if($tea=="Yes")
                                          {
                                            $te=$te+1;
                                          }
                                          if($snacks=="Yes")
                                          {
                                            $s=$s+1;
                                          }

                                          if($teasnacks=="Yes")
                                          {
                                            $ts=$ts+1;
                                          }
                                          if($dinner=="Yes")
                                          {
                                            $di=1;
                                            $di_nv=$di_nv+1;
                                            $di_egg=$di_egg+1;
                                           $di_fish=$di_fish+1;
                                          }

                                        }


$total = ($br*$data[0])+($lu*$data[1])+($te*$data[2])+($ts*$data[3])+($di*$data[4])+($s*$data[5]);
                // echo "$lu_v";



//----------------Calculating the total Price-------------------------//
    //   $total = ($br*$data[0])+($lu*$data[1])+($te*$data[2])+($ts*$data[3])+($di*$data[4]);
//---------------Selecting all the Dates from the count Table---------------------//



$query = "insert into count (NAME,ROOM_NO,DIET,BREAKFAST,LUNCH_VEG,LUNCH_NONVEG,LUNCH_EGG,LUNCH_FISH,LUNCH_CHICKEN,TEA,SNACKS,TEA_SNACKS,DINNER_VEG,DINNER_NONVEG,
DINNER_EGG,DINNER_FISH,DINNER_CHICKEN,AMOUNT) values ('$name','$room_no','$diet','$br','$lu_v','$lu_nv','$lu_egg','$lu_fish','$lu_ch','$te','$s','$ts','$di_v','$di_nv','$di_egg','$di_fish','$di_ch','$total')";
$sql=mysql_query($query);

$result=mysql_query("select * from count");
while ($row = mysql_fetch_assoc($result)){
    $breakl += $row['BREAKFAST'];
      $l += $row['LUNCH_VEG'];
        $lnv += $row['LUNCH_NONVEG'];
          $le += $row['LUNCH_EGG'];
            $lf += $row['LUNCH_FISH'];
              $lc += $row['LUNCH_CHICKEN'];
                $tel += $row['TEA'];
                  $snac += $row['SNACKS'];
                    $tes += $row['TEA_SNACKS'];
                      $dg += $row['DINNER_VEG'];
                      $dng += $row['DINNER_NONVEG'];
                        $de += $row['DINNER_EGG'];
                          $df += $row['DINNER_FISH'];
                            $dc += $row['DINNER_CHICKEN'];
                            $am+=$row['AMOUNT'];
}
$query5 = "UPDATE countfinal
         SET BREAKFAST='$breakl',LUNCH_VEG='$l',LUNCH_NONVEG='$lnv',LUNCH_EGG='$le',LUNCH_FISH='$lf',LUNCH_CHICKEN='$lc',TEA='$tel',SNACKS='$snac',TEA_SNACKS='$tes',DINNER_VEG='$dg',DINNER_NONVEG='$dng',
         DINNER_EGG='$de',DINNER_FISH='$df',DINNER_CHICKEN='$dc',AMOUNT='$am'
         WHERE SR_NO='1'";
$sql5 = mysql_query($query5);



}
?>
<!DOCTYPE html>
<html>
<head>
  <div class="background"></div>

<link rel="stylesheet" href="coupon.css">
<style>
.fom0{

  text-align: center;
  border:3px solid grey;
  background-color: grey;
  width:630px;
  border-radius: 25px;
  margin-left:240px;
  margin-top: 30px;
  padding-top: 30px;
  padding-bottom: 30px;
  padding-left: 20px;
  padding-right: 180px;
  background: rgba(0, 0, 0, 0.4);


}
.fom{

  text-align: center;
  border:3px solid grey;
  background-color: grey;
  width:630px;
  border-radius: 25px;
  margin-left:240px;
  margin-top: 30px;
  padding-top: 20px;
  padding-left: 20px;
  padding-right: 180px;
  background: rgba(0, 0, 0, 0.4);


}


</style>

</head>
<body>

<form  action="coupon.php" method="post">
  <div class="fom0">
    <b>&nbsp&nbsp&nbspNAME:</b>
      <td><input type="text" name="name" style="width: 140px; height:30px" value=""></td>
      <strong>ROOM_NO:</strong>
       <td><input type="text" name="room_no" style="width: 140px; height:30px" value=""/></td>
       <b>DIET:</b>
       <select id="diet" name="diet" style="width: 120px;">
         <option value="none">None</option>
         <option value="lu_v">Veg</option>
         <option value="lu_v+e">Veg+Egg</option>
         <option value="lu_v+f">Veg+Fish</option>
         <option value="lu_v+c">Veg+Chicken</option>
        <option value="lu_nv">NonVeg</option>
       <option value="lu_nv-e">NonVeg-Egg</option>
       <option value="lu_nv-f">NonVeg-Fish</option>
       <option value="lu_nv-c">NonVeg-Chicken</option>
       </select>
  </div>
  <div class="fom">
<table>
  <tr>
<!-- The below part is for the table of selecting the menus  -->
    <th>BREAKFAST</th>
    <th>LUNCH</th>
    <th>TEA</th>
    <th>SNACKS</th>
    <th>TEA+SNACKS</th>
    <th>DINNER</th>
    <th></th><th></th><th></th><th></th>
    </tr>



  <tr>



    <td ><select name="break" style="width: 140px;">
  <option value="No">No</option>
  <option value="Yes">Yes</option></select></td>
  <td ><select name="lunch" style="width: 120px;">
    <option value="No">No</option>
    <option value="Yes">Yes</option></td></td>
     <td ><select name="tea" style="width: 120px;">
  <option value="No">No</option>
  <option value="Yes">Yes</option></td>
  <td ><select name="snacks" style="width: 120px;">
<option value="No" >No</option>
<option value="Yes">Yes</option></td>

     <td ><select name="tea+sn" style="width: 120px;">
  <option value="No">No</option>
  <option value="Yes">Yes</option></td>
  <td ><select name="dinner" style="width: 120px;">
    <option value="No">No</option>
    <option value="Yes">Yes</option></td>
</select></td>
<td><br></td>
 <td> </td>

 <td> </td>

  </tr>
  <tr>
    <th></th>
    <th>AMOUNT</th></tr>
  <tr>
    <td></td>

      <td><input type="text" style="width: 140px; height:30px" value="<?php echo @$total;?>"/></td>
      <p></p>
    <td></td>
   <td><input type="submit" name="submit"  id="submit" style="width: 120px;"></td>
  <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>



</table>
</div>

</form>
<?php
// {if(@$q or @$qq)
if(isset($_POST['submit']))
{
echo '<script language="javascript">';
echo 'alert("Record Successfully Inserted")';
echo '</script>';
}

 ?>
</body>
</html>
