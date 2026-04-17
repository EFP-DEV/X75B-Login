<?php

// Database connection parameters
// These define where the database is, and how to access it
$host = 'localhost';      // Database server (local machine)
$db   = 'toutdoux';      // Database name
$user = 'toutdoux';      // Database user
$pass = 'cMVR/g1V63.utSe['; // User password
$charset = 'utf8mb4';    // Character encoding (supports full Unicode)

// DSN (Data Source Name)
// This string tells PDO how to connect to the database
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// PDO options
// These configure how PDO behaves
$options = [

    // Throw exceptions when an error occurs (instead of silent failure)
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

    // Fetch results as associative arrays by default
    // Example: $row['username'] instead of numeric indexes
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

    // Disable emulated prepared statements
    // Forces real prepared statements at the database level (safer, more predictable)
    PDO::ATTR_EMULATE_PREPARES => false,
];

// Create the PDO instance (actual connection)
// If the connection fails, an exception will be thrown (because of ERRMODE above)
$pdo = new PDO($dsn, $user, $pass, $options);