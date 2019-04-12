<?php 
//login check
require_once('../functionsPdo.php');
require_once('../loginCheck.1.php');
include_once '././connectDatabase.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
</head>
<body>


<table class="EduchainTable">
<?php

$id= $_GET['id'];

$stmt = $db_conn->prepare("SELECT * FROM customerinfo WHERE customerID = $id");
$stmt->execute();
    
    while($row = $stmt->fetch()){
    echo "<tr><th>CustomerID</th><td>".$row["customerID"]."</td></tr>";
    echo "<tr><th>AssignmentID</th><td>".$row["AssignmentID"]."</td></tr>";
    echo "<tr><th>ContactpersoonID</th><td>".$row["contactPersonID"]."</td></tr>";
    echo "<tr><th>LocationID</th><td>".$row["locationID"]."</td></tr>";
    echo "<tr><th>OrderID</th><td>".$row["orderID"]."</td></tr>";
    echo "<tr><th>Salutation</th><td>".$row["salutation"]."</td></tr>";
    echo "<tr><th>Firstname</th><td>".$row["firstname"]."</td></tr>";
    echo "<tr><th>Lastname</th><td>".$row["lastname"]."</td></tr>";
    echo "<tr><th>Age</th><td>".$row["age"]."</td></tr>";
    echo "<tr><th>E-mail</th><td>".$row["email"]."</td></tr>";
    echo "<tr><th>Companyname</th><td>".$row["companyName"]."</td></tr>";
    echo "<tr><th>KvK</th><td>".$row["KvK"]."</td></tr>";
    echo "<tr><th>ProductSubscription</th><td>".$row["productSubscription"]."</td></tr>";
    echo "<tr><th>MoreInfo</th><td>".$row["moreInfo"]."</td></tr>";
    echo "<tr><th></th><td rowspan='2'><button class='button' style='vertical-align:middle' 
    onclick='window.location.href=`index.php`'>Terug</button></td></tr>";



    }
    echo "</table>";
    ?>

    
</body>
</html>