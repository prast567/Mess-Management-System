<?php include 'dbconnect.php'; 

$usual_v;
$usual_vc;
$usual_ve;
$usual_vf;
$usual_nv;
$usual_nvc;
$usual_nvf;
$usual_nve;

$query1="SELECT count(id) as count from messjoin where MENU='VEG'";
$query2="SELECT count(id) as count from messjoin where MENU='VC'";
$query3="SELECT count(id) as count from messjoin where MENU='VE'";
$query4="SELECT count(id) as count from messjoin where MENU='VF'";
$query5="SELECT count(id) as count from messjoin where MENU='NV'";
$query6="SELECT count(id) as count from messjoin where MENU='NVC'";
$query7="SELECT count(id) as count from messjoin where MENU='NVF'";
$query8="SELECT count(id) as count from messjoin where MENU='NVE'";

$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$usual_v=$row['count'];
}

$result=mysqli_query($link,$query2);
while($row=mysqli_fetch_assoc($result))
{
	$usual_vc=$row['count'];
}

$result=mysqli_query($link,$query3);
while($row=mysqli_fetch_assoc($result))
{
	$usual_ve=$row['count'];
}

$result=mysqli_query($link,$query4);
while($row=mysqli_fetch_assoc($result))
{
	$usual_vf=$row['count'];
}

$result=mysqli_query($link,$query5);
while($row=mysqli_fetch_assoc($result))
{
	$usual_nv=$row['count'];
}

$result=mysqli_query($link,$query6);
while($row=mysqli_fetch_assoc($result))
{
	$usual_nvc=$row['count'];
}

$result=mysqli_query($link,$query7);
while($row=mysqli_fetch_assoc($result))
{
	$usual_nvf=$row['count'];
}

$result=mysqli_query($link,$query8);
while($row=mysqli_fetch_assoc($result))
{
	$usual_nve=$row['count'];
}


//coupon part veg

$query1="SELECT count(id) as count from coupon where Menu='VEG' and Breakfast=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponvegbreakfast=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='VEG' and Lunch=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponveglunch=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='VEG' and Dinner=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponvegdinner=$row['count'];
}


//couponveg+chicken


$query1="SELECT count(id) as count from coupon where Menu='VC' and Breakfast=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponvegchickenbreakfast=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='VC' and Lunch=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponvegchickenlunch=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='VC' and Dinner=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponvegchickendinner=$row['count'];
}


//coupon veg+egg

$query1="SELECT count(id) as count from coupon where Menu='VE' and Breakfast=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponvegeggbreakfast=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='VE' and Lunch=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponvegegglunch=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='VE' and Dinner=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponvegeggdinner=$row['count'];
}

//coupon veg+fish

$query1="SELECT count(id) as count from coupon where Menu='VF' and Breakfast=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponvegfishbreakfast=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='VF' and Lunch=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponvegfishlunch=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='VF' and Dinner=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponvegfishdinner=$row['count'];
}

//coupon non veg

$query1="SELECT count(id) as count from coupon where Menu='NV' and Breakfast=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnonvegbreakfast=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='NV' and Lunch=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnonveglunch=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='NV' and Dinner=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnonvegdinner=$row['count'];
}


//coupon nonveg-chicken

$query1="SELECT count(id) as count from coupon where Menu='NVC' and Breakfast=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnvcbreakfast=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='NVC' and Lunch=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnvclunch=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='NVC' and Dinner=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnvcdinner=$row['count'];
}


//coupon non veg minus egg

$query1="SELECT count(id) as count from coupon where Menu='NVE' and Breakfast=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnvebreakfast=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='NVE' and Lunch=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnvelunch=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='NVE' and Dinner=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnvedinner=$row['count'];
}


$query1="SELECT count(id) as count from coupon where Menu='NVF' and Breakfast=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnvfbreakfast=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='NVF' and Lunch=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnvflunch=$row['count'];
}

$query1="SELECT count(id) as count from coupon where Menu='NVF' and Dinner=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnvfdinner=$row['count'];
}


//tea part
$query1="SELECT count(id) as count from coupon where Tea=1 OR TeaSnacks=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$coupontea=$row['count'];
}

$query1="SELECT count(id) as count from messjoin";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$usualtea=$row['count'];
}

$query1="SELECT count(id) as count from coupon where TeaSnacks=1 OR Snacks=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponsnacks=$row['count'];
}

$query1="SELECT count(id) as count from messjoin";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$usualsnacks=$row['count'];
}






