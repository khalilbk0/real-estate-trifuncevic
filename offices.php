<?php
 
 include 'base.php' ; 

?>

<div class="container-fluid px-5 py-5">
  <form action="uploadOffices.php" method="POST" name="form" enctype="multipart/form-data">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Office Adress : </label>
  <input type="text" class="form-control" name="Adress" id="exampleFormControlInput1" placeholder="Office Adress">
</div>
 
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description : </label>
  <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1"  class="form-label">Squarefeet : </label>
  <input class="form-control" type="text" name="squarefeet" rows="3"></input>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1"  class="form-label">Stage : </label>
  <input class="form-control" type="text" name="stage" rows="3"></input>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1"  class="form-label">Mark : </label>
  <input class="form-control" type="text" name="mark" rows="3"></input>
</div> 

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Under Construction
  </label>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Main Image : </label>
  <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
</div>
<span class="divider"></span>
<p class="lead">
  Room structure
</p>
<div class="row mb-3 icons">
<label for="formFile" class="form-label">Icon to upload :   <span class="badge bg-secondary">64px</span> </label>

<div class="col">
  <input class="form-control" type="file"  name="img" accept="image/*" name="icon1"  onchange="loadFile(event)" id="formFile">
  <img id="output" class="my-5" height="64px" />

</div> 
<div class="col">
<div class="input-group mb-3 iconUploader" >
  <input type="text" class="form-control" placeholder="Option" name="icon_text" aria-label="Recipient's username" aria-describedby="basic-addon2">
 
</div>
</div>
<div class="col">
<button type="button"  class="btn btn-primary position-relative add">
  Add Structure
 
  </span>
</button>



</div>
<div id="structures" class="row">

</div>

<div class="row mx-auto mt-5 ">
  <button type="submit" class="btn btn-primary text-white submit">Add</button>
</div>
</form>
</div>

</div>
<script>


$(document).ready(function(){
  let index = 1 ;
  $('.add').click(() => {
    index++;
   let rowUpload = '<div class="row icons"><div class="col"><input class="form-control" type="file" name="img'+index+'" accept="image/*" onchange="loadFile(event)" id="formFile"><img id="output" height="64px" /></div><div class="col"><div class="input-group mb-3 iconUploader"><input type="text" name="icon_text'+index+'" class="form-control" placeholder="option '+index+'" aria-label="Recipient\'s username" aria-describedby="basic-addon2"><span class="input-group-text" id="basic-addon2">M²</span> <button type="button" class="btn btn-danger text-white position-relative remove">X</button> </div> </div> </div>'
   $('#structures').append(rowUpload)
  })

  $('body').on('click', '.remove', function() {
   $(this).parent().parent().parent().remove()
  });
  $('body').on('click', '.submit', function() {
    let table = $('.icons').children().find('.form-control');
    
table.each((i, el) => {
  let images = []
  if($(el).attr('id') == 'formFile'){
    images.push($(el).val())
    console.log(images)
  } 
});

  });
});
var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>