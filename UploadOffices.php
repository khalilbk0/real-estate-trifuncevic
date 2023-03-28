<?php

include './db/connexion.php' ;
include './db/helpers.php' ; 
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the values of the form fields
  $Adress = $_POST['Adress'];
  $desc = $_POST['desc'];
  $sq = $_POST['squarefeet'] ; 
  $main_image = $_FILES['image'] ; 
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
  $stmt = $pdo->prepare("INSERT INTO `office` (`address`, `description`, `square_feet`, `structure`, `main_image`, `other_images` ) VALUES (?,?,?,?,?,?)");
  $stmt->execute([$Adress,$desc,$sq,json_encode($structure , JSON_UNESCAPED_SLASHES) , uploadImage($main_image), NULL ]);
  echo "Data inserted successfully!";
} catch (PDOException $e) {
  echo "Error inserting data: " . $e->getMessage();
}

 
  // Validate the input
  }  

?>