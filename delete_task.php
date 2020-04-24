<?php 
    include("db.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM users WHERE id= $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }
        $_SESSION['message'] = "User has been deleted Succesfully";
        $_SESSION['message_type'] = "danger";

        header("location: index.php");
    }

?>