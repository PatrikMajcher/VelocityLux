<?php
session_start();
include_once '../includes/connection_db.php';

// Check if the user is an admin (you may have a better way to determine this)
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../index.php'); // Redirect unauthorized users
    exit();
}

// Create Car
if (isset($_POST['create_car'])) {
    // Process the form data and insert the new car into the database
    $brand = mysqli_real_escape_string($conn, $_POST['brand']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $rental_rate = mysqli_real_escape_string($conn, $_POST['rental_rate']);
    $image_url = mysqli_real_escape_string($conn, $_POST['image_url']);

    $sql = "INSERT INTO cars (brand, model, year, rental_rate, image_url) VALUES ('$brand', '$model', '$year', '$rental_rate', '$image_url')";
    mysqli_query($conn, $sql);

    // Redirect to car_list.php after creating the car
    header('Location: ../pages/car_list.php');
    exit();
}

// Update Car
if (isset($_POST['update_car'])) {
    // Process the form data and update the existing car in the database
    $car_id = mysqli_real_escape_string($conn, $_POST['car_id']);
    $brand = mysqli_real_escape_string($conn, $_POST['brand']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $rental_rate = mysqli_real_escape_string($conn, $_POST['rental_rate']);
    $image_url = mysqli_real_escape_string($conn, $_POST['image_url']);

    $sql = "UPDATE cars SET brand='$brand', model='$model', year='$year', rental_rate='$rental_rate', image_url='$image_url' WHERE car_id=$car_id";
    mysqli_query($conn, $sql);

    // Redirect to car_list.php after updating the car
    header('Location: ../pages/car_list.php');
    exit();
}

// Delete Car
if (isset($_POST['delete_car'])) {
    // Process the form data and delete the car from the database
    $car_id = mysqli_real_escape_string($conn, $_POST['car_id']);

    $sql = "DELETE FROM cars WHERE car_id=$car_id";
    mysqli_query($conn, $sql);

    // Redirect to car_list.php after deleting the car
    header('Location: ../pages/car_list.php');
    exit();
}

// Handle other admin operations as needed
