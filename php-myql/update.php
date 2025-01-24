<?php

echo $_GET['id'];
include("./config.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $getstudent = $conn->prepare("Select * from students where id ='$id'");
    $getstudent->execute();
    $result = $getstudent->fetchAll();
   $name = $result[0]['name'];
   $course = $result[0]['course'];
   $batch = $result[0]['batch'];
   $city = $result[0]['city'];
   $year = $result[0]['year'];


}



?>

<form action="" method="post">

<input type="text" value="<?php echo $name; ?>" name="name" placeholder="Enter Name">
<br>
<input type="text" value='<?php echo $course; ?>' name="course" placeholder="Enter Course">
<br>
<input type="text" value='<?php echo $batch; ?>' name="batch" placeholder="Enter Batch">
<br>
<input type="text" value='<?php echo $city; ?>' name="city" placeholder="Enter city"  >
<br>
<input type="text" value='<?php echo $year; ?>' name="year" placeholder="Enter year">
<br>
<button value="<?php echo $id; ?>"  name="update" >update Data</button>

</form>


<?php

   
//echo $_POST['update'];
if(isset($_POST['update']))
{
    $id = $_POST['update'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    $update = $conn ->prepare("UPDATE students SET name = '$name', course = '$course', batch = '$batch ', city = '$city', year = '$year' WHERE id = '$id'");
    $update->execute();
    if($update->execute())
    {
        header('location:delete.php');
    }
    else{
        echo "Error!! not updated ";
    }

}


?>