<?php
$host = "localhost";
$username = "root";
$password = "Aditya@123";
$database = "college";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Erroe ocured".$conn->connect_error);
}
echo "<h1>Connection Succesful</h1>";

$result = $conn->query("select * from students")->fetch_all();
echo"<pre>";
print_r($result);
