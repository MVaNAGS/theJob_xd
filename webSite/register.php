<?php
require_once 'core/Init.php';

$validated = true; //Testam, kamer nav validacija.
$host  = $_SERVER['HTTP_HOST'];
$url   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$db = new DB();

$username = $_POST['lietotajvards'];
$email = $_POST['epasts'];
$password = $_POST['parole1'];
$firstname = $_POST['vards'];
$lastname = $_POST['uzvards'];


$error = array();
if($db->usernameInUse($username)) {
	array_push($error, "Aiznemts lietotajvards.");
}
if($db->emailInUse($email)) {
	array_push($error, "Aiznemts epasts.");
}
if(!$validated) {
	array_push($error, "Nepraizi aizpildita forma.");
}
if(Count($error)) {
	$_SESSION['error'] = $error;
	header("Location: http://$host$url/registration.php");
	exit;
} else {

	$db->addUser($firstname, $lastname, $username, $password, $email);
	$_SESSION['id'] = $db->getUserIDbyUsername($username);
	$_SESSION['username'] = $username;
	$_SESSION['name'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$_SESSION['email'] = $email;
	$_SESSION['accessLevel'] = 0;
	header("Location: http://$host$url/index.php");
	exit;

}
