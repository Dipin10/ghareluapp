<?php

session_start();


$username = "";
$address  = "";
$employeework="";
$phoneno  = "";
$email = "";
$errors = array();
global $db;
$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['reg_emp'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);
  $employeework = mysqli_real_escape_string($db, $_POST['employeework']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }
  if (empty($phoneno)) { array_push($errors, "phone No  is required"); }
  if (empty($employeework)) { array_push($errors, "profession is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }


  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM employee WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
}

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }


  // Finally, register user if there are no errors in the form
  if (count($errors) === 0) {

  	$query = "INSERT INTO employee (username,address,employeework,phoneno,email)
  			  VALUES('$username','$address','$employeework','$phoneno','$email')";
  	mysqli_query($db, $query);
  //  header('location:added.php');
  	//$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now logged in";
  	//header('location: employee.php');
  }
}
