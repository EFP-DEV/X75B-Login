<?php

include 'database.php';

$stmt = $pdo->prepare('SELECT password FROM user WHERE active=1 AND email=?');
$stmt->execute([$_POST['username']]);
$user = $stmt->fetch();

$db_password = $user['password'];          // viendra de la db

if($user !== false && $db_password === $_POST['password']){
    // aller sur dasbhoard
    session_start();
    $_SESSION['is_connected'] = $_POST['username'];
    header('Location: dashboard.php');
}else{
    // aller sur login avec message d'erreur
    header('Location: login.php?error=1');
}

?>