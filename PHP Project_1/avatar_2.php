<?php  
require_once("database/conn.php");
session_start();

$query="SELECT * FROM avatar;";
$stm=$pdo->query($query);
$avatars=$stm->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Avatar</title>
</head>
<body>
<div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-0 offset-md-3">
                <div class="card shadow border">
                    <div class="card-body">

                   <?php  foreach ($avatars as  $avatar) {?>

                    <div class="text-center">
                    <img src="avatar/<?php echo $avatar["name"] ?>"
                                 alt="" width="100%">
                    </div>
             
                      <?php }?>


                    </div>
                </div>
            </div>
        </div>
    </div>





<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>