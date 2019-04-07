<?php

require 'deleteserver.php'; ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <link rel="stylesheet" href="style.css">
  <style>
  table, th, td {
      border: 1px solid black;
  }
  </style>
  <body>
    <?php include('admincontrol.php'); ?>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>username</th><th>address</th><th>phoneno</th><th>email</th><th>place</th><th>workerno</th><th>sevices</th><th>date</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"].  "</td><td>" . $row["address"].  "</td><td>" . $row["phoneno"].  "</td><td>" . $row["email"].  "</td><td>" . $row["place"].  "</td><td>" . $row["workerno"].  "</td><td>" . $row["services"].  "</td><td>" . $row["date"].  "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }



    $conn->close();
    ?>

    <div class="header">
     <h2>Delete Users</h2>
    </div>
    <form class="" action="" method="POST">
      <?php include('errors.php'); ?>
      <div class="input-group">
       <label>provide id</label>
        <input type="number"  name="idtwo" >


     </div>
     <div class="input-group">
    <input type="submit" class="btn" name="delete_usr"></button>
  </div>
</form>

  </body>
</html>
