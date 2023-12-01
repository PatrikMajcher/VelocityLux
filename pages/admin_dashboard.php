<?php
session_start();
include_once '../includes/navbar.php';
include_once '../includes/connection_db.php';

// Check if the user is logged in and has an admin role
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: /ecodrive/pages/login.php');
    exit();
}

// Fetch available cars from the database
$result = mysqli_query($conn, "SELECT * FROM cars WHERE available = 1");
$cars = mysqli_fetch_all($result, MYSQLI_ASSOC);
$totalCars = mysqli_num_rows($result);

$newBookingsResult = mysqli_query($conn, "SELECT COUNT(*) as count FROM bookings ");
$newBookingsData = mysqli_fetch_assoc($newBookingsResult);
$newBookings = $newBookingsData['count'];
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/ecodrive/css/style.css">
</head>

<body>
    <? include_once 'includes/navbar.php'; ?>
    <div class="container mt-4">
        <h2>Welcome Admin!</h2>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Cars</h5>
                        <p class="card-text">You have <?php echo $totalCars; ?> cars in the inventory.</p>
                        <a href="/ecodrive/pages/car_list.php" class="btn btn-primary">View Cars</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">New Bookings</h5>
                        <p class="card-text">You have <?php echo $newBookings; ?> new booking(s).</p>
                        <a href="/ecodrive/components/admin_bookings.php" class="btn btn-primary">View Bookings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <h3>CRUD Operations</h3>
            <hr>
            <div class="d-flex m-3 gap-2">
                <a href="/ecodrive/components/create_car.php"><button class="btn btn-Primary">Add Car</button></a>
                <a href="/ecodrive/pages/car_list.php"><button class="btn btn-success">Update Cars</button></a>
                <a href="/ecodrive/pages/car_list.php"><button class="btn btn-danger">Remove Car</button></a>
            </div>
        </div>
</body>

</html>