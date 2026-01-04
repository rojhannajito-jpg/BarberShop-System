<?php
session_start();
include 'db.php';
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$user'");
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($pass, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        header("Location: reservation.php"); // Goes to reservation after login
    } else {
        echo "<script>alert('Wrong username or password'); window.location.href='index.php';</script>";
    }
}
?>