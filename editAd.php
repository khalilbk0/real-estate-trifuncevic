<?php

include 'base.php'  ; 
include './db/connexion.php' ;
if(!empty($_GET['id'] && $_GET['type'] )){
    $table =  $_GET['type']; 
    $sql = "SELECT * FROM $table WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET['id']]);
    
    // fetch the building record as an associative array
    $building = $stmt->fetch(PDO::FETCH_ASSOC); 
    $stmt2 = $pdo->prepare("SELECT buildingName,id FROM building");
    $stmt2->execute();
    $buildings = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    
  }
?>

<?php 

if($table == "office"){
    echo '<div class="container-fluid px-5 py-5">
    <form action="uploadOffices.php?id='.$_GET['id'].'" method="POST" name="form" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Office Adress : </label>
    <input type="text" class="form-control"  value="'.$building['address'].'"  name="Adress" id="exampleFormControlInput1" placeholder="Office Adress">
  </div>
   
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description : </label>
    <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3">'.$building['description'].'</textarea>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1"  class="form-label">Squarefeet : </label>
    <input class="form-control" value="'.$building['squarefeet'].'" type="text" name="squarefeet" rows="3"></input>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1"  class="form-label">Stage : </label>
    <input class="form-control"value="'.$building['stage'].'" type="text" name="stage" rows="3"></input>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1"  class="form-label">Mark : </label>
    <input class="form-control" value="'.$building['mark'].'" type="text" name="mark" rows="3"></input>
  </div> 
  
  
 
 
 ' ;
     
if($building['is_completed'] == "0"){
    echo '   <div class="form-check">
    <input checked class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">
      Under Construction
    </label>
  </div>' ; 
  }else{
    echo '<div class="form-check">
    <input class="form-check-input"  type="checkbox" value="1" id="flexCheckChecked" name="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">
      Under Construction
    </label>
  </div>'  ;
} 

}
if($table == "apartment" || $table == "garage"){
    $submissionPath = $table=="garage"? "uploadGarage.php?id=" : "uploadAppartments.php?id=" ;
echo '
<div class="container-fluid px-5 py-5">
  <form action="'.$submissionPath.$_GET['id'].'" method="POST" name="form" enctype="multipart/form-data">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Appartment Adress : </label>
  <input type="text" class="form-control" value="'.$building['address'].'"  name="Adress" id="exampleFormControlInput1" placeholder="Appartment Adress">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Building name : </label>  
<select class="form-select form-select-sm"  name="building" aria-label=".form-select-sm example"> '  ;

foreach ($buildings as $b) {
  $selected = $building['building_id']==$b['id'] ? "selected" : "" ; 
  echo '<option value="' . $b['id'] . '" '.$selected.'>' . $b['buildingName'] . '</option>';
} 
echo '</select>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description : </label>
  <textarea class="form-control"    name="desc" id="exampleFormControlTextarea1" rows="3">'.$building['description'].'</textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1"  class="form-label">Squarefeet : </label>
  <input class="form-control" type="text" value="'.$building['squarefeet'].'" name="squarefeet" rows="3"></input>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1"  class="form-label">Stage : </label>
  <input class="form-control" type="text" value="'.$building['stage'].'"  name="stage" rows="3"></input>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1"  class="form-label">Mark : </label>
  <input class="form-control" type="text" value="'.$building['mark'].'"  name="Mark" rows="3"></input>
</div>  

' ;
if($building['is_completed'] == "0"){
    echo '   <div class="form-check">
    <input checked class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">
      Under Construction
    </label>
  </div>' ; 
  }else{
    echo '<div class="form-check">
    <input class="form-check-input"  type="checkbox" value="1" id="flexCheckChecked" name="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">
      Under Construction
    </label>
  </div>'  ;
}
}

?>









  
    <div class="row mx-auto mt-5">
      <button type="submit" class="btn btn-primary text-white">Update</button>
    </div>
  </form>
</div>
<script src='./assets/notify.min.js'> </script>
<script> 
const urlParams = new URLSearchParams(window.location.search);
const foo = urlParams.get('added');
if(foo == 'true'){
  $.notify("Building Updated", "success");
  setTimeout(function() {
  window.location.replace("/");
}, 5000)
}
</script>