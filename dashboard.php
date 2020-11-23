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
<div>
<?php

function whichPath(){
    if(name == 'BKash'){
        return 'bkash.php';
    }
    else{
        return 'confirm.php';
    }
}
error_reporting(E_ALL ^ E_NOTICE);  

$price_p = "";
$qty_p = "";
$sum = 0;
$ini_prod = 0;

  require_once('mysqli_connect.php');
  session_start();
      $sql = "SELECT orders.productname, category.Pricepp, orders.quantity, orders.payment, orders.status
      FROM orders 
      INNER JOIN category
      ON orders.productname=category.productname
      #error
      WHERE orders.uname = '{$_POST["uname"]}'" ;
      
      $query = mysqli_query($dbc,$sql);
      $cat_rs = mysqli_fetch_array($query);
      #error
      echo "<h1>Welcome {$_POST["uname"]}</h1>"; 
      echo "<h4 style='color:#ff4d00;text-align:center'>Your Orders:</h4>";
      echo "<table border='1' style='margin-left:auto;margin-right:auto;color:#b34700;'>
      <tr>
              <th>Your orders</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Payment Method</th>
              <th>Status</th>
              <th>Action</th>
              </tr>";
       

      do{
         echo "<td>".$cat_rs['productname']."</td>";
         $pname = $cat_rs['productname'];
          echo "<td>".$cat_rs['Pricepp']."</td>";
          $price = $cat_rs['Pricepp'];
          $price_p = (int)$price; 
          echo "<td>".$cat_rs['quantity']."</td>";
          $quantity = $cat_rs['quantity'];
          $qty_p = (int)$quantity;
          echo "<td>".$cat_rs['payment']."</td>";
          echo "<td>".$cat_rs['status']."</td>";
          $ini_prod = $price_p * $qty_p;
          $sum = $ini_prod + $sum;
          ?>
          
          <form action='delete.php?productname="<?php echo $pname;?>"' method="post"> 
          <input type="hidden" name="productname" value="<?php echo $cat_rs['productname']; ?>">
          
          <td><input type="submit" value="Delete"></form>
          <form action='update.php?Pricepp="<?php echo $price;?>"' method="post">
          <input type="hidden" name="productname" value="<?php echo $cat_rs['Pricepp'];?>">
          </form></td>
          </tr>
          <?php
      }
  while ($cat_rs = mysqli_fetch_array($query));
      echo "</table>";
          echo "<h3><div style='text-align:center;font;color:#ff4d00 '>
          Total: $sum 
          </div></h3>";

        echo
        "
        <div>
        <a href='customers.php' style='text-decoration:none;'>Place more orders</a> <br /> 
        <div>
        <a href='confirm.php' style='text-decoration:none;'>Confirm Order</a>
        </div>
        ";
    
    // else{
    //     echo "<h1>Your username does not exist. Please log in or register to make order</h1>";
    //     echo "<h2 style='color:#ff4d00;text-align:center'>Go to <a href='index.php' >start page</a></h2>";
    // }
          ?>

          

          
      