<?php

// for($i=0;$i<=100;$i++){
//     echo "$i <br>";
// }

// for($i=0 ; $i<=100 ; $i++){
//     if($i % 5==0 && $i %7==0){
//         echo "$i <br>";
//     }
// }

// $i=0;
// while($i <=100){
//     if($i % 5==0 && $i %7==0){
//         echo "$i <br>";
//     }
//     $i++;
// }

// $i = 0;
// while ($i <= 200) {
//     if ($i == 105) {
//         $i++;
//         continue;   
//     }

//     if ($i % 5 == 0 && $i % 7 == 0) {
//         echo "$i <br>";
//     }
//     $i++;
// }
// $i=30;
// do{
//     echo "$i <br>";
// }while($i<10);

// $x=[10,20,30];

// foreach($x as $K=> $val){
//     echo "[$K] $val <br>";
// }


$str="welcome to php!";

$x=explode(" ",$str);

foreach($x as $k=>$val){
        $newk=$k+1;
    echo "$newk->$val <br>";
}





?>












<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>