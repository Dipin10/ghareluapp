<?php include ('adminServicesCRUD.php'); ?>
<?php include('deleteserver.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
  table, th, td {
      border: 1px solid black;
  }
  </style>
  <body>
    <?php include('admincontrol.php'); ?>
    <h2>SERVICES TABLE</h2>
    <?php
    $servername = "localhost";
    $usernameone = "root";
    $password = "";
    $dbname = "registration";
    // Create connection
    $conn = new mysqli($servername, $usernameone, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM `services`";
    $result=mysqli_query($conn,$query);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>ID</th><th>name</th><th>Image</th><th>Description</th></tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"].  "</td><td><img height='auto' width='100px' src=".$row["imgdir"]."></td><td>" . $row["description"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();

     ?>
     <div class="header">
      <h2>Add Services</h2>
     </div>
     <form action="" method="POST" enctype="multipart/form-data">
       <div class="input-group">


       <input type="text" name="name" placeholder="Name">
       <input type="file" name="file" placeholder="Image">
       <input type="textarea" name="description" placeholder="Description">
       <input type="submit" name="submit">
     </div>
     </form>
     <?php require 'errors.php'; ?>
     <div class="header">
      <h2>Delete Services</h2>
     </div>
     <form class="" action="" method="post">
       <div class="input-group">
        <label>provide id</label>
         <input type="number"  name="idonee">


      </div>
      <div class="input-group">
     <input type="submit" class="btn" name="delete_ser"></button>
   </div>
     </form>

  </body>
</html>
