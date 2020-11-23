<?php
    require_once('mysqli_connect.php');
   session_start();
   error_reporting(E_ALL ^ E_NOTICE);
   $passed = false;
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = mysqli_real_escape_string($dbc,$_POST['Email']);
      $pass = mysqli_real_escape_string($dbc,$_POST['Password']); 
      
      $sql = "SELECT * FROM users WHERE email LIKE BINARY '$email' AND password LIKE BINARY '$pass' ";
      $query = mysqli_query($dbc,$sql);
      if($query){
        $row=mysqli_fetch_row($query);
        $dbEmail=$row[1];
        $dbPass=$row[2];
        // echo $dbPass;
        
    }
    if ($email==$dbEmail && $pass==$dbPass)
    {
       $_SESSION['email']=$email;
       
       if($dbEmail == "admin@haatprotidin.com"){
        header('Location: admin.php');
       }
       
       else{
         header("Location: customers.php");
       }
       
            
    }
      
      else {
        $error = "Your Login Name or Password is invalid";
        $passed = true;
      }
    }
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
 
</div>
<?php
  if($passed){
    echo "<h1>".$error."</h1>";
  }
?>
<div>
 <h1>Sign In!</h1>
  <form action="" method="POST">
    <label for="email">Email </label>
    <input type="text" id="email" name="Email" required placeholder="Your Email Adress..">
	<label for="pass">Password</label>
    <input type="password" id="pass" name="Password" required placeholder="Your Password..">
	<input type="submit" value="Submit">
	<p ><b><a href="signup.php" style="color:White;">Don't have an account? Sign Up Now!!</a></b></p>
	</div>
	
</div>
</body>
</html>