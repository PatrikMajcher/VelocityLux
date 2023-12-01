<?php
session_start();
include_once '../includes/navbar.php';
include_once '../includes/connection_db.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: /ecodrive/pages/login.php");
    exit();
}

// Fetch user's bookings from the database
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM bookings WHERE user_id = $user_id";
$result = mysqli_query($conn, $query);

// Count the number of bookings
$yourBookings = mysqli_num_rows($result);

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoDrive Car Rentals</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/ecodrive/css/style.css">
</head>

<body>
    <?php include_once '../includes/navbar.php'; ?>
    <div class="container mt-4">
        <h2>Welcome User!</h2>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Your Bookings</h5>
                        <p class="card-text">You have <?php echo $yourBookings; ?> booking(s).</p>
                        <a href="/ecodrive/components/view_booking.php?>" class="btn btn-primary">View Bookings</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <p class="card-text">View and update your profile information.</p>
                        <a href="#" class="btn btn-primary">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>