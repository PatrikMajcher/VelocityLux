<?php
session_start();
// Include necessary files and handle user authentication
include('../includes/connection_db.php');

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: /ecodrive/pages/login.php"); // Redirect to login page if not logged in
    exit();
}

$result = $conn->query("SELECT car_id, brand, model FROM cars WHERE available = 1");
$cars = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();
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
    <?php include_once '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="mb-4">Book a Car</h2>

        <form action="/ecodrive/components/book_car_handler.php" method="post">
            <!-- Car selection dropdown -->
            <div class="mb-3">
                <label for="car_id" class="form-label">Select a Car:</label>
                <select name="car_id" class="form-select" required>
                    <?php foreach ($cars as $car) : ?>
                        <option value="<?php echo $car['car_id']; ?>">
                            <?php echo $car['brand'] . ' ' . $car['model']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Other booking details input fields -->
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date:</label>
                <input type="date" name="start_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">End Date:</label>
                <input type="date" name="end_date" class="form-control" required>
            </div>

            <button type="submit" name="book_car" class="btn btn-primary">Book Now</button>
        </form>
    </div>

</body>

</html>