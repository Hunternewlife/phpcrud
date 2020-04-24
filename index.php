<?php include("db.php") ?>
<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            
      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
            

            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control" placeholder="Name" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Address" >
                    </div>
                    <div class="form-group">
                        <input type="number" name="phonenumber" class="form-control" placeholder="Phone Number" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="email" >
                    </div>
                  
                    <input type="submit" class="btn btn-success btn-block" name="save_users" value="Save User"> 
                    <a href="search_task.php?" class="btn btn-success btn-block" > Search User <i class="fas fa-search"></i></a>
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Surname</th>
                        <th>Lastname</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM users";
                    $result_users = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result_users)){ ?>
                        <tr>
                        <td><?php echo $row['surname'] ?></td>
                        <td><?php echo $row['lastname'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['phonenumber'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary" > <i class="fas fa-edit"></i> </a>
                            <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" > <i class="fas fa-user-times"></i> </a>                          
                        </td>
                        </tr>
                    <?php } ?>                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>

    
