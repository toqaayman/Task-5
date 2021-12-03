<?php

function test($a,$b,$c){
    if($a==0){
        throw new Exception("a can not be zero");
    }

     return (($b+$c) / $a);
}
try{
echo test(10,20,30);
echo "<br>";
echo test(0,20,30);
echo "<br>";
echo test(10,20,30);
echo "<br>";
}catch(Exception $ex){
 echo "something went erong " . $ex->getMessage();
}




// throw new LengthException("length shold be less than 10");
// echo "welcome";

// error_reporting(E_ALL & ~ E_ERROR);
// //   $arr=[1,2,3,[];

//   echo test();

// include_once("ts.php");

// echo $x;
// echo "welcome";




?>