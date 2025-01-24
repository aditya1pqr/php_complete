<?php

include("./config.php");

$student = $conn->prepare("INSERT into students (name, course, batch, city, year) VALUES ('SHIVAM', 'btech', 'morning', 'lucknow', '2024')");
$result=$student->execute();
if($result)
{
    echo "data inserted";
}
else
{
    echo "data not inserted";
}


?>