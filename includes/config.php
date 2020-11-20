<?php
    ob_start(); // Turns on output buffering

    session_start();

    date_default_timezone_set("Europe/Kiev");

    try {
        $con = new PDO("mysql:dbname=filmflex;host=localhost", "root", "");

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch(PDOException $ex) {
        exit("Connection failed: " . $ex->getMessage());
    }
?>
