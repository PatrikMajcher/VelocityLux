<?php
session_start();
include_once '../includes/connection_db.php';

// Check if the user is an admin (you may have a better way to determine this)
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../index.php'); // Redirect unauthorized users
    exit();
}

// Retrieve car details based on the passed car_id
if (isset($_GET['id'])) {
    $car_id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM cars WHERE car_id = $car_id");
    $car = mysqli_fetch_assoc($result);

    // Redirect if the car is not found
    if (!$car) {
        header('Location: ../car_list.php');
        exit();
    }
} else {
    // Redirect if no car_id is provided
    header('Location: ../car_list.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Car</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include_once '../includes/navbar.php'; ?>

    <div class="container mt-4">
        <h2>Update Car</h2>

        <form action="../components/admin_operations.php" method="post">
            <input type="hidden" name="car_id" value="<?php echo $car['car_id']; ?>">

            <div class="mb-3">
                <label for="brand" class="form-label">Brand:</label>
                <input type="text" class="form-control" name="brand" value="<?php echo $car['brand']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Model:</label>
                <input type="text" class="form-control" name="model" value="<?php echo $car['model']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year:</label>
                <input type="number" class="form-control" name="year" value="<?php echo $car['year']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="rental_rate" class="form-label">Rental Rate:</label>
                <input type="number" step="0.01" class="form-control" name="rental_rate" value="<?php echo $car['rental_rate']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="image_url" class="form-label">Image URL:</label>
                <input type="text" class="form-control" name="image_url" value="<?php echo $car['image_url']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary" name="update_car">Update Car</button>
        </form>
    </div>
</body>

</html>