<?php

include('db.php');

if (isset($_POST['save_users'])) {
  $surname = $_POST['surname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $phonenumber = $_POST['phonenumber'];
  $email = $_POST['email'];
 
  $query = "INSERT INTO users(surname, lastname, address, phonenumber, email) VALUES ('$surname', '$lastname','$address','$phonenumber','$email')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'User Has Been Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>