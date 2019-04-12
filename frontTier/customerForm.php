<html>
    <head>
        <title>Formulier gedeelte voor klanten</title>
        <link rel="stylesheet" href="./css/styleMe.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
<!--TODO: Add all fields to the form and make them send it to formToDatabase-->
<body> 
    <div id="customerFormComplete">
        <h1>Customer Form </h1>
            <form action="../logicTier/functions/formToDatabase.php" method="POST" id="formInput">
                <ol> <li>
                    <label for="salutation">Aanhef:</label>
                    <select name="salutation" required>
                    <option value="Mr">Mr</option>
                    <option value="Mv">Mv</option>
                    </select> </li><li>
                    <label for="firstname">Voornaam:</label>
                    <input type="text" name="firstname" required>
                    </li> <li>
                    <label for="lastname">Achternaam:</label>
                    <input type="text" name="lastname" required></li><li>
                    <label for="age">Leeftijd:</label>
                    <input type="number" name="age" maxlength="3" style="-moz-appearance: textfield" required></li><li>
                    <label for="email">E-Mail:</label>
                    <input type="text" name="email" required></li><li>
                    <label for="companyName">Bedrijfs Naam:</label>
                    <input type="text" name="CompanyName" required></li><li>
                    <label for="KvK">kvk:</label>
                    <input type="number" name="kvk" maxlength="10" required></li><li>
                    <label for="productSubscription">Tier:</label>
                    <input type="number" maxlength="1" name="tierPicker" value="<?php echo $_GET['id']?>" required></li><li>
                    <label for="moreInfo">More info: </label>
                    <input type="text" name="moreInfo" required></li><li>
                    <input type="submit" value="Submit" id="send" required></li>
                </ol>
            </form>
    </div>
</body>
</html>