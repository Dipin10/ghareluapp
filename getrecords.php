<?php

$host         = "localhost";
$username     = "root";

$password     = "";

$dbname       = "registration";
$result_array = array();

/* Create connection */
$conn = new mysqli($host, $username, $password, $dbname);

/* Check connection  */
if ($conn->connect_error) {

     die("Connection to database failed: " . $conn->connect_error);
}

/* SQL query to get results from database */

$sql = "SELECT id, username,address,phoneno,email FROM users ";

$result = $conn->query($sql);

/* If there are results from database push to result array */

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        array_push($result_array, $row);

    }

}



?>
