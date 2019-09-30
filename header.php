<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">


<title>Cochin University</title>
<style type="text/css">

    body{


        padding-top: 140px;
        padding-bottom: 40px;
    }
    .container{
        width: 80%;
        margin: 0 auto;
        font-size: 20px;
    }
    .fixed-header{
        width: 100%;
        position: fixed;
        background: linear-gradient(to left ,rgba(255,0,0,0),rgb(150,10,10));
		    padding: 20px 0;

        color: #fff;

    }


	 .fixed-footer{
        width: 100%;
        position: fixed;
        background: #333;
        padding: 10px 0;
        color: #fff;
        margin: auto;
    }

    .fixed-header{
        top: 0;
        position:fixed;
		background-size:100% 100%;
    padding-bottom: 10px;
   
/*flex-shrink:0;*/



    }

    .fixed-footer{
        bottom: 0;

    /*flex-shrink:0;*/
    }
    .background-image{
	width=50px;
	}
  #arrow{

    margin-left: 400px;
  }
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }
    .container p{
        line-height: 200px;
    }
	#image{
			margin-top:-10px;
			margin-left:-100px;
			}
      #developer{
        color: white;
      }
	.headertext{
				margin-top:-100px;
				margin-left:10px;
				}
  .subtext{
    margin-top: 10px;
  }

</style>
</head>
<body>

    <div class="fixed-header" >
        <div class="container">
		<img id="image" src="logo3.jpg" style="width:100px; height:100px" ></img>
		<div class="headertext"><font size="5">COCHIN UNIVERSITY OF SCIENCE AND TECHNOLOGY</font></div><br>
    <div clas="subtext"><font size="4">&nbsp&nbspATHULYA GIRLS HOSTEL</font></div>
            <nav align="right"  >

                <a style="color:black" href="optionusers.php">Home</a>
                <a href="#" style="color:black" href="#">About</a>
                <a id="logout" href="#" style="color:black" src="bg.jpg">Logout</a>

            </nav>
        </div>
    </div>

    <div class="container">

    </div>
    <div class="fixed-footer">
        <div class="container"><?php $r = date("Y"); echo"Copyright © $r Cochin University of Science And Technology" ?><a id="developer" href="#"><span id="arrow">&#8594;</span>Developers</a></div>
    </div>
</body>
</html>
<?php

include"dbconnect.php";
date_default_timezone_set('Asia/Kolkata');
// session_start();
//   if(isset($_POST['logout']))
//   {
//
//     $_SESSION['fromMain'] = "false";
//     $_SESSION['fromPurchases'] = "false";
//
//   header("Location: Adminlogin.php");
//   exit();
// //  echo "<script> window.location.assign('Purchases.php'); </script>";
// }
?>
