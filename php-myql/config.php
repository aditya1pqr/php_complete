<?php
$host="localhost";
$username="root";
$password="Aditya@123";

$conn = new PDO("mysql:host=$host; dbname=college",$username,$password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// echo "connection established";



?>