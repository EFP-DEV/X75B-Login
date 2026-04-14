<?php

var_dump($_POST['username']);
var_dump($_POST['password']);

$db_username = 'sam@amstram.be';   // viendra de la db
$db_password = 'moncode';          // viendra de la db

if($db_username === $_POST['username'] && $db_password === $_POST['password']){
    // aller sur dasbhoard
    header('Location: dashboard.php');
}else{
    // aller sur login avec message d'erreur
    header('Location: login.php?error=1');
}

?>