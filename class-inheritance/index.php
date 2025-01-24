<?php 

class Teacher 
{
    var $teacher_name = 'Lemon';

    function sayTeacher ()
    {
        return "Hello {$this->teacher_name}, Sir!";
    }
}

$tech = new Teacher ();
echo $tech->sayTeacher();
echo '<br>';

class Student extends Teacher 
{
    var $student_name = 'Ashik';

    function sayStudent ()
    {
        return "Hello {$this->student_name}, How are you?";
    }
}

$std = new Student();
echo $std->sayStudent();
echo '<br>';
echo $std->sayTeacher();
