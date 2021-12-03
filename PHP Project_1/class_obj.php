<?php

class Person{
   public $username;
   public $age;
   protected $k;

//  function __construct($un)
//  {
//      $this->username=$un;
//  }
//  function __destruct()
//  {
//      echo "done";
//  }
  public function sayHello(){
       echo "<p>hello</p>";
   }
   public function printUserName(){
       echo "<p>usernamr is :{$this->username}</p>";
   }
   function __toString()
   {
       return "this is person class";
   }
}

$obj=new Person();
// $obj->k="ali";
$obj->sayHello();
$obj->printUserName();

$secondPerson=new Person('ahmed');
$secondPerson->printUserName();

print_r((string)$secondPerson);
echo "<br>";
print_r((array)$secondPerson);

// $obj2=new Person();
// $obj2->sayHello();
//  echo "<br>";
// $obj2=new Person('ahmed');
// $obj2->sayHello();
// $obj2->printUserName();

$t=["firstname"=>"ali","lastName"=>"ahemed"];
echo "<br>";
print_r((object)$t);
?>