<?php 

$host = 'localhost';
$dbname = 'real_estate';
$user = 'root';
$password = '123123123';

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>