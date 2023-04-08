<?php

include 'base.php'  ; 
include './db/connexion.php' ;
if(!empty($_GET['id'])){
  $sql = 'SELECT * FROM building WHERE id = :id';
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $_GET['id']]);

// fetch the building record as an associative array
$building = $stmt->fetch(PDO::FETCH_ASSOC); 
}
?>


<div class="container-fluid px-5 py-5">
  <form method="post" action="InsertBuilding.php?id=<?php echo $_GET['id'] ?>" enctype="multipart/form-data">
  <div class="mb-3">
   
      <label for="buildingName" class="form-label">Building name:</label>
      <input type="text" value=" <?php echo  $building['buildingName'] ?>" class="form-control" id="buildingName" name="buildingName" placeholder="Name of the building" required>
    </div>
    <div class="mb-3">
      <label for="buildingName" class="form-label">Building Address :</label>
      <input type="text" value="<?php echo  $building['address'] ?>" class="form-control" id="address" name="address" placeholder="Description" required>
    </div>
 
        <div class="mb-3">
      <label for="address" class="form-label">Description:</label>
      <textarea class="form-control"   id="address" name="desc" rows="3" ><?php echo  $building['description'] ?>
      </textarea>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Video link :</label>
      <input type="text" value="<?php echo  $building['video_link'] ?>" class="form-control" id="buildingName" name="video" placeholder="video link" required>

    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
       <img width="200" height="200" class="d-block" src="<?php echo  $building['img'] ?>" />
    </div>
 <?php
 
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
</div>' ; 
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