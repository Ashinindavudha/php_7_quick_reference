<?php
class Student
{
    // constructor
    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function say_name()
    {
        echo "My name is " . $this->first_name . " " . $this->last_name . ".\n";
    }
}

$alex = new Student("Alex", "Jones");
$alex->say_name();


// inheritance
class MathStudent extends Student
{
    public function sum_number($first_number, $second_number)
    {
        $sum = $first_number + $second_number;
        echo $this->first_name . " says that " . $first_number . " + " . $second_number . " is " . $sum;
    }
}

$eric = new MathStudent("Eric", "Smith");
$eric->say_name();
$eric->sum_number(5, 10);
