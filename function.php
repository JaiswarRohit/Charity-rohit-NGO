<?php
    include("config.php");
    $conn=getConnection();
    if($conn !=null && isset($_POST['send'])){    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = mysqli_query($conn,"INSERT INTO charity (name,email,message) VALUES ('$name','$email','$message')") ;

        if ($sql) {
            header('location: index.php');
        } else {
            echo "Something was wrong";
        }
    }
?>
