<?php 

class Student 
{
    public $name;
    protected $roll;
    private $reg;

    function getValue () 
    {
        echo "Name: " . $this->name . "\n";
        echo "Roll: " . $this->roll . "\n";
        echo "Registration Number: " . $this->reg . "\n";
    }

    function setValue ($name, $roll, $reg) 
    {
        $this->name = $name;
        $this->roll = $roll;
        $this->reg = $reg;
    }

    function getDetails () 
    {
        return "Name is {$this->name}, Roll is {$this->roll}, Registration Number is {$this->reg}";
    }
}

$std = new Student();
$std->setValue('Ashikur Rahman', 432832, 1502054777);
echo $std->getDetails();