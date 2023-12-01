<?php
session_start();
include_once '../includes/navbar.php';
include_once '../includes/connection_db.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: /ecodrive/pages/login.php"); // Redirect to login page if not logged in
    exit();
}

// Get the booking ID from the URL parameter
if (isset($_GET['booking_id'])) {
    $booking_id = $_GET['booking_id'];

    // Fetch booking details from the database
    $query = "SELECT * FROM bookings WHERE booking_id = $booking_id";
    $result = mysqli_query($conn, $query);

    // Check if the booking exists
    if ($result && mysqli_num_rows($result) > 0) {
        $booking = mysqli_fetch_assoc($result);
    } else {
        // Redirect to a page indicating that the booking was not found
        header("Location: /ecodrive/pages/booking_not_found.php");
        exit();
    }
} else {
    // Redirect to a page indicating that the booking ID is missing
    header("Location: /ecodrive/pages/booking_id_missing.php");
    exit();
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/ecodrive/css/style.css">
</head>

<body>
    <?php include_once '../includes/navbar.php'; ?>
    <div class="container mt-4">
        <h2 class="mb-4">Booking Details</h2>

        <div class="card mb-4">
            <div class="card-header bg-black text-white">
                <h5 class="card-title mb-0">Booking ID: <?php echo $booking['booking_id']; ?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p class="card-text">Car ID: <?php echo $booking['car_id']; ?></p>
                    </div>
                    <div class="col-md-6">
                        <p class="card-text">Start Date: <?php echo $booking['start_date']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="card-text">End Date: <?php echo $booking['end_date']; ?></p>
                    </div>
                    <div class="col-md-6">
                        <p class="card-text">Total Cost: $<?php echo $booking['total_cost']; ?></p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center bg-black">
                <a href="/ecodrive/pages/user_dashboard.php" class="btn btn-primary">Back to User Dashboard</a>
            </div>
        </div>
    </div>
</body>


</html>