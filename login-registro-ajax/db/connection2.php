<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db_inventary_xampp';
    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch (PDOException $e) {
        
    }
?>