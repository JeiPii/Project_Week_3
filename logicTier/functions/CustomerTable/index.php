<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="js/script.js"></script>
</head>
<body>
<div id="ResultDiv">
<input type='text' placeholder="Search..." id='txtSearch' onKeyUp='tableSearch();' />
<i class="fas fa-search"></i>
    <div id="result">
    <?php
        include_once '/./.connectDatabase.php';
        $stmt = $db_conn->prepare("SELECT * FROM customerinfo");
        $stmt->execute();

        include_once("tableresults.php");
    ?>
    </div>
</div>
</body>
</html>