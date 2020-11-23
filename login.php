<?php 
    require_once("mysqli_connect.php");
    session_start();
    $prodname = "";
    $price = "";
    $data_missing = array();

    if(empty($_POST['ProdName'])){
        $data_missing[]='Product Name is Missing';
    }
    else{
      $prodname = $_POST['ProdName'];
    }

    if(empty($_POST['Price'])){
      $data_missing[]='Price is Missing';
  }
  else{
 $price = $_POST['Price'];
  }

    $inserted = false;

    if(empty($data_missing)){
        $query = "INSERT INTO category (productname, Pricepp) VALUES ('".$prodname."','".$price."')";
        mysqli_query($dbc,$query); //this inserts into database
        $inserted = true;
    }

		if ($inserted){
      echo "You have successfully added category!"; 
      header("Location: category.php");
		}
                    
	  else{
            echo "Sorry, some information was missing. Please go back and check <br />";
            echo 'You need to enter the following data:<br />';
            foreach($data_missing as $missing){
                echo "<strong>$missing</strong><br />";
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
<h1>Add Category</h1>
<form action="" method="POST">
    <label for="prod">Product Name </label>
    <input type="text" id="prod" name="ProdName" require placeholder="Write Product Name..">
	<label for="price">Price Per Piece</label>
    <input type="text" id="price" name="Price" required placeholder="Write price per piece..">
	<input type="submit" value="Add to the Product list">
	<!-- <p ><b><a href="signup.php" style="color:White;">Don't have an account? Sign Up Now!!</a></b></p> -->
	</div>
</div>
</body>
</html>