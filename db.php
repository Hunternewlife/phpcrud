<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'usuarios'
);

#comprobar si esta conectada
/* if (isset($conn)){
    echo "DB is connected";
}
 */
?>