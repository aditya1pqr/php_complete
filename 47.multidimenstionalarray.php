<?php
$user = [
[1, "aditya", "aditya@gmail.com", "123456"],
[2, "singh", "singh@gmail.com"],
[3, "tiwari", "tiwari@gmail.com"],
[4, "shivam", "shivam@gmail.com"],
[5, "kisalay", "kisalay@gmail.com"]
];
echo "<table border=1>";

for($i=0; $i<count($user); $i++){
    echo "<tr>";
     for($j=0; $j<count($user[$i]); $j++){
        echo "<td>";
        echo $user[$i][$j];
        echo "</td>";
       
    
    }
    echo "</tr>";
}

echo "</table>";

?>