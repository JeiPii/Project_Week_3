<?php 
require_once './connectDatabase.php'; 
//login check
require_once('loginCheck.php');
require_once('functionsPdo.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../../frontTier/CSS/style.css">
    <script src="main.js"></script>
</head>
<body>

<div id="CustomerTableDiv">
    <table class="EduchainTable">
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>E-mail</th>
            <th>Details</th>
        </tr>
        <?php

        $stmt = $db_conn->prepare("SELECT * FROM customerinfo");
        $stmt->execute();

        while($row = $stmt->fetch()){
        $id= $row["customerID"];
        echo "<tr><td>" .$row["customerID"]."</td><td>" .$row["firstname"]. "</td><td>" .$row["lastname"]. "</td><td>" .$row["e-mail"]."</td><td><button class='button' style='vertical-align:middle' onclick='window.location.href=`customerInfo.php?id=$id`'>Details</button></td></tr>";
        }
        echo "</table>";
        ?>
    </table>
</div>

</body>
</html>