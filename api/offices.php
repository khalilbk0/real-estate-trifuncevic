<?php
include '../db/connexion.php';

$stmt = $pdo->query("SELECT * FROM office"); 
$offices = $stmt->fetchAll();
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');
echo json_encode($offices);
exit ; 
if($_GET['id']){
    $id = $_GET['id']  ;
    $stmt = $pdo->query("SELECT * FROM office where id = $id " ); 
    $offices = $stmt->fetchAll();
    header('Access-Control-Allow-Origin: *');
    
    header('Access-Control-Allow-Methods: GET, POST');
    
    header("Access-Control-Allow-Headers: X-Requested-With");
    header('Content-Type: application/json');
    echo json_encode($offices);
    exit ; 
}
