<?php
session_start();
include_once '../includes/navbar.php';
include_once '../includes/connection_db.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: /ecodrive/pages/login.php"); // Redirect to login page if not logged in
    exit();
}

// Fetch all bookings for the current user
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM bookings WHERE user_id = $user_id";
$result = mysqli_query($conn, $query);

// Check if bookings exist
if ($result && mysqli_num_rows($result) > 0) {
    $bookings = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $bookings = []; // Empty array if no bookings found
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/ecodrive/css/style.css">
</head>

<body>
    <?php include_once '../includes/navbar.php'; ?>
    <div class="container mt-4">
        <h2>Your Bookings</h2>

        <!-- Display the list of bookings -->
        <ul class="list-group fs-4">
            <?php foreach ($bookings as $booking) : ?>
                <li class="list-group-item">
                    Booking ID: <?php echo $booking['booking_id']; ?>
                    <a href="/ecodrive/components/view_booking_details.php?booking_id=<?php echo $booking['booking_id']; ?>" class="btn btn-primary btn-sm float-end">View Details</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>