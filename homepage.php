<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <div style="text-align: Centre; padding: 15%;">
        <p style= "font-size: 50px; font-weight: bold;">Hello 
             <?php 
             if(isset($_SESSION['email'])){
                 $email = $_SESSION['email'];
                 $query = mysqli_query($conn, "SELECT User. * FROM 'users' WHERE users.email = '$email'");
                 while($row = mysqli_fetch_array($query)){
                     echo $row['name'];
                 }
                }
                ?>
                :)</p>
                <a href="logout.php">Logout</a>
</body>
</html>