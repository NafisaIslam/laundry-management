<?php 

require_once('mysqli_connect.php');
session_start();


//Define the query
$query = "DELETE FROM category WHERE productname='{$_POST["productname"]}' LIMIT 1";

//sends the query to delete the entry
mysqli_query($dbc, $query);


if (mysqli_query($dbc, $query)) { 
//if it updated


            header("Location: category.php");

 } else { 
//if it failed
?>

            <strong>Deletion Failed</strong><br /><br />


<?php
} 
?>