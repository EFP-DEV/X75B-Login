<?php

// Check if the form has been submitted (POST not empty)
if (!empty($_POST)) {

    // Include database connection ($pdo must be defined in this file)
    include 'database.php';

    // SQL query with placeholders (prepared statement)
    // Prevents SQL injection by separating query structure from data
    $sql = 'INSERT INTO `user` (`email`, `password`) VALUES (?, ?)';

    // Prepare the query
    $stmt = $pdo->prepare($sql);

    // Hash the password before storing it
    // WARNING: second parameter should normally be PASSWORD_DEFAULT
    // Using null is incorrect and may break or fallback unpredictably
    $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Execute the query with user-provided values
    // ⚠️ Mismatch: field is "email" but POST key is "username"
    // This likely indicates either:
    // - wrong input name in the form
    // - or wrong column name in the database
    $stmt->execute([
        $_POST['username'], // should probably be $_POST['email']
        $pass_hash
    ]);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <form method="POST" action="register.php">
        <label for="username">Nom d'utilisateur</label>
        <input id="username" name="username" value="" required>

        <label for="password">Mot de passe</label>
        <input id="password" name="password" value="" type="password" required>

        <button type="submit">Se connecter</button>
    </form>

    <a href="register.php">Inscription</a>
</body>
</html>