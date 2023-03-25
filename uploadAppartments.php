<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Dump the values of the form fields
  foreach ($_POST as $key => $value) {
    echo $key . ': ' . $value . '<br>';
  }
} else {
  // Handle invalid request methods
  http_response_code(405);
  echo 'Error: Invalid request method';
}
?>
