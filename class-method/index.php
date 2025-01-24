<?php 

class Student 
{
    function greeting ()
    {
        
    }

    function weather ()
    {

    }
}

$my_methods = get_class_methods('Student');

foreach ( $my_methods as $method ) {
    echo $method . "<br>";
}