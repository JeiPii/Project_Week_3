<?php 
//login check
require_once('functionsPdo.php');
require_once('loginCheck.php');
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL); 

        $salutation = $_POST["salutation"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $companyName = $_POST["CompanyName"];
        $kvk = $_POST["kvk"];
        $tier = $_POST["tierPicker"];
        $moreInfo = $_POST["moreInfo"];

try {   
        require_once './connectDatabase.php';

        $sql = "INSERT INTO `customerinfo` (`customerID`, `AssignmentID`, `contactPersonID`, `locationID`, `orderID`, `salutation`, `firstname`, `lastname`, `age`, `email`, `companyName`, `KvK`, `productSubscription`, `moreInfo`) VALUES (NULL, NULL, NULL, NULL, NULL, '$salutation', '$firstname', '$lastname', '$age', '$email', '$companyName', '$kvk', '$tier', '$moreInfo');";
    
            if ($db_conn->query($sql))
        {
            echo "Succes";
            header("refresh:1.0; url=../../frontTier/index.php");
        }
            else
        {
            echo "Failed";
            header("refresh:1.0; url=../../frontTier/index.php");
        }
    
            $db_conn = null;
        }
            catch(PDOException $e)
        {
            echo $e->getMessage();
        }; //Post finished
        
        // 

    ?>


