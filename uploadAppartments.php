<?php

include './db/connexion.php' ;

$address = $_POST['Adress']; 
$desc = $_POST['desc'];
$square_feet = $_POST['squarefeet'];
$rooms = $_POST['rooms'];
$stage = $_POST['stage'];/* 
$main_image = $_FILES['mainImage']['name']; */
$stmt = $pdo->prepare('INSERT INTO apartment (address, building_id, description, square_feet, rooms, stage) VALUES (:address, :building_id, :desc, :square_feet, :rooms, :stage)');
$stmt->bindParam(':address', $address);
$stmt->bindParam(':building_id', $building_id);
$stmt->bindParam(':desc', $desc);
$stmt->bindParam(':square_feet', $square_feet);
$stmt->bindParam(':rooms', $rooms);
$stmt->bindParam(':stage', $stage); 
/* $folderPath = "uploads/" . $folderName; */
/* if (!file_exists($folderPath)) {
  mkdir($folderPath);
} */
/* $fileExtension = pathinfo($_FILES['mainImage']['name'], PATHINFO_EXTENSION);
$fileName = uniqid() . "." . $fileExtension;
$filePath = $folderPath . "/" . $fileName;
move_uploaded_file($_FILES['mainImage']['tmp_name'], $filePath);
$imagePath = $folderName . "/" . $fileName;
// insert $imagePath into the database
 */
if ($stmt->execute()) {
  echo 'Apartment added successfully';
} else {
  echo 'Error adding apartment';
}
?>
