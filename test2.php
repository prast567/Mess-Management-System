<?php
include"header.php";
mysql_connect("localhost","root","")or die("OOps Unable to connect to the database");
mysql_select_db("hostel") or die("No Database Found");
$currdate="MONDAY";  //Getting the Server time
if(isset($_POST['submit']))
  { //----------Storing the acto of menu buttons----------//
    $breakfast = $_POST['break'];
    $lunch = $_POST['lunch'];
    $tea = $_POST['tea'];
	$teasnacks = $_POST['tea+sn'];
    $dinner = $_POST['dinner'];
    //-----Selecting all the rates of server date----------//
       $query1 = "select * from valueset2 where DAYS='$currdate'";
       $data=Array();
       $i=0;$br=0;$lu=0;$te=0;$ts=0;$di=0;
       $res=mysql_query($query1);
       while($row=mysql_fetch_array($res))
       {
         $data[0]=$row['BREAKFAST'];
         $data[1]=$row['LUNCH'];
         $data[2]=$row['TEA'];
         $data[3]=$row['TEA_SNACKS'];
         $data[4]=$row['DINNER'];
}

//------------Setting the flags of each Menu to 0-------------//

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
//---------------CHecking which option is choosen and setting the flags for the corresponding Menu----------//
       if($breakfast=="Yes")
       {
         $br=1;
       }
       else {
         $br=0;
       }
       if($lunch=="None")
       {
         $lu=0;
       }
       else {
         $lu=1;
         if($lunch=="Veg")
         {
           $lu_v=1;
         }
         else if($lunch=="Veg+Egg")
         {
           $lu_ve=1;
         }
         else if($lunch=="Veg+Fish")
         {
           $lu_vf=1;
         }
         else if($lunch=="Veg+Chicken")
         {
           $lu_vc=1;
         }
         else if($lunch=="NonVeg")
         {
           $lu_nv=1;
         }
         else if($lunch=="NonVeg-Egg")
         {
           $lu_nve=1;
         }
         else if($lunch=="NonVeg-Fish")
         {
           $lu_nvf=1;
         }
         else {
           $lu_nvc=1;
         }
       }
       if($tea=="Yes")
       {
         $te=1;
       }
       else {
         $te=0;
       }
       if($teasnacks=="Yes")
       {
         $ts=1;
       }
       else {
         $ts=0;
       }
       if($dinner=="None")
       {
         $di=0;
       }
       else {
         $di=1;
         if($dinner=="Veg")
         {
           $di_v=1;
         }
         else if($dinner=="Veg+Egg")
         {
           $di_ve=1;
         }
         else if($dinner=="Veg+Fish")
         {
           $di_vf=1;
         }
         else if($dinner=="Veg+Chicken")
         {
           $di_vc=1;
         }
         else if($dinner=="NonVeg")
         {
           $di_nv=1;
         }
         else if($dinner=="NonVeg-Egg")
         {
           $di_nve=1;
         }
         else if($dinner=="NonVeg-Fish")
         {
           $di_nvf=1;
         }
         else {
           $di_nvc=1;
         }
       }
//----------------Calculating the total Price-------------------------//
       $total = ($br*$data[0])+($lu*$data[1])+($te*$data[2])+($ts*$data[3])+($di*$data[4]);
//---------------Selecting all the Dates from the count Table---------------------//
       $query="select DAYS from count";
       $flag=0;
       //$dt=0;
       $y=0;
       $qw=mysql_query($query);
//--------------Checking whether the Server Date is already present or not and Setting the flag accordingly---------//
       while($r=mysql_fetch_array($qw))
       {$y=1;
         $dt=$r['DAYS'];
         //echo"$dt";
         if($dt!=$currdate)
         $flag=1;
         else {
           $flag=0;
           break;
         }
       }
       if($y==0)
       $flag=1;
       $q;
       $qq;
       $query2=0;

//-----------------------FLAG=0 means that current or server DATE already exist in the count table so we have to Update it----------//
        if($flag==1) {
//  $query2 = "insert into count (DATE,BREAKFAST) values ('$currdate','$br')";
                        $query="delete from count";
                        $q=mysql_query($query);
                        $query2 = "insert into count (DAYS,BREAKFAST,LU_V,LU_VE,LU_VF,LU_VC,
                        LU_NV,LU_NVE,LU_NVF,LU_NVC,TEA,TEA_SNACKS,
                        DI_V,DI_VE,DI_VF,DI_VC,DI_NV,DI_NVE,DI_NVF,DI_NVC,AMOUNT)
                        values ('$currdate', '$br','$lu_v','$lu_ve','$lu_vf','$lu_vc','$lu_nv','$lu_nve',
                        '$lu_nvf', '$lu_nvc','$te', '$ts','$di_v', '$di_ve', '$di_vf', '$di_vc','$di_nv',
                        '$di_nve','$di_nvf',
                        '$di_nvc','$total')";
                        $qq=mysql_query($query2);

                        }
    else
       {$query2 = "update count set DAYS='$currdate',BREAKFAST=BREAKFAST+'$br', LU_V=LU_V+'$lu_v',
         LU_VE=LU_VE+'$lu_ve', LU_VF=LU_VF+'$lu_vf', LU_VC=LU_VC+'$lu_vc', LU_NV=LU_NV+'$lu_nv',
         LU_NVE=LU_NVE+'$lu_nve', LU_NVF=LU_NVF+'$lu_nvf',
         LU_NVC=LU_NVC+'$lu_nvc', TEA=TEA+'$te', TEA_SNACKS=TEA_SNACKS+'$ts', DI_V=DI_V+'$di_v',
         DI_VE=DI_VE+'$di_ve', DI_VF=DI_VF+'$di_vf', DI_VC=DI_VC+'$di_vc',DI_NV=DI_NV+'$di_nv',
         DI_NVE=DI_NVE+'$di_nve', DI_NVF=DI_NVF+'$di_nvf', DI_NVC=DI_NVC+'$di_nvc',
         AMOUNT=AMOUNT+'$total' where DAYS='$currdate'";
       $q=mysql_query($query2);

       }
