<?php 
//login check
require_once('loginCheck.php');
require_once('functionsPdo.php');
// Require zal de pagina niet laden als de connectie niet lukt. include wel
// This code gets a workshop dropdown bar
echo "<select id='subscriptionsID' name='tier'>";

//get all students from database "schools"
foreach($db_conn->query("SELECT * FROM `subscriptions` ") as $_SUBSCRIPTIE) {
	$ID = $_SUBSCRIPTIE['tier'];
	$subscriptionName = $_SUBSCRIPTIE['tier'];	
	echo "<option value ='".$ID."'>".$subscriptionName."</option>";
	echo "<br /><br />"; 

}

echo "</select>";
?>



