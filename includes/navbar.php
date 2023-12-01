<?php
$navbar = "
<nav class='navbar navbar-dark bg-black navbar-expand-lg' data-bs-theme='dark'>
    <div class='container-fluid'>
        <a class='navbar-brand me-auto ps-5' href='/ecodrive/index.php'>VelocityLux</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse justify-content-end pe-5' id='navbarNav'>
            <ul class='navbar-nav'>
                <li class='nav-item'>
                    <a class='nav-link ' aria-current='page' href='/ecodrive/pages/car_list.php'>Car List</a>
                </li>
";

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
        $navbar .= "
                <li class='nav-item'>
                    <a class='nav-link' href='/ecodrive/pages/admin_dashboard.php'>Admin Dashboard</a>
                </li>";
    } else {
        $navbar .= "
                <li class='nav-item'>
                    <a class='nav-link' href='/ecodrive/pages/user_dashboard.php'>User Dashboard</a>
                </li>";
    }

    $navbar .= "
                <li class='nav-item'>
                    <a class='nav-link' href='/ecodrive/pages/logout.php'>Logout</a>
                </li>";
} else {
    $navbar .= "
                <li class='nav-item'>
                    <a class='nav-link' href='/ecodrive/pages/register.php'>Register</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='/ecodrive/pages/login.php'>Login</a>
                </li>";
}

$navbar .= "
            </ul>
        </div>
    </div>
</nav>
";

echo $navbar;