$query1="SELECT count(id) as count from coupon where Menu='NVF' and Lunch=1";
$result=mysqli_query($link,$query1);
while($row=mysqli_fetch_assoc($result))
{
	$couponnvflunch=$row['count'];
}


?>






<HTML>
<head>
<title>Count</title>

</head>
<body>

<table>
	<tr>
	  <td>Menu</td>
	  <td>Breakfast</td>
	  <td>Lunch</td>
	  <td>Dinner</td>
	</tr>
	<tr>
	  <td>Veg</td>
	  <td><?php echo ($usual_v+$couponvegbreakfast); ?></td>
	  <td><?php echo ($usual_v+$couponveglunch); ?></td>
	  <td><?php echo ($usual_v+$couponvegdinner); ?></td>
	</tr>
	<tr>
	  <td>Veg+Chicken</td>
	  <td><?php echo ($usual_vc+$couponvegchickenbreakfast); ?></td>
	  <td><?php echo ($usual_vc+$couponvegchickenlunch); ?></td>
	  <td><?php echo ($usual_vc+$couponvegchickendinner); ?></td>
	</tr>
	<tr>
	  <td>Veg+Fish</td>
	  <td><?php echo ($usual_vf+$couponvegfishbreakfast); ?></td>
	  <td><?php echo ($usual_vf+$couponvegfishlunch); ?></td>
	  <td><?php echo ($usual_vf+$couponvegfishdinner); ?></td>
	</tr>
	<tr>
	  <td>Veg+Egg</td>
	  <td><?php echo ($usual_ve+$couponvegeggbreakfast); ?></td>
	  <td><?php echo ($usual_ve+$couponvegegglunch); ?></td>
	  <td><?php echo ($usual_ve+$couponvegeggdinner); ?></td>
	</tr>
	<tr>
	  <td>Non. Veg</td>
	  <td><?php echo ($usual_nv+$couponnonvegbreakfast); ?></td>
	  <td><?php echo ($usual_nv+$couponnonveglunch); ?></td>
	  <td><?php echo ($usual_nv+$couponnonvegdinner); ?></td>
	</tr>		  	 
	<tr>
	  <td>Non.Veg-Chicken</td>
	  <td><?php echo ($usual_nvc+$couponnvcbreakfast); ?></td>
	  <td><?php echo ($usual_nvc+$couponnvclunch); ?></td>
	  <td><?php echo ($usual_nvc+$couponnvcdinner); ?></td>
	</tr>
	<tr>
	  <td>Non.Veg-Egg</td>
	  <td><?php echo ($usual_nve+$couponnvebreakfast); ?></td>
	  <td><?php echo ($usual_nve+$couponnvelunch); ?></td>
	  <td><?php echo ($usual_nve+$couponnvedinner); ?></td>
	</tr>
	<tr>
	  <td>Non. Veg-Fish</td>
	  <td><?php echo ($usual_nvf+$couponnvfbreakfast); ?></td>
	  <td><?php echo ($usual_nvf+$couponnvflunch); ?></td>
	  <td><?php echo ($usual_nvf+$couponnvfdinner); ?></td>
	</tr>		
</table>	


<br>
<br>

 DINNER

 <table>
 	<tr>
 		<td>Item</td>
 		<td>Count</td>	
 	</tr>	
    <tr>
 		<td>Chicken</td>
 		<td><?php echo ($usual_vc+$couponvegchickendinner)+($usual_nv+$couponnonvegdinner)+($usual_nve+$couponnvedinner)+($usual_nvf+$couponnvfdinner)?></td>	
 	</tr> 
 	<tr>
 		<td>Fish</td>
 		<td><?php echo ($usual_vf+$couponvegfishdinner)+($usual_nv+$couponnonvegdinner)+($usual_nve+$couponnvedinner)+($usual_nvc+$couponnvcdinner)?></td>	
 	</tr>
 	<tr>
 		<td>Egg</td>
 		<td><?php echo ($usual_ve+$couponvegeggdinner)+($usual_nv+$couponnonvegdinner)+($usual_nvc+$couponnvcdinner)+($usual_nvf+$couponnvfdinner)?></td>	
 	</tr>


  </table>

 <br>
 <br>
 

 TEA AND SNACKS
 <table>
 	<tr>
 		<td>Item</td>
 		<td>Count</td>	
 	</tr>	
    <tr>
 		<td>Tea</td>
 		<td><?php echo ($usualtea+$coupontea)?></td>	
 	</tr> 
 	<tr>
 		<td>Snacks</td>
 		<td><?php echo ($usualsnacks+$couponsnacks)?></td>	
 	</tr>
 	<tr>



</body>

</HTML>