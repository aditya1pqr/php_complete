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

$getStudent = $conn->prepare("SELECT * FROM students ");
$getStudent->execute();
$students = $getStudent->get_result();


echo"<Table border = '1'>";
echo"<tr>
<td>Name</td>
<td>Course</td>
<td>Batch</td>
<td>City</td>
<td>Year</td>
</tr>";
foreach($students as $std)
{
  echo"<tr>
  <td>".$std['name']."</td>
  <td>".$std['course']."</td>
  <td>".$std['batch']."</td>
  <td>".$std['city']."</td>
  <td>".$std['year']."</td>
  <tr>";
}
echo"</Table>";
?>