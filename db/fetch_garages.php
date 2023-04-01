<?php
include_once 'connexion.php' ;
require 'ssp.class.php' ;
include 'helpers.php'; 
$table = 'garage';
$primaryKey = 'id';

// Define columns to be fetched from the database
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'building_id', 'dt' => 1 ),
    array( 'db' => 'address', 'dt' => 2 ),
    array( 'db' => 'description', 'dt' => 3 ),
    array( 'db' => 'squarefeet', 'dt' => 4 ),
    array( 'db' => 'stage', 'dt' => 5 ),
    array( 'db' => 'mark', 'dt' => 6 ),
    array( 'db' => 'structure', 'dt' => 7 ),
    array( 'db' => 'main_image', 'dt' => 8 ),
    array( 'db' => 'other_images', 'dt' => 9 ),
    array( 'db' => 'is_completed', 'dt' => 10 )
);

// Construct SQL query using PHP PDO
$sql = "SELECT " . implode(", ", array_column($columns, 'db')) . " FROM `$table`";




// Call SSP class for server-side processing and encoding to JSON
 
 $res = SSP::simple( $_GET, $pdo, $table, $primaryKey, $columns ) ;
 
 
 $new_res = [] ;
 foreach ($res['data'] as $data ) {
  
 
    $data[8]="<img height='50px' src='".$data[8]."'/>" ; 
    $data[10]==0? $data[10]="NO":$data[10]="YES" ; 
   for ($i=0; $i < count($data); $i++) { 
      if($data[$i] == NULL ){
        $data[$i] = "empty"  ;
      }
      
   }
 array_push($new_res,$data) ;  
 $res['data'] = $new_res ;
}
echo json_encode($res,JSON_UNESCAPED_SLASHES)  ;
/* var_dump( $new_res); */
// Close the database connection
$conn = null;
?>
 