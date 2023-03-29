<?php
include './db/connexion.php' ; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the values of the form fields
  $buildingName = $_POST['buildingName'];
  $address = $_POST['address'];
  $description = $_POST['desc'];
  $video = $_POST['video'];
  $image = $_FILES['image'];

  // Validate the input
  if (empty($buildingName) || empty($address) || empty($image)) {
    echo 'Error: All fields are required';
    exit();
  }

  // Process the uploaded image
  $targetDir = 'uploads/';
  $targetFile = $targetDir . uniqid() . basename($image['name']);
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

  if (!in_array($imageFileType, $allowedTypes)) {
    echo 'Error: Only JPG, JPEG, PNG, and GIF files are allowed';
    exit();
  }

  if (move_uploaded_file($image['tmp_name'], $targetFile)) {
    echo 'File uploaded successfully';
  } else {
    echo 'Error uploading file';
    exit();
  }

  // Store the data in a database or file
  try{
    $stmt = $pdo->prepare("INSERT INTO building (buildingName, address, description ,  img, video_link) VALUES (:buildingName, :address, :description,  :img, :video_link)");
    $stmt->bindParam(':buildingName', $buildingName);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':video_link', $video);
    $stmt->bindParam(':img', $targetFile);
    $stmt->execute();

    header('Location: buildings.php?added=true');
    exit();
  }catch (PDOException $e){
    echo $e->getMessage() ;
  }

  // Redirect to a success page

} else {
  // Handle invalid request methods
  http_response_code(405);
  echo 'Error: Invalid request method';
}
?>
