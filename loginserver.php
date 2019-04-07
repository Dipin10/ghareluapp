<?php
session_start();
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'registration');
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'" ;
  	$results = mysqli_query($db, $query);

  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['login'] = "ok";
  	  $_SESSION['username'] = $username;

      $row=$results->fetch_assoc();
      $_SESSION['user_id'] = $row['id'];

  	  $_SESSION['success'] = "You are sucessfully logged in";
      header('location:index.php');


      // $destURL = $_SESSION['kickurl'] ? $_SESSION['kickurl'] : 'index.php';
      // unset($_SESSION['kickurl']);
      // header('Location: ' . $destURL);
      // exit();
  	  // else header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
