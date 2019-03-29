<?php



function pullFromDatabase() {
    //includes connetction
    include_once('../connectToDatabase/connectDatabase.php');
    //selects info from table
    $stmt = $db_conn->prepare("SELECT * FROM customerinfo");
    $stmt->execute();
    //does a fetch do you can output
    while($row = $stmt->fetch()){
        echo "<br />";
        echo $row['e-mail'];
    }
    $db_conn = null;
}

pullFromDatabase();