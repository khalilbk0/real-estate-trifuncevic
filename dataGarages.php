<?php

include 'base.php' ;

?> 
 

<!-- <div class="mx-auto">
-->




<div class="tab-pane p-3 active preview  mx-auto" role="tabpanel" class="display nowrap"  id="preview-1218">
<table id="garagesTable">
  <thead>
    <tr>
		<th>#ID </th>
      <th>Building ID</th>
      <th>Address</th>
      <th>Description</th>
      <th>Square Feet</th>
      <th>Stage</th>
      <th>Mark</th>
      <th>Structure</th>
      <th>Main Image</th>
      <th>Other Images</th>
      <th>Is Completed</th>
	  <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>

</div>


</div> 
               

<script>
$(document).ready(function () {
    $('#garagesTable').DataTable({
        processing: true,
        serverSide: true,
		scrollx: 400,
        ajax: 'db/fetch_garages.php',
		columnDefs: [
            {
                targets: -1,
                data: null,
                defaultContent: '<button class="btn btn-danger text-white">X</button>',
            },
        ],
    });
 
	$(".btn").click(function (e) { 
	alert('works')
	
});
    
});

</script>