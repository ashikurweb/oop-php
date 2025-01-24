<?php 

class Student 
{
    var $name = 'Ashikur Rahman'; // name is property
    var $roll = '432832';

    function studentDetails ()
    {
        return "Hey! {$this->name}, Your roll number is {$this->roll}";
    }
}

$std1 = new Student();
echo $std1->name; // change value assign $std1->name = 'Sabikun Nahar Priya'
echo '<br>';
echo $std1->studentDetails();