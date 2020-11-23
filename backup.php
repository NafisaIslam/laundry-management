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
  require_once('mysqli_connect.php');
  session_start();
      $sql = "SELECT * FROM category ORDER BY productname ASC";
      $query = mysqli_query($dbc,$sql);
      $cat_rs = mysqli_fetch_array($query);
      echo "<h1>Welcome Admin</h1>"; 
      echo "<h4 style='color:#ff4d00;text-align:center'>Category List:</h4>";
      echo "<table border='1' style='margin-left:auto;margin-right:auto;color:#b34700;'>
      <tr>
              <th> Catergory Name</th>
              <th> Price Per Piece</th>
              <th> Operation</th>
              </tr>";
  

      do{
         echo "<td>".$cat_rs['productname']."</td>";
         $pname = $cat_rs['productname'];
          echo "<td>".$cat_rs['Pricepp']."</td>"; ?>
          <form action='delete.php?productname="<?php echo $pname;?>"' method="post"> 
          <input type="hidden" name="productname" value="<?php echo $cat_rs['productname']; ?>">
          <?php
          echo "<td>". '<input type="submit" value="Delete">'.'<input type="submit" value="Edit">'."</td>";
          echo "</tr>";
          echo "</form>";
      }
  while ($cat_rs = mysqli_fetch_array($query));
      echo "</table>";
          ?>
          <a href="admin.php">GO TO ADMIN!</a>
</div>
</body>
</html>
  

