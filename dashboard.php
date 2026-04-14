<?php
session_start();

if(!isset($_SESSION['is_connected'])){
    header('Location: login.php?error=notallowed');
    die;
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