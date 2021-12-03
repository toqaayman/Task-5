<?php

abstract class Shape{
    public $area;
    abstract function calcArea();
     final public function printArea(){
        echo "<p>Area= {$this->area}</p>";
    }
}


class Circle extends Shape{
 

  public $radius;
  function __construct($r){
      $this->radius=$r;
  }
    function calcArea()
    {
        $this->area= 3.14 * $this->radius ** 2;
    }
}

class Square extends Shape{
    public $length;
    function __construct($l){
        $this->length=$l;
    }
    function calcArea()
    {
        $this->area=$this->radius ** 2;
    }
}

$circle=new Circle(10);
$circle->calcArea();
$circle->printArea();



















// abstract class Person{

// public $username;
// public $firstName;
// public $lastName;
// public $email;
// public $gender;
// function __construct($un,$fn,$ln,$em,$g)
// {
//     $this->username=$un;
//     $this->firstName=$fn;
//     $this->lastName=$ln;
//     $this->email=$em;
//     $this->gender=$g;
// }


// public function printInfo(){
//     echo "<p>firstName {$this->firstName}<br>".
//     "lastName {$this->lastName}<br>".
//     "lastName {$this->username}<br>".
//     "lastName {$this->email}<br>".
//     "lastName {$this->gender} </p>";
// }

//  abstract function printInfo2();

// }


// class MalePerson extends Person{
//     public $wifeName;

// function __construct($un,$fn,$ln,$em,$wn)
// {
//     parent::__construct($un,$fn,$ln,$em,$wn,"Male");
//     $this->wifeName=$wn;
// }

// function printInfo()
// {
//     parent::printInfo();
//     echo "<p>wife name {$this->wifeName}</p>";
// }

// public function printInfo2(){
//     echo "<p>firstName {$this->firstName}<br>".
//     "lastName {$this->lastName}<br>".
//     "user {$this->username}<br>".
//     "email {$this->email}<br>".
//     "wife {$this->wifeName}<br>".
//     "gender {$this->gender} </p>";
// }

// }

// $obi=new MalePerson('ali','ahmed','abc','a@a.com','ola');
// $obi->printInfo();

// class FemalePerson extends Person{

//     function __construct($un,$fn,$ln,$em,$g)
//     {
//         parent::__construct($un,$fn,$ln,$em,"Female");
//     }
    
//     function printInfo()
//     {
//         parent::printInfo();
//     }
//     public function printInfo2(){
//         echo "<p>firstName {$this->firstName}<br>".
//         "lastName {$this->lastName}<br>".
//         "user {$this->username}<br>".
//         "email {$this->email}<br>".
//         "wife {$this->wifeName}<br>".
//         "gender {$this->gender} </p>";
//     }
    
//     }














?>