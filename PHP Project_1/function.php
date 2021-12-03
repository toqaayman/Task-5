<?php

// declare (strict_types=1);
// function sumnum( int $n1, ?int $n2, int $n3=2):void{
//     $res=$n1+$n2+$n3;
  
//  }
//  $x=sumnum(10,null,40);
//  echo $x;

// function sayHello($msg){
//     echo "$msg";

// }

// sayHello("hello");

// function sumNumbers($num1,...$vals){
//     $sum=$num1;
//     foreach($vals as $val){
//         $sum+=$val;
//     }
//     return $sum;
// }


// $sumnum=sumNumbers(...$numbers);
// echo $sumnum;

// $v=[100,200,...$numbers];
// print_r($v);


$numbers=[10,20,30];

$multiplier=2;

// $newNumbers=array_map(function($element)use($multiplier){
       
//     return $element * $multiplier;
// },$numbers);

// print_r($newNumbers);

$newNumbers2=array_map(fn($element) => $element * $multiplier,$numbers);
print_r($newNumbers2);






?>