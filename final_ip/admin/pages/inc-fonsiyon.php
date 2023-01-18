<?php 
    try {
        $conn = new PDO("mysql:host=localhost;dbname=blog_db;charset=utf8", 'root', '');
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    } 
    define("_URL","http://localhost/final_ip/");
?>