<?php

include 'base.php'  ; 


?>


<div class="container-fluid px-5 py-5">
  <form method="post" action="InsertBuilding.php" enctype="multipart/form-data">
  <div class="mb-3">
      <label for="buildingName" class="form-label">Building name:</label>
      <input type="text" class="form-control" id="buildingName" name="buildingName" placeholder="Name of the building" required>
    </div>
    <div class="mb-3">
      <label for="buildingName" class="form-label">Building description :</label>
      <input type="text" class="form-control" id="buildingName" name="desc" placeholder="Description" required>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address:</label>
      <input class="form-control" id="address" name="address"   required> 
    </div>
        <div class="mb-3">
      <label for="address" class="form-label">Description:</label>
      <textarea class="form-control" id="address" name="desc" rows="3" required></textarea>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Video link :</label>
      <input type="text" class="form-control" id="buildingName" name="video" placeholder="video link" required>

    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image to upload:</label>
      <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
    </div>
    
    <div class="row mx-auto mt-5">
      <button type="submit" class="btn btn-primary text-white">Add</button>
    </div>
  </form>
</div>
<script src='./assets/notify.min.js'> </script>
<script> 
const urlParams = new URLSearchParams(window.location.search);
const foo = urlParams.get('added');
if(foo == 'true'){
  $.notify("Building added", "success");
}
</script>