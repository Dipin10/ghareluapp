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
    <h2>EMPLOYEE TABLE</h2>
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

    $sqlone = "SELECT * FROM employee";
    $resultone = $conn->query($sqlone);

    if ($resultone->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>username</th><th>address</th><th>employeework</th><th>phoneno</th><th>email</th></tr>";
        // output data of each row
        while($row = $resultone->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"].  "</td><td>" . $row["address"].  "</td><td>" . $row["employeework"].  "</td><td>" . $row["phoneno"].  "</td><td>" . $row["email"].  "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
     ?>
     <!-- <h1 style="margin:30px;">ADD EMPLOYEE</h1> -->
     <?php require 'employee.php'; ?>
     <?php require 'deleteemp.php'; ?>


  </body>
</html>
