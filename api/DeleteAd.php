<?php
include '../db/connexion.php' ;  

// Check connection
try { 

    // Construct and execute the SQL query
    $table = $_GET['table'];
    $id = $_GET['id'];
    $sql = "DELETE FROM  $table  WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id); 
    $stmt->execute();
   

    echo "Row deleted successfully";
} catch(PDOException $e) {
    echo "Error deleting row: " . $e->getMessage();
}

// Close the database connection
$conn = null;

?>
