<?php
    require 'config.php';

    $name = $_POST['name'];
    $name = mysqli_real_escape_string($conn , $name);

    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conn , $email);
    
     $password = $_POST['password'];
    $password = mysqli_real_escape_string($con , $password);
    $password = md5($password);

   
    $balance = $_POST['balance'];
    $balance = mysqli_real_escape_string($conn , $balance);

        $insert_query = "INSERT INTO users (name,email,password,balance) VALUES ('$name','$email','$password','$balance')";
        $inser_query_result = mysqli_query($conn , $insert_query) or die(mysqli_error($conn));
        $user_id = mysqli_insert_id($conn);
        $_SESSION['email'] = $email;
        header('location:transfermoney.php');
        
