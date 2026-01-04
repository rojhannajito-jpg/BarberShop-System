<?php 
include 'db.php';
if (isset($_POST['signup'])) {
    // These names must match the 'name' attribute in your index.php
    $user = $_POST['username']; 
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Account created!'); window.location.href='index.php';</script>";
    }
}

?>
