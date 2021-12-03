
<?php

// include("Person.php");

// $person1=new Person("ali","ahmed");
// $str=serialize($person1);
// file_put_contents("text.txt",$str);

// $str=file_get_contents("text.txt");

// $person0=unserialize($str);

// print_r($person0);

// $arr=[10,20,true,"ali",[10,20,30],false,[]];
// $str=serialize($arr);
// file_put_contents("text.txt",$str);

spl_autoload_register(function($className){
    // if($className == "Person"){
    //     require_once("test.php");
    // }
    if(file_exists($className . ".php")){
        require_once($className . ".php");
    }else{
           die("this is class not found");
    }
});
    

$obj=new Person("ali","ahmed");
print_r($obj);
$obj->lastName;
echo "nnnnnn";





?>