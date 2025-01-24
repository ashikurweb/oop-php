<?php 

class Student 
{
    public $name = 'Ashikur Rahman';
    protected $roll = 432832;
    private $reg = 1502054777;

    function studentDetails ()
    {
        return $this->name . '<br>' . $this->roll . '<br>' .$this->reg;
    }
}

$std = new Student ();

// echo $std->name; // access name
// echo $std->roll; // Cannot access protected property
// echo $std->reg; // Cannot access private property

echo $std->studentDetails();