<form action="" method="post">

<input type="text" name="search" placeholder="Search for results">
<button type="submit">Search</button>



</form>

<?php

// echo $_POST['search'];
include("./config.php");


if(isset($_POST['search']))
{

    $search = $_POST['search']; 
    $getstudent = $conn-> prepare("SELECT * FROM students WHERE name LIKE '%$search%'");
    $getstudent -> execute();
    $result=$getstudent->fetchALL();
  

echo"<Table border = '1'>";
echo"<tr>
<td>Name</td>
<td>Course</td>
<td>Batch</td>
<td>City</td>
<td>Year</td>
</tr>";
foreach($result as $std)
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

    
    
}



?>