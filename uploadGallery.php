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
    <input type="file" class="form-control w-50" name="images[]" id="images"  accept="images/*" multiple>
    <button type="submit" name="submit" class="btn btn-primary">Upload Images</button>
</form>
 </div>

 <div id="preview-container"></div>


 <script>
    const input = document.getElementById('images');
    const previewContainer = document.getElementById('preview-container');

    input.addEventListener('change', () => {
      previewContainer.innerHTML = '';
      const files = input.files;
      for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => {
          const img = document.createElement('img');
          img.src = reader.result;
          img.alt = file.name;
          img.className = "img-thumbnail"
          previewContainer.appendChild(img);
        }
      }
    });
  </script>