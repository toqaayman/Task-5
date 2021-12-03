<?php

print_r($_SERVER["REQUEST_METHOD"]);
echo "<br>";
print_r($_GET);
echo "<br>";
print_r($_POST);
echo "<br>";
print_r($_REQUEST);
echo "<br>";

$name="ali";
$q=10;
 print_r($GLOBALS);
echo "<br>";
print_r($GLOBALS["name"]);
echo "<br>";

function test(){
    echo $GLOBALS["name"] ."<br>";
}
test();








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
    
<form action="" method="POST">
    <input type="text" name="test" id="">
    <button type="submit">click</button>
</form>
</body>
</html>