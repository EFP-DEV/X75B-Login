<?php

// Start the session (must be called before any output)
session_start();

// Check if the user is authenticated
// isset() only checks existence, not value
if (!isset($_SESSION['is_connected']) || $_SESSION['is_connected'] !== true) {

    // Redirect unauthorized users to login page with error flag
    header('Location: login.php?error=notallowed');

    // Stop script execution immediately after redirect
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Bonjour <?= $_SESSION['is_connected']; ?></p>
    <span>VISA CVC 464</span>
</body>
</html>