<?php
session_start();
print_r($_SESSION);

// phpinfo();
$name="abc";
$age=20;

define("TEST","welcome");
 
echo 10;
echo "<br>";
echo "ali";
echo "<br>";
echo 10,20,30;
echo "<br>";
print 10;
echo "<br>";
print_r([10,20,30]);
echo "<br>";
printf("something: %d-%d (%20.2f) [%s] {%b}",10,20,30.55555,"welcome",true);
echo "<br>";
$d=sprintf("something: %d-%d (%20.2f) [%s] {%b}",10,20,30.55555,"welcome",true);
echo $d;
echo "<br>";
var_dump(10);
echo "<br>";
var_dump([10,20,30]);
/////////

echo "<br>";echo "<br>";echo "<br>";


$x=10;
echo "result = $x";
echo "<br>";
echo 'result = '. $x;

//
$example ="<p>welcome to php</p>";
$example2="    <b>hello from php</b>        ";

//$example3 =str_repeat($example2,5);
// $example3=str_replace("w","b",$example2);
// $example3=ucfirst($example2);
// $example3=ucwords($example2);

// $example3=trim($example2);
// $example3=htmlspecialchars_decode($example2);

// $example3=str_shuffle($example2);

// $example3=str_word_count($example2);

// $example3=explode(" ",$example2);
// $example3=implode("-",$example3)

// $example3=strlen($example2);
// $example3=substr($example2,3,10);
//  $s="welcome\nto\nphp";
//  $ss=nl2br($s);

//  $s="welcome<br>to<br>php";
//  $ss=str_replace("<br>","\n",$s);



?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>HELLO</h1>
    <?php  echo $example;
    echo "<br>";?>
   
 
    <?php  print_r($ss) ?>
</body>
</html>