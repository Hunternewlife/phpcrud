<?php include('includes/header.php'); ?>
<?php include("db.php") ?>



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
                <form action="searcher.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="word" class="form-control" placeholder="Search by Lastname" autofocus>
                    </div>                
                    <input type="submit" class="btn btn-success btn-block" name="lookfor" value="Search User"> 
                    
                    <a href="index.php?" class="btn btn-danger btn-block" > return <i class="fas fa-exchange-alt"></i> </a>
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
                        
                        </tr>
                     <?php } ?>                  
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>