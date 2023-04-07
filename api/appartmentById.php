<?php
include '../db/connexion.php';
 
if($_GET['id']){
    $id = $_GET['id']  ;
    $stmt = $pdo->query("SELECT * FROM apartment where building_id = $id" ); 
    $buildings = $stmt->fetchAll();
    header('Access-Control-Allow-Origin: *');
    
    header('Access-Control-Allow-Methods: GET, POST');
    
    header("Access-Control-Allow-Headers: X-Requested-With");
    header('Content-Type: application/json');
    echo json_encode($buildings);
    exit ; 
}