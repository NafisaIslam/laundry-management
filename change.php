<?php 
error_reporting(E_ALL ^ E_NOTICE);
require_once('mysqli_connect.php');
require_once('vieworder.php');
session_start();


//Define the query
$sql ="UPDATE orders
      SET status='{$_POST['status']}'
      WHERE uname='{$cat_rs['uname']}' LIMIT 1
      ";

//sends the query to delete the entry
mysqli_query($dbc, $query);


if (mysqli_query($dbc, $query)) { 
//if it updated


            header("Location: vieworder.php");

 } else { 
//if it failed
?>

            <strong>Insertion Failed</strong><br /><br />


<?php
} 
?>