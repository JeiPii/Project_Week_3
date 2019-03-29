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
                
                </label>
                <label for="salutation">Aanhef:</label>
                <input type="text" name=""><br />
                <label for="firstname">Voornaam:</label>
                <input type="text" name=""><br />
                <label for="lastname">Achternaam:</label>
                <input type="text" name=""><br />
                <label for="age">Leeftijd:</label>
                <input type="number" name=""><br />
                <label for="e-mail">E-Mail:</label>
                <input type="text" name=""><br />
                <label for="companyName">Bedrijfs Naam:</label>
                <input type="text" name=""><br />
                <label for="KvK">kvk:</label>
                <input type="number" name=""><br />
                <label for="productSubscription">Tier:</label>
                <?php include_once '../logicTier/functions/dropdownSubscriptie.php' ; ?>  <br />
                <label for="moreInfo"> </label>
                <input type="text" name=""><br />
                <input type="button" value="submit">
    </div>
</body>