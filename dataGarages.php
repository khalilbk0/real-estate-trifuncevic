<?php

include 'base.php' ;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Garages</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			// load the garage data using AJAX
			$.ajax({
				url: "getGarages.php",
				dataType: "json",
				success: function(data) {
					// populate the table with the data
					$.each(data, function(i, garage) {
						$("#garageTable").append("<tr><td>" + garage.id + "</td><td>" + garage.building_id + "</td><td>" + garage.address + "</td><td>" + garage.description + "</td><td>" + garage.squarefeet + "</td><td>" + garage.structure + "</td><td>" + garage.main_image + "</td><td>" + garage.other_images + "</td></tr>");
					});
				}
			});
		});
	</script>
</head>
<body>
	<table id="garageTable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Building ID</th>
				<th>Address</th>
				<th>Description</th>
				<th>Square Feet</th>
				<th>Structure</th>
				<th>Main Image</th>
				<th>Other Images</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</body>
</html>
