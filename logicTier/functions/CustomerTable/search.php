<?php

    include_once '../connectDatabase.php';

    $input = $_GET['insert'];

    $stmt = $db_conn->prepare("SELECT * FROM customerinfo WHERE firstname LIKE '%$input%' OR lastname LIKE '%$input%' OR email LIKE'%$input%' ");
    $stmt->execute();

    include_once("tableresults.php");