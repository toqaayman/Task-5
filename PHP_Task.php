<!-- task 1 -->
<?php
print(strtoupper("the quick brown fox jumps over the lazy dog."))."\n"; //uppercase
print(strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG"))."\n"; //lowercase
print(ucfirst("the quick brown fox jumps over the lazy dog."))."\n"; //first char upper
print(ucwords("the quick brown fox jumps over the lazy dog."))."\n"; //first character of each word uppercase
?>

<!-- task 2 -->
<?php
$string= '082307'; 
echo substr(chunk_split($string, 2, ':'), 0, -1)."\n";
?>