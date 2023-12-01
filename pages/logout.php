<?php
// logout.php

// Start the session
session_start();

// Destroy all session data
session_destroy();

// Redirect to the index or login page
header('Location: /ecodrive/index.php'); // Change this to the desired destination after logout
exit();
?>
