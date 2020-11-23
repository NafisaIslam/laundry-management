<?php
    require_once('mysqli_connect.php');
    session_start();
    $uname = "";
    $addr = "";
    $productname = "";
    $quantity = "";
    $pay = "";
    $status = "";

    $data_missing = array();

    if(empty($_POST['UserName'])){
        $data_missing[]='Username';
    }
    else{
   $uname = $_POST['UserName'];
    }
    
    if(empty($_POST['address'])){
        $data_missing[]='Address';
    }
    else{
   $addr = $_POST['address'];
    }
    
    if(empty($_POST['ProductName'])){
        $data_missing[]='Product Name';
    }
    else{
   $productname = $_POST['ProductName'];
    }

    if(empty($_POST['quantity'])){
      $data_missing[]='quantity';
  }
  else{
    $quantity = $_POST['quantity'];
  }
  if(empty($_POST['pay'])){
    $data_missing[]='pay';
}
else{
  $pay = $_POST['pay'];
}
  $status = "Order Placed";

    $inserted = false;

    if(empty($data_missing)){
        $query = "INSERT INTO orders (uname, address, productname, quantity, payment, status) VALUES ('".$uname."','".$addr."','".$productname."','".$quantity."','".$pay."','".$status."')";
        mysqli_query($dbc,$query); //this inserts into database
        $inserted = true;
        #$cat_rs = mysqli_fetch_array($query);
    }


   
?>
<!DOCTYPE html5>
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
<div id="messagebox">
    
</div>
<h1>Place your order here!</h1>
   <form action=""  method="POST">
    <label for="uname">Username * </label>
    <input type="text" id="uname" name="UserName" required placeholder="Enter your username..">
    <label for="addr">Address * </label>
    <input type="text" id="addr" name="address"  required placeholder="Enter your address..">
    <?php
     $res = "SELECT productname FROM category";
     $query = mysqli_query($dbc,$res);
     ?>
   <label for="pro" required >Choose Product * </label>
    <select name ="ProductName">
    <?php
    while ($rows =$query->fetch_assoc()){
    $productname=$rows['productname'];
    echo "<option value='$productname'>$productname</option>";
    }
    ?>
  </select>
  <label for="qty" required >Quantity * </label>
  <select name="quantity">
  <?php
  for ($x = 0; $x <= 50; $x++) {
    echo "<option value='$x'>$x</option>";
  }
  ?>
  </select>
  <label for='pay' required >Choose Your Payment Method:*</label>
        <select name='pay' id='pay'>
          <option value='BKash'>Bkash</option>
          <option value='CashOnDelivery'>CashOnDelivery</option>
        
        </select>
  <input type="submit" value="Add to cart" onclick="messageBox()">
  </form>

  <form action='dashboard.php?uname="<?php echo $uname;?>"' method="POST">
    <input type="hidden" name="uname"  value="<?php echo $uname;?>">
    <input type="submit" value="Go to Dashboard!">
  </form>
  <a href="index.php">Log Out</a>

</div>
<div>
</div>
<script>
  function messageBox() {
    // document.getElementById('messagebox').innerHTML= "Order has been Placed";
    // setTimeout(function() {document.getElementById('messagebox').innerHTML='';},5000);
    alert('Your order has been placed!');
  }
</script>
</body>
</html>