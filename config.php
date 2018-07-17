<?php  
    // DB Settings 
    define('DB_SERVER', 'localhost'); 
    define('DB_USER', 'root'); 
    define('DB_PASSWORD', ''); 
    define('DB_NAME', 'email_sub'); 
  
    define('FROM_EMAIL', 'davidjawhpan@icloud.com'); 
    define('FROM_NAME', 'David Gyi'); 
  
  
    session_start(); 
    require_once 'classes.php'; 
    $mini = false; 
    $nonav = false; 
    error_reporting(1);