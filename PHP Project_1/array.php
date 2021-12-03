<?php
// $x=[10,20,30,"welcome",[],true];
// var_dump($x);
// echo "<br>";
// echo $x[2];
// echo "<br>";
// $x[2]=100;
// echo $x[2];
// echo "<br>";


// $data=[
//   "first_name"=>"ali",
//   "last_name"=>"ahmed",
//   "age"=>20,
// ];

// echo $data["first_name"];
// echo "<br>";

// $d=[
//     [10,20,[30,40,50]],
//     [11,210,[340,450,500]],
//     [310,250,[370,80,30]],
// ];
// echo $d[1][2][0];
// echo "<br>";

// $y="welcome to php!";
// echo $y[2];
// echo "<br>";
// echo $y[-2];
// echo "<br>";

$num=[10,20,30,30,40];

array_push($num,50);
array_unshift($num,100);
var_dump($num);

echo "<br>";
 array_pop($num);
 array_shift($num);
 var_dump($num);
 echo "<br>";

 $length=count($num);
 echo $length;
 echo "<br>";
 $rev=array_reverse($num);
 var_dump($rev);
 echo "<br>";


 $uni=array_unique($num);
 var_dump($uni);
 echo "<br>";

 $sum=array_sum($num);
 var_dump($sum);
 echo "<br>";

 $pro=array_product($num);
 var_dump($pro);
 echo "<br>";


 unset($num[1]);
 var_dump($num);
 echo "<br>";


 $last=end($num);
 var_dump($last);
 echo "<br>";

 $isfound=in_array(100,$num);
 var_dump($isfound);
 echo "<br>";
 shuffle($num);
 var_dump($num);
 echo "<br>";
  $num[]=1000;
  var_dump($num);



 






?>