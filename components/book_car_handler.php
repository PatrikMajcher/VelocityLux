<?php
session_start();
include('../includes/connection_db.php');

if (isset($_POST['book_car'])) {
    // Validate and sanitize user input
    $user_id = $_SESSION['user_id'];
    $car_id = $_POST['car_id'];
    $start_date = $_POST['start_date']; // Make sure to validate and sanitize input
    $end_date = $_POST['end_date']; // Make sure to validate and sanitize input

    // Retrieve car details to calculate total cost
    $car_query = "SELECT rental_rate FROM cars WHERE car_id = ?";
    $car_stmt = mysqli_prepare($conn, $car_query);
    mysqli_stmt_bind_param($car_stmt, "i", $car_id);
    mysqli_stmt_execute($car_stmt);
    mysqli_stmt_bind_result($car_stmt, $rental_rate);
    mysqli_stmt_fetch($car_stmt);
    mysqli_stmt_close($car_stmt);

    // Calculate total cost based on rental rate and number of days
    $total_cost = calculateTotalCost($rental_rate, $start_date, $end_date);

    // Insert into bookings table
    $insertQuery = "INSERT INTO bookings (user_id, car_id, start_date, end_date, total_cost) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insertQuery);
    mysqli_stmt_bind_param($stmt, "iissd", $user_id, $car_id, $start_date, $end_date, $total_cost);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Booking successful!";
    } else {
        echo "Error booking car: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

function calculateTotalCost($rental_rate, $start_date, $end_date)
{
    // Example calculation: total cost = rental rate * number of days
    $days_diff = (strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24);
    $total_cost = $rental_rate * $days_diff;

    // You might want to add additional logic for calculating total cost based on your requirements

    return $total_cost;
}
