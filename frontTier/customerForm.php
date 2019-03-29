<html>
<head>
    <title>Formulier gedeelte voor klanten</title>
    <link rel="stylesheet" href="text/css" href="">
    <?php
    $db_conn = null; //If the user was already connected somehow this will drop any connections before hand.

    include_once '../logicTier/functions/connectDatabase.php';
    ?>
</head>
<!--TODO: Add all fields to the form and make them send it to formToDatabase-->
<body>
    <div id="customerFormComplete">
        <h1>Customer Form</h1>
            <form action="../logicTier/functions/formToDatabase.php" method="post"></form>
                <label for="Subscription">
                <?php include_once '../logicTier/functions/dropdownSubscriptie.php' ; ?> 
                </label>
                <label for=""></label>
                <input type="">
    </div>
</body>