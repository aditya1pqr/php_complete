

<?php

include("./config.php");

$getStudent=$conn->prepare("Select * from students");
$getStudent->execute();
$students=$getStudent->fetchAll();


echo "<Table border='1'>";

foreach($students as  $student)
{
    echo "<tr>
    <td>" . $student['name'] . "</td>
    <td>" . $student['course'] . "</td>
    <td>" . $student['batch'] . "</td>
    <td>" . $student['city'] . "</td>
    <td>" . $student['year'] . "</td>
    <td><form  method='post'>
    <button name=delete value=".$student['id']."> Delete</button>
    <td><a href='update.php?id=".$student['id']."'>Update</a></td>
    </form>
    </td>
    
    
    
    
    </tr>" ;
}




echo "</Table>";



if(isset($_POST['delete']))
{
 $id= $_POST['delete'];   

 $result= $conn->prepare("delete  from students where id='$id'");
//  $result->execute();
 if($result->execute())
 {
    echo "Student deleted";
 }else{
    echo "Student not deleted";
 }

}



?>