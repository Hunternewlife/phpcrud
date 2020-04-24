<?php
include("db.php");
$surname = '';
$lastname = '';
$address= '';
$phonenumber= '';
$email= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM users WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $surname = $row['surname'];
    $lastname = $row['lastname'];
    $address = $row['address'];
    $phonenumber = $row['phonenumber'];
    $email = $row['email'];  
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $surname= $_POST['surname'];
  $lastname= $_POST['lastname'];
  $address= $_POST['address'];
  $phonenumber= $_POST['phonenumber'];
  $email= $_POST['email'];
  

  $query = "UPDATE users set surname = '$surname', lastname = '$lastname', address = '$address', phonenumber = '$phonenumber', email = '$email' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="surname" type="text" class="form-control" value="<?php echo $surname; ?>" placeholder="Update Surname">
        </div>
        <div class="form-group">
          <input name="lastname" type="text" class="form-control" value="<?php echo $lastname; ?>" placeholder="Update Lastname">
        </div>
        <div class="form-group">
          <input name="address" type="text" class="form-control" value="<?php echo $address; ?>" placeholder="Update Address">
        </div>
        <div class="form-group">
          <input name="phonenumber" type="text" class="form-control" value="<?php echo $phonenumber; ?>" placeholder="Update Phonenumber">
        </div>
        <div class="form-group">
          <input name="email" type="text" class="form-control" value="<?php echo $email; ?>" placeholder="Update Email">
        </div>

        
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>