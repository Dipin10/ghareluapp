<?php
  session_start();


  if (!isset($_SESSION['username'])) {
      	$_SESSION['msg'] = "You must log in first";
        $_SESSION["login_redirect"] = $_SERVER["PHP_SELF"];
         header("Location: login.php");
         exit;
  }

 if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>hllo</h1>
  </body>
</html>
