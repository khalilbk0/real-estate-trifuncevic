<?php 

function uploadImage($image) {
    $errors = array();
    $file_name = $image['name'];
    $file_size = $image['size'];
    $file_tmp = $image['tmp_name'];
    $file_type = $image['type'];
    $file_ext_array = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext_array));
   
    $extensions = array("jpeg", "jpg", "png");
   
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }
   
    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }
   
    if (empty($errors) == true) {
        $new_file_name = uniqid() . '.' . $file_ext;
        $upload_dir = 'uploads/';
        $upload_path = $upload_dir . $new_file_name;
        move_uploaded_file($file_tmp, $upload_path);
        return $upload_path;
    } else {
        return false;
    }
}


?>