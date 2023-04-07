<?php

include '../db/connexion.php' ;   

$data = array(); // create an empty array to hold the data

$id = $_GET['id'] ; 
    header('Access-Control-Allow-Origin: *');
    
    header('Access-Control-Allow-Methods: GET, POST');
    
    header("Access-Control-Allow-Headers: X-Requested-With");
    header('Content-Type: application/json');
try {
  $stmt = $pdo->prepare("SELECT * FROM `apartment` where id = $id "); // select all data from the apartment table
  $stmt->execute();

  // loop through each row and add it to the data array
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $row['structure'] = json_decode($row['structure'], true); // decode the structure JSON
    $data[] = $row;
  }

  header('Content-Type: application/json'); // set the content type to JSON
  echo json_encode($data); // output the data as JSON
  exit();
} catch (PDOException $e) {
  echo "Error fetching data: " . $e->getMessage();
}
?>
