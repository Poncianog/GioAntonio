<?php
    require_once(__DIR__ . "/../model/config.php");
    
    //This indicates if the Login is False. If so the Login wont be Verifed
    function authenticateUser() {
        if(!isset($_SESSION["authenticated"])) {
            return false;
        }
        else {
            if($_SESSION["authenticated"] != true) {
                return false;
            }
            else {
                return true;
            }
        }
    }
