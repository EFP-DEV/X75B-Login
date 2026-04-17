<?php

include 'database.php';

$sql = "SELECT id, password FROM user WHERE password NOT LIKE '$2y$10$%'";
$select = $pdo->query($sql);
while ($user = $select->fetch()){
    $sql = "UPDATE user SET password = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $p_hash = password_hash($user['password'], null);
    $stmt->execute([$p_hash, $user['id']]);
}