<?php
$name="aditya";
function getname()
{
    global $name; // accessing global variable  // ACCESING GLOBAL VARIABLE INSIDE FUNCTION ANOTHER WAY BY PASSING AS PARAMETER;
echo $name;
}

getname();

function getaddress()
{
    $name = "Rahul"; // local variable
}




?>