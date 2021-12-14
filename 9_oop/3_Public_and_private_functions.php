<?php
class Student
{
    // constructor should be public

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    // for external use only
    public function say_name()
    {
        //return $this->first_name . " " . $this->last_name;
        echo "My name is " . $this->first_name . " " . $this->last_name . "\n";
    }
    // for internal use only
    private function full_name()
    {
        return $this->first_name . " " . $this->last_name;
    }
}
$alex = new Student("Alex", "Smith");
$alex->say_name();
// this will not work
//echo $alex->full_name();
