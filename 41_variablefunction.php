<?php


function sum()                                         
{
    echo "sum function is called";
}

$val="sum";                                            // it is variable functions
// $val();


function add($a){               // this the callback  functions
$a();
}
add($val);
?>