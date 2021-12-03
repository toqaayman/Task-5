<?php

$x=10;
if($x > 5) echo "more than 5";
else echo "less than 5";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$avg=86;
if($avg < 50){
    echo "faild";
}elseif( $avg < 65){
    echo "pass";
}elseif($avg <75){
    echo "good";
}elseif( $avg <85){
    echo "v.good";
}else{
    echo "excellent";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$y=4;
switch($y){
    case 1:
    echo "1";
    break;
    case 2:
    echo "2"; 
    break;
    case 3:
    echo "3";  
    break;
    case 4:
    echo "4";  
     break;
    default:
    echo "non";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$z=0;
$v=10;
$z=($v >= 5) ? "welcome":"hello";
echo $z;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$f=3 ?? "default";

echo $f;









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