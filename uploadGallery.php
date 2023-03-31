<?php
include 'base.php' ; 
include './db/helpers.php' ; 
include './db/connexion.php' ; 

if(!empty($_GET['id']) && !empty($type = $_GET['type'])){
  $type = $_GET['type'];  
  $id = $_GET['id'] ; 
  $uploadedImages = [] ; 
  if (isset($_POST['submit'])) {
    $uploads  = uploadMultipleImages($_FILES['images']) ; 
    if($type == "app") {
      $sql = "UPDATE apartment SET other_images = :other_images WHERE id = :id";
      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':other_images', json_encode($uploads, JSON_UNESCAPED_SLASHES));
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
    }else if($type == "gar"){
      $sql = "UPDATE garage SET other_images = :other_images WHERE id = :id";
      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':other_images', json_encode($uploads, JSON_UNESCAPED_SLASHES));
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
    }else if($type == "off"){
      $sql = "UPDATE office SET other_images = :other_images WHERE id = :id";
      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':other_images', json_encode($uploads, JSON_UNESCAPED_SLASHES));
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
    }
  }
} 



?>
 

 <div class="container">

 <form action="" method="post" enctype="multipart/form-data">
    <label for="images">Select Images:</label>
    <input type="file" name="images[]" id="images" multiple>
    <button type="submit" name="submit">Upload Images</button>
</form>
 </div>