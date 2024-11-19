<?php

function sum(){


    echo 10+20 ;
}
 sum();

 echo "<br>";

function name()
{
    return "Rahul";
}

echo "My name is " .name() ;

echo "<br>";
// paramaterized function
sum2(10,50);

function sum2($a, $b)
{
    echo $a + $b ;
}


// nested function
//first parent function is called then child function is called


function parent(){
    echo "Parent function is called <br>";
    function child()
    {
        echo "Child function is called <br>";
    }
    
}

parent();

?>