//---------------------FLAG=1 means no current or server DATE exists so insertion is required-------------------//

        $total = ($br*$data[0])+($lu*$data[1])+($te*$data[2])+($ts*$data[3])+($di*$data[4]);

}
function func()
  {
    $breakfast = $_POST['break'];
    $lunch = $_POST['lunch'];
    $tea = $_POST['tea'];
	$teasnacks = $_POST['tea+sn'];
    $dinner = $_POST['dinner'];
       $query1 = "select * from valueset2 where DAYS='$currdate'";
       $data=Array();
       $i=0;$br=0;$lu=0;$te=0;$ts=0;$di=0;
       $res=mysql_query($query1);
       //echo"$res";
       while($row=mysql_fetch_array($res))
       {
         $data[0]=$row['BREAKFAST'];
         $data[1]=$row['LUNCH'];
         $data[2]=$row['TEA'];
         $data[3]=$row['TEA_SNACKS'];
         $data[4]=$row['DINNER'];
       }

       if($breakfast=="Yes")
       {
         $br=1;
         $cbr=1;
       }
       else {
         $br=0;
         $cbr=0;
       }
       if($lunch=="None")
       {
         $lu=0;
         $clu=0;
       }
       else {
         $lu=1;
         $clu=1;
       }
       if($tea=="Yes")
       {
         $te=1;
         $cte=1;
       }
       else {
         $te=0;
         $cte=1;
       }
       if($teasnacks=="Yes")
       {
         $ts=1;
         $cts=1;
       }
       else {
         $ts=0;
         $cts=0;
       }
       if($dinner=="None")
       {
         $di=0;
         $cdi=0;
       }
       else {
         $di=1;
         $cdi=1;

       }
       $total = ($br*$data[0])+($lu*$data[1])+($te*$data[2])+($ts*$data[3])+($di*$data[4]);
       echo"$total";

}

?>
<!DOCTYPE html>
<html>
<head>



</style>
</head>
<body>
<form method="post">
<table>
  <tr>
<!-- The below part is for the table of selecting the menus  -->
    <th>BREAKFAST</th>
    <th>LUNCH</th>
    <th>TEA</th>
    <th>TEA+SNACKS</th>
    <th>DINNER</th>
    <th>AMOUNT</th>
    <th></th>
  </tr>
  <tr>



    <td ><select name="break">
  <option >No</option>
  <option >Yes</option></select></td>

  <td ><select name="lunch">
    <option id="none">None</option>
    <option id="lu_v">Veg</option>
    <option  id="lu_v+e">Veg+Egg</option>
    <option id="lu_v+f">Veg+Fish</option>
    <option id="lu_v+c">Veg+Chicken</option>
   <option id="lu_nv">NonVeg</option>
  <option id="lu_nv-e">NonVeg-Egg</option>
  <option id="lu_nv-f">NonVeg-Fish</option>
  <option id="lu_nv-c">NonVeg-Chicken</option>
  </select></td>
     <td ><select name="tea">
  <option >No</option>
  <option >Yes</option></td>
     <td ><select name="tea+sn">
  <option >No</option>
  <option >Yes</option></td>
  <td ><select name="dinner">
    <option id="none">None</option>
    <option id="di_v">Veg</option>
    <option  id="di_v+e">Veg+Egg</option>
    <option id="di_v+f">Veg+Fish</option>
    <option id="di_v+c">Veg+Chicken</option>
   <option id="di_nv">NonVeg</option>
  <option id="di_nv-e">NonVeg-Egg</option>
  <option id="di_nv-f">NonVeg-Fish</option>
  <option id="di_nv-c">NonVeg-Chicken</option>
</select></td>
  <td><input type="text" value="<?php echo @$total;?>"/></td>
   <td> <button type="button" name="view"  id="view" onclick="<?php func();?>">View</button></td>

   <td> <input type="submit" name="submit"  id="submit"></td>


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
</form>
<?php
include"header.php";
include"dbconnect.php";

 if(isset($_POST['submit']))
// {if(@$q or @$qq)
echo"<h2>Value Successfully Updated</h2>";
else
echo"<h2>Value Updation Unsuccessfull!!!!</h2>";
 ?>
</body>
</html>
