<?php

include 'connect.php'; // include connect.php file

if(isset($_POST['signup'])){
    $firstname = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $password = md5($password); // encrypting password
    $checkEmail = "SELECT * FROM User WHERE email = '$email'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        echo "Email already exists";
}
else{
    $insertQuery = "INSERT INTO users (name, email, password) VALUES ('$firstname', '$email', '$password')";
    if($conn->query($insertQuery) === TRUE){
        header('Location: index.php');
    }
    else{
        echo "Error: " .$conn->error;
    }
}
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password); // encrypting password
    $sql = "SELECT * FROM User WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header('Location: homepage.php');
        exit();
    }
    else{
        echo "Not Found, Incorrect Email Or Password";
    }
}
?>
