<?php

session_start();
if(!(isset($_SESSION["isLogged"]) && $_SESSION["isLogged"])){
     header("Location:login.php");
     return;
}

session_unset();
session_destroy();
header("Location:login.php");
return;










?>