<?php
  session_start();
  if(isset($_SESSION["isLogged"]) && $_SESSION["isLogged"]){
      header("Location:index.php");
      return;
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];
    if (!isset($_POST["username"])) {

        array_push($errors, "username is req");

    } elseif (strlen($_POST["username"]) < 6) {
        array_push($errors, "username should be more than 6");
    } elseif (strlen($_POST["username"]) > 100) {
        array_push($errors, "username should be less than 100");
    }

    if (!isset($_POST["password"])) {

        array_push($errors, "password is req");
        
    } elseif (strlen($_POST["password"]) < 6) {
        array_push($errors, "password should be more than 6");
    } elseif (strlen($_POST["password"]) > 100) {
        array_push($errors, "password should be less than 100");
    }


    if(count($errors) <=0){

      
        $username=$_POST["username"];
        $password=$_POST["password"];  

        $_SESSION["username"]=$username;
        $_SESSION["isLogged"]=true;
          
        header("Location:index.php");
        return;

        //   print_r($username);
        //   echo "<br>";
        //   print_r($password);
        //   echo "<br>";
    }else{
        $_SESSION['errors']=$errors;
        header("Location:login.php");
        return;
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
    <title>Login</title>
</head>

<body>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-0 offset-md-3">
                <div class="card shadow border shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center">Login</h2>
                        <hr>
                        <?php if(isset($_SESSION['errors']) && count($_SESSION['errors']) >0) {?>

                         <div class="alert alert-danger">
                               <ul class="my-0 list-unstyled">
                                   <?php foreach($_SESSION['errors'] as $val) {?>
                                        <li> <?php echo $val ?>  </li>
                                    <?php }?>
                               </ul>
                           </div>
                           <?php unset($_SESSION['errors']); ?>
                            <?php }?>
                        <form action="" method="POST">
                            <div class="row mb-3">
                                <label for="username" class="col-form-label col-12">Username</label>
                                <div class="col-12">
                                    <input type="text" name="username" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-form-label col-12">Password</label>
                                <div class="col-12">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit">Login</button>
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