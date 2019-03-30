<?php error_reporting(0);  require_once '../logicTier/functions/connectDatabase.php'; ?>
<html>
    <head>
        <title>Formulier gedeelte voor klanten</title>
        <link rel="stylesheet" href="text/css" href="">
    </head>
<!--TODO: Add all fields to the form and make them send it to formToDatabase-->
<body>
    <div id="customerFormComplete">
        <h1>Customer Form</h1>
            <form action="../logicTier/functions/formToDatabase.php" method="post" >
                <label for="Subscription">
                </label>
                <label for="salutation">Aanhef:</label>
                <select name="salutation">
                <option value="Mr">Mr</option>
                <option value="Mv">Mv</option>
                </select><br />
                <label for="firstname">Voornaam:</label>
                <input type="text" name="firstname"><br />
                <label for="lastname">Achternaam:</label>
                <input type="text" name="lastname"><br />
                <label for="age">Leeftijd:</label>
                <input type="number" name="age"><br />
                <label for="e-mail">E-Mail:</label>
                <input type="text" name="email"><br />
                <label for="companyName">Bedrijfs Naam:</label>
                <input type="text" name="CompanyName"><br />
                <label for="KvK">kvk:</label>
                <input type="number" name="kvk"><br />
                <label for="productSubscription">Tier:</label>
                <?php require_once '../logicTier/functions/dropdownSubscriptie.php'; ?><br />
                <label for="moreInfo">More info: </label>
                <input type="text" name="moreInfo"><br />
                <input type="submit" value="Submit">
                </form>
    </div>
</body>
</html>