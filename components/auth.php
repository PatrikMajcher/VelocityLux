<?php
// auth.php

session_start();
include('../includes/connection_db.php');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['register'])) {
    // Handle user registration
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $email = $_POST['email'];

    // Insert user data into the database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    $result = mysqli_query($conn, $sql);


    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    // Redirect to login page after registration
    header('Location: ../index.php');
    exit();
}

if (isset($_POST['login'])) {
    // Handle user login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user data from the database
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    $user = mysqli_fetch_assoc($result);

    // Verify password
    if ($user && password_verify($password, $user['password'])) {
        // Successful login, create session
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role']; // Store the user's role in the session

        if ($user['role'] == 'admin') {
            header('Location: /ecodrive/pages/admin_dashboard.php');
            exit();
        } else {
            header('Location: /ecodrive/pages/user_dashboard.php');
            exit();
        }
    } else {
        // Invalid login, redirect to login page
        header('Location: ../login.php');
        exit();
    }
}
