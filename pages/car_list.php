<?php
session_start();
include('../includes/connection_db.php');

// Fetch available cars from the database
$result = mysqli_query($conn, "SELECT * FROM cars WHERE available = 1");
$cars = mysqli_fetch_all($result, MYSQLI_ASSOC);
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

    <div class="container mt-5 ">
        <h2 class="mb-4 text-center">Available Cars</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php foreach ($cars as $car) : ?>
                <div class="col">
                    <div class="card mb-3 card2 transformx">
                        <img src="<?php echo $car['image_url']; ?>" class="card-img-top" style="height: 250px; object-fit: cover;" alt="<?php echo $car['brand'] . ' ' . $car['model']; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <?php echo $car['brand'] . ' ' . $car['model']; ?>
                            </h5>
                            <div class="text-center">
                                <?php if (!isset($_SESSION['user_id']) || (isset($_SESSION['role']) && $_SESSION['role'] != 'admin')) : ?>
                                    <a href="car_details.php?id=<?php echo $car['car_id']; ?>">
                                        <button class="btn btn-outline-dark" role="button">MORE DETAILS</button></a>
                                <?php endif; ?>
                                <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') : ?>
                                    <a href="/ecodrive/components/update_car.php?id=<?php echo $car['car_id']; ?>" class="btn btn-success">Update Car</a>
                                    <a href="/ecodrive/components/remove_car.php?id=<?php echo $car['car_id']; ?>" class="btn btn-danger">Delete Car</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>