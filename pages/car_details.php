<?php
session_start();
include('../includes/connection_db.php');

// Get car details based on the passed car_id
if (isset($_GET['id'])) {
    $car_id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM cars WHERE car_id = $car_id");
    $car = mysqli_fetch_assoc($result);
}
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
        <?php if (isset($car)) : ?>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="card card2">
                        <img src="<?php echo $car['image_url']; ?>" class="card-img-top card2" alt="<?php echo $car['brand'] . ' ' . $car['model']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card-header bg-black text-white">
                            <h2 class="card-title"><?php echo $car['brand'] . ' ' . $car['model']; ?></h2>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Year: <?php echo $car['year']; ?></p>
                            <p class="card-text">Rental Rate: $<?php echo $car['rental_rate']; ?> per day</p>
                            <p class="card-text">Status: <?php echo ($car['available'] ? 'Available' : 'Not Available'); ?></p>
                        </div>
                        <?php if (!isset($_SESSION['user_id'])) : ?>
                            <div class="card-footer  text-center text-danger">
                                You have to be logged in to be able to book this car!
                            </div>
                        <?php endif; ?>
                        <div class="card-footer text-center bg-black">
                            <?php if (isset($_SESSION['user_id']) && isset($_SESSION['role']) && $_SESSION['role'] === 'user') : ?>
                                <a href="../components/book_car.php" class="btn btn-primary">BOOK ME</a>
                            <?php endif; ?>
                            <a href="car_list.php" class="btn btn-success">BACK</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <p class="text-center">Car not found.</p>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-d4z2c9e2R2sAe5Q5LqNBA4bQF1VgS8U5G8AuZ5p7cZo6PbH5S+5vWlOMk/K6LbH" crossorigin="anonymous"></script>
</body>

</html>