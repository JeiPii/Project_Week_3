<html>
<head>
    <title>Formulier gedeelte voor klanten</title>
    <link rel="stylesheet" href="text/css" href="">
    <?php
    $db_conn = null; //If the user was already connected somehow this will drop any connections before hand.

    require_once '././logicTier/connectToDatabase/connectDatabase.php';
    ?>
</head>
<!--TODO: Add all fields to the form and make them send it to formToDatabase-->
<body>
    <div id="customerFormComplete">
        <h1>Customer Form</h1>
            <form action="././logicTier/formToDatabaseProcessing/formToDatabase.php" method="post"></form>
                <label for="Subscription">
                <?php
                    require_once '././LogicTier/dropdownDatabase/dropdownSubscriptie.php';
                ?>
                </label>
                <label for=""></label>
                <input type="">
    </div>
</body>