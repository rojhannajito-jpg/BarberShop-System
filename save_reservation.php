<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['full_name'];
    $date = $_POST['res_date'];
    $time = $_POST['res_time'];
    $service = $_POST['service_name'];
    $style = $_POST['selected_style'];

    $sql = "INSERT INTO reservations (full_name, res_date, res_time, service, style) 
            VALUES ('$name', '$date', '$time', '$service', '$style')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Reservation Successful!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>
