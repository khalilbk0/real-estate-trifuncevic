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


  $('div.wrapper.d-flex.flex-column.min-vh-100').removeClass('bg-light')
  let table = window.location.href;
  let datainUrl = table.indexOf('data')
  table = (table.slice(datainUrl,table.indexOf('.')).replace('data','').toLowerCase())
    $('#garagesTable').DataTable({
        processing: true,
        serverSide: true,
		scrollx: 400,
        ajax: 'db/fetch_garages.php',
		columnDefs: [
            {
                targets: -1,
                data: null,
                defaultContent: ' <button class="btn btn-info text-white">EDIT</button> <button class="btn btn-danger text-white mx-auto">X</button>',
            },
        ],
    });
 
   $(document).on('click', '.btn-danger', function(e) {
      e.preventDefault();
   /*    alert('Row deletion is not implemented yet!'); */
      // You can add your row deletion code here
      let id = $(this).parent().parent().find(".sorting_1").html() ;
      $(this).parent().parent().hide()
      $.get('/api/Deletead.php?id='+id+"&table="+table).then((res) => {
        console.log(res)
      })
      console.log(id)
    });

    $(document).on('click', '.btn-info', function(e) {
      e.preventDefault();
   /*    alert('Row deletion is not implemented yet!'); */
      // You can add your row deletion code here
 
      let id = $(this).parent().parent().find(".sorting_1").html() ;

      window.location.replace('editAd.php?type='+table+'&id='+id)
    });
 
 
});

</script>