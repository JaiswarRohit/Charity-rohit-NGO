<?php
function getConnection()
{
    $host = 'localhost';
    $db_name = 'id18571533_charity';
    $username = 'id18571533_charityuser';
    $password = 'Rohit@13062001';
    $conn = mysqli_connect($host, $username, $password, $db_name, 3306);
    if ($conn->connect_error) {
        $conn = null;
        echo 'error in connection';
    }
    return $conn;
}
?>