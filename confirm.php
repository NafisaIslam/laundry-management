<?php 
    require_once("mysqli_connect.php");
    session_start();
  ?>

<!DOCTYPE html>
<html>
<head>

<link type="text/css" rel="stylesheet" href="style.css">
<title>HaatProtidin Laundry Management</title>
 <link rel = "icon" href = "logo02.png">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class= "container">
<div class="header">
 
<img src="logo01.png" alt="banner">
<h1>You have successfully placed your order!<h1>
<h1>Our Bkash Number:<h1>
<p ><a href="index.php" style="color:White;">Log Out</a></p>
<p ><a href="dashboard.php" style="color:White;">Go to Dashboard</a></p>


	<!-- <p ><b><a href="signup.php" style="color:White;">Don't have an account? Sign Up Now!!</a></b></p> -->
	</div>
</div>
</body>
</html>