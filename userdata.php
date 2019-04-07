
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<div class="firstpart" style="padding:20px;float:left;">
  <h1>Users Table</h1>

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
</div>
<div class="secondpart" style="padding:20px;float:right;">
  <h1>Employee Table</h1>
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

</div>
<div class="thirdpart" style="padding:20px;float:left;">
  <h1>Admin Table</h1>
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

  $sqltwo = "SELECT * FROM admins";
  $resulttwo = $conn->query($sqltwo);

  if ($resulttwo->num_rows > 0) {
      echo "<table><tr><th>ID</th><th>adminname</th><th>address</th><th>phoneno</th><th>email</th></tr>";
      // output data of each row
      while($row = $resulttwo->fetch_assoc()) {
          echo "<tr><td>" . $row["id"]. "</td><td>" . $row["adminname"].  "</td><td>" . $row["Address"].  "</td><td>" . $row["Phone No"].  "</td><td>" . $row["email"].  "</td></tr>";
      }
      echo "</table>";
  } else {
      echo "0 results";
  }
  $conn->close();
   ?>

</div>
</body>
</html>
