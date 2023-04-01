<?php

include './db/connexion.php' ;  
include './db/helpers.php' ; 
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the values of the form fields
  $Adress = $_POST['Adress'];
  $BuildingID = $_POST['building'];
  $desc = $_POST['desc'];
  $sq = $_POST['squarefeet'] ; 
  $main_image = $_FILES['image'] ; 
  $stage = $_POST['stage'];
  $mark = $_POST['mark'];
  $underConstruction = isset($_POST["flexCheckChecked"]) ? 0 : 1;
  $key_images = array_keys($_FILES) ;
  $key_icon_text =  array_keys($_POST) ; 
  $icons = [] ; 
  $icons_values = [] ;  
  $structure = [] ; 
  foreach ($key_icon_text as $key) {
    if(str_contains($key,"icon_text")){
      array_push($icons_values,$key) ;
    }
  }
 /*  var_dump($key_images) ;  */
  foreach ($key_images as $file ) {
    if(str_contains($file,"img")){
      array_push($icons,$file) ; 
    }
  }
 
 for ($i=0; $i < count($icons_values) ; $i++) { 
   $obj = new stdClass() ; 
   $icon = ($_FILES[$icons[$i]]) ; 
   $obj->value = $_POST[$icons_values[$i]] ; 
   $obj->icon = uploadImage($icon) ;
   
     array_push($structure,$obj) ; 
  
 }
 try {
  $stmt = $pdo->prepare("INSERT INTO `garage`(`building_id`, `address`, `description`, `squarefeet`, `stage`, `mark`,  `structure`, `main_image` , `other_images`, `is_completed`) VALUES (?,?,?,?,?,?,?,?,?,?)");
$stmt->execute([$BuildingID, $Adress, $description, $sq, $stage, $mark, json_encode($structure , JSON_UNESCAPED_SLASHES), uploadImage($main_image), NULL, $underConstruction]);
$id = $pdo->lastInsertId();
 header('Location: uploadGallery.php?type=gar&id='.$id);


} catch (PDOException $e) {
  echo "Error inserting data: " . $e->getMessage();
}

 
  // Validate the input
  }  

?>