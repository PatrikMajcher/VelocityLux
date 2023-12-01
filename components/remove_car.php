<?php
include('../includes/connection_db.php');

if (isset($_GET['id'])) {
    $car_id = $_GET['id'];

    // Perform the deletion query
    $deleteQuery = "DELETE FROM cars WHERE car_id = $car_id";
    $result = mysqli_query($conn, $deleteQuery);

    if ($result) {
        // Redirect to the car list page after successful deletion
        header('Location: /ecodrive/pages/car_list.php');
        exit();
    } else {
        echo "Error deleting car: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request. Car ID not provided.";
}
