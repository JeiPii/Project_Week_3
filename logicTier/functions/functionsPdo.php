<?php 
session_start();

function connection() {
    $host       = 'localhost'; // == localhost
    $db         = 'crm';
    $user       = 'Webserver';
    $pass       = 'dD25CpeSUEwe';
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


$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}


// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $errors, $username, $email;


    // defined below to escape form values
	$username    =  $_POST['username'];
	$email       =  $_POST['email'];
	$password_1  =  $_POST['password_1'];
	$password_2  =  $_POST['password_2'];

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
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
            $sql = "INSERT INTO users (username, email, user_type, password) VALUES('$username', '$email', '$user_type', '$password')";
            $data = $pdo->query($sql);
            $_SESSION['success']  = "New user successfully created!!";
            header('location: admin.php');


		}else{

            $pdo = connection();
            $sql = "INSERT INTO users (username, email, user_type, password) VALUES('$username', '$email', '$user_type', '$password')";
            $data = $pdo->query($sql);

            // get id of the created user
            $logged_in_user_id = $pdo->lastInsertId();
            



			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: admin.php');				
		}
	}
}

// return user array from their id
function getUserById($id){

    $pdo = connection();
    $sql = "SELECT * FROM users WHERE id=?";
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id=?");
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
	header("location: login.php");
}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}


// LOGIN USER
function login(){
	global $errors, $username, $email;
	// grap form values
	$username = $_POST['username'];
    $password = $_POST['password'];
    
	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}


	// attempt login if no errors on form
	if (count($errors) == 0) {
		$pdo = connection();
		$sql = "SELECT password FROM users WHERE username='$username'";
        $hash = $pdo->query($sql)->fetchColumn();




		//$password_verify
		if	(password_verify($password, $hash)) {

			$sql = "SELECT user_type FROM users WHERE username='$username'";
			$results = $pdo->query($sql)->fetchColumn();

			$logged_in_user['user_type'] = $results;

			if (strlen($results) >  1) { // user found
				// check if user is admin or user
				
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: admin.php');		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: admin.php');
				}
			}else {
				array_push($errors, "Wrong username");
			}
		}else {
			array_push($errors, "Wrong password");
		}	
	}	
}
function isAdmin()
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
