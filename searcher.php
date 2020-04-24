<?php

include('db.php');

$palabra = $_POST['palabra'];
$query = "SELECT * FROM users lastname LIKE '%$palabra%'";
$result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  } 
  
  $_SESSION['message'] = 'Your search has been completed';
  $_SESSION['message_type'] = 'success';
header('Location: index.php');

?>