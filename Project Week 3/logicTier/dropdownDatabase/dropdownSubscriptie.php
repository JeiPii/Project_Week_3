<?php
// This code gets a workshop dropdown bar
echo "<select id='customerInfo' name='productSubscription'>";

//get all students from database "schools"
foreach($db_conn->query("SELECT * FROM crm") as $_WORKSHOP) {
	$ID = $_WORKSHOP['productSubscription'];
	$WorkshopName = $_WORKSHOP['productSubscription'];
	
	echo "<option value ='".$ID."'>".$WorkshopName."</option>";
	echo "<br /><br />"; 
	
	
}

echo "</select>";
?>