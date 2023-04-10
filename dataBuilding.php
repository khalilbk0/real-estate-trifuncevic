<?php

include 'base.php' ;

?> 
 

 <div class="mx-auto">
 




<div class="tab-pane p-3 active preview  mx-auto" role="tabpanel" class="display nowrap"  id="preview-1218">
<table id="garagesTable">
  <thead>
    <tr> 
      <th>Building ID</th>
       
	  <th>Name</th>
	  <th>Address</th>
	  <th>Description</th>
	  <th>Video link</th>
      <th>Image</th>
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
        ajax: 'db/fetch_buildings.php',
		columnDefs: [
            {
                targets: -1,
                data: null,
                defaultContent: ' <button class="btn btn-info text-white">EDIT</button> <button class="btn btn-danger text-white mx-auto">X</button>',
            },
        ],
         scrollX:100
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
      let table = window.location.href;
  let datainUrl = table.indexOf('data')
  table = (table.slice(datainUrl,table.indexOf('.')).replace('data','').toLowerCase())
   /*    alert('Row deletion is not implemented yet!'); */
      // You can add your row deletion code here
      let id = $(this).parent().parent().find(".sorting_1").html() ;
      window.location.replace('/editBuilding.php?id='+id)
    });
 
});

</script>