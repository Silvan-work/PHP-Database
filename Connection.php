<?php
    
    //OFFLINE
    $servername = "localhost";
    $username = "root";
    $db_name="";
    $password = "";
    // Create connection
    $connection = new mysqli($servername, $username, $password,$db_name);
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    //ONLINE
    //Database parameters
    /*$servername = "localhost";
    $username = "";
    $db_name="";
    $password = "";
    // Create connection
    $connection = new mysqli($servername, $username, $password,$db_name);
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }*/
?>