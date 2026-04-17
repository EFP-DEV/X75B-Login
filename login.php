<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Connexion</h1>
<?php

// Check if an 'error' parameter exists in the URL (?error=...)
if (isset($_GET['error'])) {

    // Specific case: user is not allowed
    if ($_GET['error'] === 'notallowed') {

        // Display a custom message for this case
        echo '<p>ahahahaa you didnt say magic word.</p>';

    } else {

        // Fallback message for any other error value
        echo '<p>Failed. Retry.</p>';
    }
}
?>

    <form method="POST" action="connect.php">
        <label for="username">Nom d'utilisateur</label>
        <input id="username" name="username" value="" required>

        <label for="password">Mot de passe</label>
        <input id="password" name="password" value="" type="password" required>

        <button type="submit">Se connecter</button>
    </form>

    <a href="register.php">Inscription</a>
</body>
</html>