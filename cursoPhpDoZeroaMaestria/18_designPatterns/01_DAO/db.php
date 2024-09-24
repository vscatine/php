<?php
    $db = "daotest";
    $host = "localhost";
    $usr = "root";
    $pass = "password";

    $conn = new PDO("mysql:dbname=$db;host=$host", $usr, $pass);