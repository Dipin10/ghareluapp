<?php
$idone = "";
$idtwo = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['delete_emp'])) {
  $idone = mysqli_real_escape_string($db, $_POST['idone']);
  if (empty($idone)) { array_push($errors, "id is required"); }
  $user_check_query = "SELECT * FROM employee WHERE id='$idone'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

    if ($user['id'] != $idone) {
      array_push($errors, "Enter a valid id");
    }

    else{
      array_push($errors , "deleted sucessfully");
    }
  $userone_check_query = "DELETE FROM employee WHERE id='$idone' LIMIT 1";
  $resultone = mysqli_query($db, $userone_check_query) or die(mysqli_error($db));


  // $useron = mysqli_fetch_assoc($resultone);
  // $userone = mysqli_fetch_assoc($resultone);
  // if ($userone['id'] != $idone) {
    //array_push($errors, "deleted sucessfully");
  // }

// else {
//   array_push($errors,"delet failed");
// }
}

// for delet from Users


// include ('errors.php');

if (isset($_POST['delete_usr'])) {
  $idtwo = mysqli_real_escape_string($db, $_POST['idtwo']);
  if (empty($idtwo)) {array_push($errors, "id is required"); }
  $user_check_query = "SELECT * FROM users WHERE id='$idtwo'  LIMIT 1";
  $resultonn = mysqli_query($db, $user_check_query);
  $useronn = mysqli_fetch_assoc($resultonn);

    if ($useronn['id'] != $idtwoo) {
      array_push($errors, "Enter a valid id");
    }

    else{
      array_push($errors , "deleted sucessfully");
    }
  $userone_check_query = "DELETE FROM users WHERE id='$idtwoo' LIMIT 1";
  $resultone = mysqli_query($db, $userone_check_query) or die(mysqli_error($db));


  // $useron = mysqli_fetch_assoc($resultone);
  // $userone = mysqli_fetch_assoc($resultone);
  // if ($userone['id'] != $idone) {
    //array_push($errors, "deleted sucessfully");
  // }

// else {
//   array_push($errors,"delet failed");
// }
}

if (isset($_POST['delete_ser'])) {
  $idtwoo = mysqli_real_escape_string($db, $_POST['idonee']);
  if (empty($idtwoo)) {array_push($errors, "id is required"); }
  $user_check_query = "SELECT * FROM services WHERE id='$idtwoo'  LIMIT 1";
  $resultonn = mysqli_query($db, $user_check_query);
  $useronn = mysqli_fetch_assoc($resultonn);

    if ($useronn['id'] != $idtwoo) {
      echo "Enter a valid id" ;
    }

    else{
      echo "deleted sucessfully";
    }
  $userone_check_query = "DELETE FROM services WHERE id='$idtwoo' LIMIT 1";
  $resultone = mysqli_query($db, $userone_check_query) or die(mysqli_error($db));
}

 ?>
