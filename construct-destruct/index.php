<?php 

class Student 
{
    public $name = 'Sabikun Nahar Priya';
    protected $roll = 1234;
    private $reg = 5678;
    static $cgpa = 4.89;

    function __construct()
    {
        echo $this->roll . '<br>';
        echo $this->reg . '<br>';
        echo self::$cgpa;
    }
}

$student = new Student();

?>