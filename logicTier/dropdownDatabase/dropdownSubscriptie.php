<?php
//Require zal de pagina niet laden als de connectie niet lukt. include wel
include_once '././connectDataBase/connectDatabase.php';
// This code gets a workshop dropdown bar
echo "<select id='customerInfo' name='productSubscription'>";

//get all students from database "schools"
foreach($db_conn->query("SELECT * FROM crm") as $_SUBSCRIPTIE) {
	$ID = $_SUBSCRIPTIE['productSubscription'];
	$subscriptionName = $_SUBSCRIPTIE['productSubscription'];
	
	echo "<option value ='".$ID."'>".$subscriptionName."</option>";
	echo "<br /><br />"; 
	
	
}

echo "</select>";
?>
