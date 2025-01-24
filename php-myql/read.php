<?php

include("./config.php");
$getStudent=$conn->prepare("Select * from Students");
$getStudent->execute();
$students=$getStudent->fetchAll();

echo "<table border='1'>";
foreach($students as $student)
{
    echo "<tr>
   <td>". $student['name']."</td>
    <td>". $student['course']."</td>
     <td>". $student['batch']."</td>
      <td>". $student['city']."</td>
       <td>". $student['year']."</td>
    
    </tr>";

}
echo "<table>";
?>