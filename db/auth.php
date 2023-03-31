<?php
include './db/connexion.php' ;
session_start();
 
// Check if the user has submitted the form
 
// If the user is not authenticated, show the login form
if (!isset($_SESSION['user_id']) || !$_SESSION['user_id']) {
 header('Location: login.php');
}  
?>