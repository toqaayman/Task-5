<?php

// $t="admin()@admin//.com";
// echo filter_var($t,FILTER_SANITIZE_EMAIL);

 if($_SERVER["REQUEST_METHOD"]=="POST"){
   

    $errors=[];
    if(strlen($_POST["firstName"]) >60){
        array_push($errors,"first name should be less trhan 60");
    }

    if(strlen($_POST["lastName"]) >60){
        array_push($errors,"last name should be less trhan 60");
    }

    if(!isset($_POST["username"]) || strlen($_POST["username"]) <=0){
        array_push($errors,"username is required");
    }elseif(strlen($_POST["username"]) <6){
        array_push($errors,"username should be more thann 6");
    }elseif(strlen($_POST["username"]) >100){
        array_push($errors,"username should be less thann 100");
    }

    if(!isset($_POST["email"]) || strlen($_POST["email"]) <=0){
        array_push($errors,"email is required");
    }elseif(strlen($_POST["email"]) >125){
        array_push($errors,"username should be less thann 125");
    }elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
         $email=htmlspecialchars($_POST["email"]);
         array_push($errors," $email email not valid");
    }

    if(!isset($_POST["password"]) || strlen($_POST["password"]) <=0){
        array_push($errors,"password is required");
    }elseif(strlen($_POST["password"]) <6){
        array_push($errors,"password should be more thann 125");
    }elseif(strlen($_POST["password"]) >100 ){
        array_push($errors,"password should be less thann 100");
    }

    if(!isset($_POST["repassword"]) || strlen($_POST["repassword"]) <=0){
        array_push($errors,"repassword is required");
    }elseif(strlen($_POST["repassword"]) <6){
        array_push($errors,"repassword should be more thann 125");
    }elseif(strlen($_POST["repassword"]) >100 ){
        array_push($errors,"repassword should be less thann 100");
    }

    if( strlen($_POST["bio"]) >1000){
        array_push($errors,"bio should be less than 1000");
    }

    if(empty($_POST["gender"])){
        array_push($errors,"Gender is required");
    }

    if(count($errors) <=0){
        if(strcmp($_POST["password"],$_POST["repassword"]) !=0){
            array_push($errors,"password and repassword not matched");
        }
    }
    if( strlen($_POST["phone"]) != 11){
        array_push($errors,"Mobile phone is incorrect");
    }
    $birthdate = 'birthDate';
    if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$birthdate)) {
        array_push($errors,"unvalide birthdate");
    }

}








?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Register</title>
</head>
<body>

<div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-0 offset-md-3">
                <div class="card shadow border shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center">Register</h2>
                        <hr>
                        <?php if(isset($errors) && count($errors) >0) {?>

                         <div class="alert alert-danger">
                               <ul class="my-0 list-unstyled">
                                   <?php foreach($errors as $val) {?>
                                        <li> <?php echo $val ?>  </li>
                                    <?php }?>
                               </ul>
                           </div>
                            <?php }?>
                        <form action="" method="POST" novalidate>
                            <div class="row mb-3">
                                <label for="firstName" class="col-form-label col-12">FirstName</label>
                                <div class="col-12">
                                    <input type="text" name="firstName" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lastName" class="col-form-label col-12">lastName</label>
                                <div class="col-12">
                                    <input type="text" name="lastName" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="username" class="col-form-label col-12">Username</label>
                                <div class="col-12">
                                    <input type="text" name="username" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-form-label col-12">Email</label>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-form-label col-12">Password</label>
                                <div class="col-12">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="repassword" class="col-form-label col-12">rePassword</label>
                                <div class="col-12">
                                    <input type="password" name="repassword" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="birthDate" class="col-form-label col-12">birthDate</label>
                                <div class="col-12">
                                    <input type="date" name="birthDate" class="form-control">
                                </div>
                            </div>
                            <div>
                                <label for="phone">Enter your phone number</label>
                                <div>
                                <input name="phone" type="tel" id="phone" class="form-control" name="phone" pattern="[0-9]{2}-[0-9]{3}-[0-9]{7}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gender" class="col-form-label col-12">Gender</label>
                                <div class="col-12">
                                    <select name="gender" id="gender" class="form-select">
                                     <option value="" selected disabled></option>
                                     <option value="1" >Male</option>
                                     <option value="2" >Female</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bio" class="col-form-label col-12">bio</label>
                                <div class="col-12">
                                    <textarea name="bio" id="bio" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </div>



                            
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>