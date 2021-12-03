<?php




require("Person.php");
// $person1=new Person('','');
// $person2=new Person('','');
// $person3=new Person('','');
// $person4=new Person('','');
// $person5=new Person('','');


// echo Person::$counter;
// echo "<br>";
// echo Person::printCounter();
  


class A{
    function sayHello(){
        echo "<p>hello</p>";
    }
}


trait X{
    function saywelcom(){
        echo "<p>welcome</p>";
    }
    function sayBye(){
        echo "<p>bye</p>";
    }
}

trait Y{
    function saywelcom2(){
        echo "<p>welcome</p>";
    }
    function sayBye2(){
        echo "<p>bye</p>";
    }
}

class B extends A{
     use X,Y;
}

$obj=new B();
$obj->saywelcom2();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php include_once("test.php")?>
    <?php include_once("test.php")?>
</body>
</html>