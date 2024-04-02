<?php
    $server = "localhost";
    $user = "root";
    $pw = "Admin";
    $db = "oppdrag_uketolv";
    
    $conn = mysqli_connect($server, $user, $pw, $db);

    if(!$conn) {
        echo "Connection failed!";
        die();        
    }

