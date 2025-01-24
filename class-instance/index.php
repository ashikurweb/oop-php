<?php 

class Student 
{
    function sayHello ()
    {
        return 'Hello World';
    }
}

$std1 = new Student();
echo $std1->sayHello();