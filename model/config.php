<?php
    require_once(__DIR__ . "/database.php");
    session_start();
    session_regenerate_id(true);
    
    $path = "/poncianog-blog/";
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";
   
    // isset is if you're not connected then it will connect you
    if(!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }
    
    