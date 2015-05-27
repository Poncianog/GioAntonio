<?php
    require_once(__DIR__ . "/../model/config.php");
    //If the SESSION is authenticated then it is destroyed.
    unset($_SESSION["authenticated"]);
    
    session_destroy();
    header("Location: " . $path . "index.php");

