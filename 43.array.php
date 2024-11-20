<?php
$user = ["aditya", "sachin", "rahul", "virat"];
echo count($user);
// for($i=0; $i<count($user) ;$i++)
// {
//     echo "<h1>$user[$i]</h1>";

// }


foreach($user as $x)         // foreach loop is used to iterate over arrays  1st syntax
{
    echo "<h4>$x</h4>";
}


foreach($user as $x):             // for each second synatx
    echo "<h1>$x</h1>";
endforeach;

// associative array
$person = ["name" => "aditya", 
"age" => 25,
"city" => "delhi",
"country" => "india",
"email" => "aditya@gmail.com"
];

foreach($person as $key=> $data)
{
    echo "$key : $data <br>";
}
echo "<br>";
foreach($person as $key=>$value):             // for each second synatx
    echo "$key : $value <br>";
endforeach;
?>