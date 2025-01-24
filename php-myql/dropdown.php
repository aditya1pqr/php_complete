<?php

include("./config.php");
$getStudent=$conn->prepare("Select * from Students");
$getStudent->execute();
$students=$getStudent->fetchAll();

echo "<Select>";
foreach($students as $student){

 echo "<option value='".$student['id']."'>".$student['name']."</option>";



}
echo "</Select>"



?>