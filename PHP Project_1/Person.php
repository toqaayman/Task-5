<?php


class Person{
    public $firstName;
    public $lastName;
    public static $counter=0;
    function __construct($fn,$ls)
{
    $this->firstName=$fn;
    $this->lastName=$ls;
    Person::$counter++;
}

public static function printCounter()
{
    // echo Person::$counter++;
    echo self::$counter."<br>";
}


}








?>