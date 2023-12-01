<?php
session_start();
include_once '../includes/connection_db.php';

// Check if the user is an admin (you may have a better way to determine this)
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../index.php'); // Redirect unauthorized users
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Car</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/ecodrive/css/style.css">
</head>

<body>
    <?php include_once '../includes/navbar.php'; ?>

    <div class="container mt-4">
        <h2>Create New Car</h2>

        <form action="../components/admin_operations.php" method="post">
            <div class="mb-3">
                <label for="brand" class="form-label">Brand:</label>
                <input type="text" class="form-control" name="brand" required>
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Model:</label>
                <input type="text" class="form-control" name="model" required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year:</label>
                <input type="number" class="form-control" name="year" required>
            </div>

            <div class="mb-3">
                <label for="rental_rate" class="form-label">Rental Rate:</label>
                <input type="number" step="0.01" class="form-control" name="rental_rate" required>
            </div>

            <div class="mb-3">
                <label for="image_url" class="form-label">Image URL:</label>
                <input type="text" class="form-control" name="image_url" required>
            </div>

            <button type="submit" class="btn btn-primary" name="create_car">Create Car</button>
        </form>
    </div>
</body>

</html>