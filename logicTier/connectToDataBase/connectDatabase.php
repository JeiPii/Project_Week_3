<?php
$servername = "localhost";
$username = "webserver";
$password = "dD25CpeSUEwe";

try {
    $db_conn = new PDO("mysql:host=$servername;dbname=crm", $username, $password);
    // set the PDO error mode to exception
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 