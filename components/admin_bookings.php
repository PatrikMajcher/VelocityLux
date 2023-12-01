<?php
session_start();

include('../includes/connection_db.php');
$result = mysqli_query($conn, "SELECT * FROM bookings");
$bookings = mysqli_fetch_all($result, MYSQLI_ASSOC);

$totalEarnings = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/ecodrive/css/style.css">
</head>

<body>
    <?php include_once '../includes/navbar.php'; ?>
    <div class="container mt-4">
        <h2>Booking Information</h2>

        <!-- Display booking details in a table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>User ID</th>
                    <th>Car ID</th>
                    <th>Pickup Date</th>
                    <th>Return Date</th>
                    <th>Price</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookings as $booking) : ?>
                    <tr>
                        <td><?php echo $booking['booking_id']; ?></td>
                        <td><?php echo $booking['user_id']; ?></td>
                        <td><?php echo $booking['car_id']; ?></td>
                        <td><?php echo $booking['start_date']; ?></td>
                        <td><?php echo $booking['end_date']; ?></td>
                        <td>$<?php echo $booking['total_cost']; ?></td>

                    </tr>
                    <?php $totalEarnings += $booking['total_cost']; ?>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-end"><strong>Total Earnings:</strong></td>
                    <td><strong>$<?php echo $totalEarnings; ?></strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qDznJcG9eJ/ouD2L52W9FqDKxCVDRUdhxid9qZbbF2zj+2E1I6LbXOjk2L+qbCbc" crossorigin="anonymous"></script>
</body>

</html>