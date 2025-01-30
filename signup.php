<?php

include 'connect.php'; // include connect.php file

if(isset($_POST['signup'])){
    $firstname = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $password = md5($password); // encrypting password
    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        echo "Email already exists";
}
