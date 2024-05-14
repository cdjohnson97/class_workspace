<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'bibliotheque';

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error reporting mode
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

