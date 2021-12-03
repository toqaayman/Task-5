<?php


// //setcookie('test',"welcome",time() + 20);
// setcookie('test1',"welcome1",time() + 200000);
// setcookie('test1',"welcome1",time() - 100);

// print_r($_COOKIE);



session_start();
 echo session_id();
 echo "<br>";
 $_SESSION["test"]="welcome";

 $_SESSION["test1"]="welcome1";
 $_SESSION["tes2t"]="welcome2";

//  unset($_SESSION["test"]);

session_unset();
 echo $_SESSION["test"];
 echo "<br>";
 echo $_SESSION["test1"];

session_destroy();









?>