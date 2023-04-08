<?php
include_once 'connexion.php' ;
require 'ssp.class.php' ;
include 'helpers.php'; 
$table = 'building';
$primaryKey = 'id';

// Define columns to be fetched from the database
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'buildingName', 'dt' => 1 ),
    array( 'db' => 'address', 'dt' => 2 ),
    array( 'db' => 'description', 'dt' => 3 ),
    array( 'db' => 'video_link', 'dt' => 4 ),
    array( 'db' => 'img', 'dt' => 5 ),
    array( 'db' => 'is_completed', 'dt' => 6 ) 
);

// Construct SQL query using PHP PDO
$sql = "SELECT " . implode(", ", array_column($columns, 'db')) . " FROM `$table`";




// Call SSP class for server-side processing and encoding to JSON
 
 $res = SSP::simple( $_GET, $pdo, $table, $primaryKey, $columns ) ;
 
 
 $new_res = [] ;
 foreach ($res['data'] as $data ) {
  
 
    $data[5]="<img height='50px' src='../".$data[5]."'/>" ; 
     
/*    for ($i=0; $i < count($data); $i++) { 
      if($data[$i] == NULL ){
        $data[$i] = "empty"  ;
      }
      
   } */
 array_push($new_res,$data) ;  
 $res['data'] = $new_res ;
}
echo json_encode($res,JSON_UNESCAPED_SLASHES)  ;
/* var_dump( $new_res); */
// Close the database connection
$conn = null;
?>
 