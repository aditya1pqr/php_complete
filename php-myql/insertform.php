<form action="" method="post">
<input type="text" name="name" placeholder="Name" >
<br>
<br>
<input type="text" name="course" placeholder="course" >
<br>
<br>
<input type="text" name="batch"  placeholder="batch" >
<br>
<br>
<input type="text" name="city"  placeholder="city" >
<br>
<br>
<input type="text" name="year"  placeholder="year" >
<button >add data</button>

</form>

<?php
if(isset($_POST['name']))
{
    
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];
    include("./config.php");
    $student = $conn->prepare("INSERT into students (name, course, batch, city, year) VALUES ('$name',' $course', '$batch', '$city', '$year')");
    $result=$student->execute();

if($result)
{
    echo "data inserted";
}
else
{
    echo "data not inserted";
}
}



?>