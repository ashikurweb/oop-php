<?php 

class Student 
{
    static $name = 'Ashikur Rahman';
    static $roll = 101;

    static function studentDetails ()
    {
        return Student::$name . '<br>' . Student::$roll;
    }
}

echo Student::studentDetails();
echo '<br>';
echo Student::$name;