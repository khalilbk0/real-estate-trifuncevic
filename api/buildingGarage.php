  <?php
  include '../db/connexion.php';

  $stmt = $pdo->query("SELECT * FROM building"); 
  $buildings = $stmt->fetchAll();
  header('Access-Control-Allow-Origin: *');

  header('Access-Control-Allow-Methods: GET, POST'); 
  header("Access-Control-Allow-Headers: X-Requested-With");
  header('Content-Type: application/json');
    
  try {
    $stmt = $pdo->prepare("SELECT building_id FROM `garage`");  
    $stmt->execute();
 
    $building_infos = []  ;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $building_id = $row['building_id'];
        $stmt2 = $pdo->prepare("SELECT * FROM `building` WHERE id = :id");
        $stmt2->bindParam(':id', $building_id);
        $stmt2->execute();
        array_push($building_infos,$stmt2->fetch(PDO::FETCH_ASSOC)) ;
    
    }
   
    echo json_encode(array_unique($building_infos,SORT_REGULAR)); // output the data as JSON
    exit();
} catch (PDOException $e) {
    echo "Error fetching data: " . $e->getMessage();
}