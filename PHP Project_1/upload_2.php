<?php
require_once("database/conn.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (!isset($_FILES["avatar"])) {
        array_push($errors, "File is Required");
        $_SESSION["errors"]=$errors;
        header("Location:upload_2.php");
            return;

    } else {
        $avatar = $_FILES["avatar"];
        $size = $avatar["size"];
        $name = $avatar["name"];
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $ext = strtolower($ext);

        if ($avatar["error"]) {
            array_push($errors, "Avatar is required");
        } else {
            if ($size > 5 * 1024 * 1024) {
                array_push($errors, "avatar size must be <=5MB!");
            }

            if (!in_array($ext, ["png", "jpg", "jpeg"])) {
                array_push($errors, "avatar should be png or jpg or jpeg");
            }
        }


        if (count($errors) > 0) {
            $_SESSION["errors"] = $errors;
            header("Location:upload.php");
            return;
        } else {
            //storage db
           $tmpFile=$avatar["tmp_name"];
           $content=file_get_contents($tmpFile);
           $query="INSERT INTO avatar_v2(content,extension,size) VALUES(:c,:e,:s)";
            $stmt=$pdo->prepare($query);
            $stmt->execute([
              ":c"=> $content,
              ":e"=>$ext,
              ":s"=>$size,
            ]);
  
            $_SESSION["success"] = "Avatar is uploded success";
            header("Location:upload_2.php");
            return;
        }
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
    <title>upload</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-0 offset-md-3">
                <div class="card shadow border">
                    <div class="card-body">
                        <h2 class="text-center">Avatar</h2>
                        <hr>
                        <?php if (isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) { ?>

                            <div class="alert alert-danger">
                                <ul class="my-0 list-unstyled">
                                    <?php foreach ($_SESSION['errors'] as $val) { ?>
                                        <li> <?php echo $val ?> </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php unset($_SESSION['errors']); ?>
                        <?php } ?>

                        <?php if (isset($_SESSION["success"])) { ?>
                            <div class="alert alert-success">
                                <?php echo $_SESSION["success"] ?>
                                <?php unset($_SESSION["success"]) ?>
                            </div>
                        <?php } ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Choose File</label>
                                <input type="file" class="form-control" name="avatar" id="avatar">
                            </div>
                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-success">Upload</button>
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