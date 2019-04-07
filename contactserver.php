<?php

session_start();


$username = "";
$email    = "";
$Phoneno  = "";
$message  = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['contact'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  //$Address = mysqli_real_escape_string($db, $_POST['address']);
  $Phoneno = mysqli_real_escape_string($db, $_POST['Phoneno']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
  //$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  //$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  //if (empty($Address)) { array_push($errors, "Address is required"); }
  if (empty($Phoneno)) { array_push($errors, "Phone No  is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($message)) { array_push($errors, "message is required"); }
  //if (empty($password_1)) { array_push($errors, "Password is required"); }
  //if ($password_1 != $password_2) {
	//array_push($errors, "The two passwords do not match");

  if (count($errors) === 0) {
    $query = "INSERT INTO `contact` (`username`, `Phoneno`, `email`, `message`)
  			  VALUES('$username','$Phoneno', '$email', '$message')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: content.php');
  }
}
