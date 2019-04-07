<?php
// session_start();
$place    = "";
$date     = "";
$workerno = "";
$services = "";
$errors = array();


$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['submitted'])) {

  if(isset($_GET['from']))
  {
    $serviceValue=$_GET['from'];
  }

  // receive all input values from the form
 $id = $_SESSION['user_id'];
 // $user = $_SESSION['username'];
 $place = $_POST['place'];
 $workerno = $_POST['workerno'];
 $services = $_POST['services'];
 $date = $_POST['date'];


// //  $Phoneno = mysqli_real_escape_string($db, $_POST['Phoneno']);
// array_push($errors, $place. " ". $workerno. " ". $date. " ". $id);

  //$email = mysqli_real_escape_string($db, $_POST['email']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($place)) { array_push($errors, "place is reqiured"); }
  //if (empty($location)) { array_push($errors, "location is required"); }
  //if (empty($Phoneno)) { array_push($errors, "Phone No  is required"); }
  //if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($date)) { array_push($errors, "date is required"); }
  if (empty($workerno)) { array_push($errors, "workerno is required"); }
  if (empty($services)) { array_push($errors, "services is required"); }
  $query="UPDATE `users` SET `place`='$place',`workerno`='$workerno',`services`='$services',`date`='$date' WHERE id='$id';";
  $result=mysqli_query($db, $query);
  if(!$result)
  {
    array_push($errors, "Error Updating to DB");
  }
  else {
    {header('location:confirmation.php');}
  }

}



?>
