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
    require_once("mysqli_connect.php");
    $name = "";
    $email = "";
    $pass = "";
    $cpass = "";
    $phone = "";
    $query = "";

    $data_missing = array();

    if(empty($_POST['UserName'])){
        $data_missing[]='Username';
    }
    else{
   $name = $_POST['UserName'];
    }
    
    if(empty($_POST['Email'])){
        $data_missing[]='Email';
    }
    else{
   $email = $_POST['Email'];
    }
    
    $cpass = $_POST['ConfPassword'];
    if(empty($_POST['Password']) && !($_POST['Password'] == $cpass)){
        $data_missing[]='Password';
        echo("<h3>Your password does not match! Please check again. </h3>");
    }
    else{
   $pass = $_POST['Password'];
    }
    
    if(empty($_POST['PhoneNumber'])){
        $data_missing[]='PhoneNumber';
    }
    else{
   $phone = $_POST['PhoneNumber'];
    }

    $inserted = false;

    if(empty($data_missing)){
        $query = "INSERT INTO users (uname, email, password, phone) VALUES ('".$name."','".$email."','".$pass."','".$phone."')";
        mysqli_query($dbc,$query); //this inserts into database
        $inserted = true;
    }
?>

<div id="wrapper">
                <div id="main">
                <div class = sin><?php
		if ($inserted){
            echo "You have successfully registered!"; 
		}
                    
	  else{
            echo "Sorry, some information was missing. Please go back and check <br />";
            echo 'You need to enter the following data:<br />';
            foreach($data_missing as $missing){
                echo "<strong>$missing</strong><br />";
            }
      }
      ?>
      </div>
	    <p>
        <form action="index.php">
		  <input type="submit" value="Go to Login"; />
		</form>
		</p>
	
	</div></div>

</div>
</body>
</html>