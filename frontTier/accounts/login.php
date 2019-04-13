<?php 
require_once('../../logicTier/functions/functionsPdo.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<div class="header">
		<h2></h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>First name</label>
			<input type="text" name="firstName">
		</div>
		<div class="input-group">
			<label>Last name</label>
			<input type="text" name="lastName">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
	</form>
</body>
</html>