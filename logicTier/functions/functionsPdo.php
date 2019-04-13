<?php 
session_start();

function connection() {
    $host       = 'localhost'; // == localhost
    $db         = 'crm';
    $user       = 'root';
    $pass       = '1234';
    $charset    = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        return $pdo;
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}


$firstName = "";
$lastName = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}


// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $errors, $firstName, $lastName, $email;


    // defined below to escape form values
	$firstName   =  $_POST['firstName'];
	$lastName    =  $_POST['lastName'];
	$email       =  $_POST['email'];
	$password_1  =  $_POST['password_1'];
	$password_2  =  $_POST['password_2'];

	// form validation: ensure that the form is correctly filled
	if (empty($firstName)) { 
		array_push($errors, "First name is required"); 
	}
	if (empty($lastName)) { 
		array_push($errors, "Last name is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
       // $password = md5($password_1);//encrypt the password before saving in the database
        
        //pasword_hash() en pasword_verify()
		$password = password_hash($password_1, PASSWORD_DEFAULT);

		if (isset($_POST['user_type'])) {

            $user_type = $_POST['user_type'];
            $pdo = connection();
            $sql = "INSERT INTO coworker (firstName, lastName, Email, user_type, Password) VALUES('$firstName', '$lastName', '$email', '$user_type', '$password')";
            $data = $pdo->query($sql);
            $_SESSION['success']  = "New user successfully created!!";
			header('location: ../../frontTier/dashboard/index.php');	

		}else{

            $pdo = connection();
            $sql = "INSERT INTO coworker (firstName, lastName, Email, user_type, Password) VALUES('$firstName', '$lastName', '$email', '$user_type', '$password')";
            $data = $pdo->query($sql);

            // get id of the created user
            $logged_in_user_id = $pdo->lastInsertId();
            



			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: ../../frontTier/dashboard/index.php');				
		}
	}
}

// return user array from their id
function getUserById($id){

    $pdo = connection();
    $sql = "SELECT * FROM coworker WHERE id=?";
    $stmt = $pdo->prepare("SELECT * FROM coworker WHERE id=?");
    $stmt->execute([$id]);
    $data = $stmt->fetchAll();
    return $user;

}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	



function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header('location: ../../frontTier/index.html');
}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header('location: ../../frontTier/index.html');
}

function out1() {
	session_destroy();
	unset($_SESSION['user']);
	header('location: ../../frontTier/index.html');
}
function out2() {
	session_destroy();
	unset($_SESSION['user']);
	header('location: ../../frontTier/index.html');
}
// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}


// LOGIN USER
function login(){
	global $errors;
	// grap form values
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$password  =  $_POST['password'];
	// make sure form is filled properly
	if (empty($firstName)) {
		array_push($errors, "First name is required");
	}
	if (empty($lastName)) {
		array_push($errors, "Last name is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}


	// attempt login if no errors on form
	if (count($errors) == 0) {
		$pdo = connection();
		$sql = "SELECT password FROM coworker WHERE firstName='$firstName' AND lastName='$lastName'";
        $hash = $pdo->query($sql)->fetchColumn();




		//$password_verify
		if	(password_verify($password, $hash)) {

			$sql = "SELECT user_type FROM coworker WHERE firstName='$firstName' AND lastName='$lastName'";
			$results = $pdo->query($sql)->fetchColumn();

			$logged_in_user['user_type'] = $results;

			if (strlen($results) >  1) { // user found
				// check if user is admin or user
				
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: ../../frontTier/dashboard/index.php');	
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: ../../frontTier/dashboard/index.php');
				}
			}
		}else {
			array_push($errors, "Wrong name or password");
		}	
	}	
}
function isUser()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
    }
    if(isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'user' ){
        return true;
    }else{
        return false;
    }
}
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}
?>
