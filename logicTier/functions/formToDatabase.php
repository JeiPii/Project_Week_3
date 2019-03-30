<?php require_once './connectDatabase.php'; 
if(isset($_POST["submit"])){ //post created

    try {
        $sql = "
    
        INSERT INTO `registration` (`OV_NumberID`, `FirstName`, `LastName`)
        VALUES ('".$_POST["OV_Number"]."', '".$_POST["Firstname_db"]."', '".$_POST["Lastname_db"]."');
    
        INSERT INTO `studentspick` (`WorkshopID`, `Ov-Number`)
        VALUES ('".$_POST["stu_workshop"]."', '".$_POST["OV_Number"]."');
    
        ";
    
            if ($db_conn->query($sql))
        {
            echo "<script type= 'text/javascript'>console.log('New Record Inserted Successfully');</script>";
        }
            else
        {
            echo "<script type= 'text/javascript'>console.log('Data not successfully Inserted.');</script>";
        }
    
            $db_conn = null;
        }
            catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    } //Post finished
    ?>

