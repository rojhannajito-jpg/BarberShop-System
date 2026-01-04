<?php
// Database connection details
$conn = mysqli_connect("localhost", "root", "", "barbershop_db");

// Check if it worked
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>