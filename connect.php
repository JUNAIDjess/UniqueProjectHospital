<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "login";

// Establishing Connection with Server by passing server_name, user_id and password as a parameter

$conn = new mysqli($host, $user, $pass, $db);
if($conn -> connect_error){
    echo "Failed to connect DB" .$connect -> connect_error;
}
?>