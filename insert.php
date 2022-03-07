<?php

    include 'config.php';
    $conn=getConnection();
    if($conn !=null && isset($_POST['next'])){
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];

        $sql = "INSERT INTO payment (name,number,email) VALUES ('$name','$number','$email')";

        if ($conn ->query($sql)) {
            header('location: https://rzp.io/l/Gyo3ySb4Qp');
        }else{
            echo "failed" ;
        }

    }else{
        echo "failed" ;
    }

?>