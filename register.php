<?php
include 'connect.php';

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    // Check if passwords match
    if ($password !== $confirmPassword) {
        header("Location: index.php?error=password_mismatch");
        exit();
    }

//     // Hash the password securely
//     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

//     // Check if email already exists (Prepared Statement)
//     $stmt = $conn->prepare("SELECT * FROM User WHERE `Email ID` = ?");
//     $stmt->bind_param("s", $email);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows > 0) {
//         // Email already exists
//         header("Location: index.php?error=email_exists");
//         exit();
//     } else {
//         // Insert new user securely
//         $stmt = $conn->prepare("INSERT INTO User (Name, `Email ID`, Password) VALUES (?, ?, ?)");
//         $stmt->bind_param("sss", $name, $email, $hashedPassword);
        
//         if ($stmt->execute()) {
//             header("Location: index.php?signup=success");
//             exit();
//         } else {
//             header("Location: index.php?error=signup_failed");
//             exit();
//         }
//     }
// }
$checkEmail = "SELECT * FROM User WHERE `Email ID` = '$email'";
        $result = $conn->query($checkEmail);
        if($result->num_rows > 0){
            echo "Email already exists";
        }
        else{
            $insertQuery = "INSERT INTO User(Name, `Email ID`, Password) VALUES ('$name', '$email', '$password')";
            if($conn->query($insertQuery) == TRUE){
                header("location: index.php");
            }
            else{
                echo "Error: " .$conn->error;
            }
        }
    }

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check user credentials
    $sql = "SELECT * FROM User WHERE `Email ID` = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
    //     if (password_verify($password, $row['Password'])) {
    //         session_start();
    //         $_SESSION['email'] = $row['Email ID'];
    //         header("Location: homepage.php");
    //         exit();
    //     } else {
    //         // Incorrect password
    //         header("Location: index.php?error=wrong_password");
    //         exit();
    //     }
    // } else {
    //     // Email not found
    //     header("Location: index.php?error=email_not_found");
    //     exit();
    // }
           session_start();
           $row = $result->fetch_assoc();
           $_SESSION['email'] = $row['Email ID'];
           header("Location: homepage.php");
           exit();
        }
        else{
            echo "Not Found, Invalid Email or Password";
        }
}
?>
