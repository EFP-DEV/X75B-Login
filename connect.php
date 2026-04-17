<?php

include 'database.php';

$stmt = $pdo->prepare('SELECT password FROM user WHERE active=1 AND email=?');
$stmt->execute([$_POST['username']]);
$user = $stmt->fetch();

$db_password = $user['password'];

if($user !== false && password_verify($_POST['password'], $db_password)){
    // aller sur dasbhoard
    session_start();
    $_SESSION['is_connected'] = $_POST['username'];
    header('Location: dashboard.php');
}else{
    // aller sur login avec message d'erreur
    header('Location: login.php?error=1');
}

?>