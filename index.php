<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>National League Gaming</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/custom-style.css">
        <link types="text/css" rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
        // HI 
        ?>
    </body>
</html>

<?php
    require_once(__DIR__ . "/controller/login-verify.php");
    require_once(__DIR__ . "/view/header.php");
    if(authenticateUser()) {
        require_once(__DIR__ . "/view/navigation.php");
    }
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/controller/read-posts.php");
?>