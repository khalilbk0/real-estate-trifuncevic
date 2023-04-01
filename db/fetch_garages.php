<?php
 include './connexion.php' ;

 $stmt = $pdo->prepare("SELECT * FROM garage");

// Execute the query
$stmt->execute();

// Fetch all rows as an associative array
$garages = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Export the data as JSON
header('Content-Type: application/json');
echo json_encode($garages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

// Close the database connection
$pdo = null;
?>
 