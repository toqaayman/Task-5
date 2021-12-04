<?php
require_once("includes/db.php");
require_once("includes/functions.php");
require_once("includes/sessions.php");

?>
<?php

$_SESSION["trackingUrl"] = $_SERVER["PHP_SELF"];

confirmLogin() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Dashboard</title>
</head>

<body>
    <!-- start navbar -->
    <div style="height: 10px; background: #27aae1;"></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AMIT.COM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="myProfile.php">
                            <i class="fas fa-user text-success"></i>
                            My Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post.php">
                            Post
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">
                            Categories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admins.php">
                            Manage Admin
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comments.php">
                            Comments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Blog.php?page=1">
                            Live Blog
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">
                            <i class="fas fa-sign-out-alt text-danger"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="height: 10px; background: #27aae1;"></div>


    <header class="bg-dark text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-cog" style="color: #27aae1;"></i>Dashboard</h1>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="d-grid">
                        <a class="btn btn-primary" href="addNewPost.php">
                            <i class="fas fa-plus"></i>
                            Add New Post
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="d-grid">
                        <a class="btn btn-info" href="categories.php">
                            <i class="fas fa-plus"></i>
                            Add New Category
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="d-grid">
                        <a class="btn btn-warning" href="admins.php">
                            <i class="fas fa-plus"></i>
                            Add New Admin
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="d-grid">
                        <a class="btn btn-success" href="comments.php">
                            <i class="fas fa-check"></i>
                            Approve Comments
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container py-2 mb-4">
            <div class="row">
                <div class="col-lg-2 d-none d-md-block">

                    <div class="card text-center bg-dark text-white mb-4">
                        <div class="card-body">
                            <h1 class="lead">Posts</h1>
                            <h4 class="display-5">
                                <i class="fab fa-readme"></i>
                                100
                            </h4>
                        </div>
                    </div>
                    
                    <div class="card text-center bg-dark text-white mb-4">
                        <div class="card-body">
                            <h1 class="lead">Categories</h1>
                            <h4 class="display-5">
                                <i class="fas fa-folder"></i>
                                100
                            </h4>
                        </div>
                    </div>

                    
                    <div class="card text-center bg-dark text-white mb-4">
                        <div class="card-body">
                            <h1 class="lead">Admin</h1>
                            <h4 class="display-5">
                                <i class="fa fa-users"></i>
                                100
                            </h4>
                        </div>
                    </div>

                    
                    <div class="card text-center bg-dark text-white mb-4">
                        <div class="card-body">
                            <h1 class="lead">Comments</h1>
                            <h4 class="display-5">
                                <i class="fas fa-comments"></i>
                                100
                            </h4>
                        </div>
                    </div>


                </div>
                <div class="col-lg-10">
                  <h1>Top Posts</h1>
                  <table class="table table-hover table-striped">
                    <thead class="table-dark">
                         <tr>
                             <th>#</th>
                             <th>Title</th>
                             <th>Date & Time</th>
                             <th>Author</th>
                             <th>Comments</th>
                             <th>Details</th>
                             
                         </tr>
                    </thead>
                  <?php
                    $sql="SELECT * FROM posts ORDER BY id desc LIMIT 0,5";
                    $stmt=$connectingDB->query($sql);
                    $sr=0;
                    while($dataRows=$stmt->fetch()){
                        $Id=$dataRows["id"];
                        $datetime=$dataRows["datetime"];
                        $title=$dataRows["title"];
                        $author=$dataRows["author"];
                        $sr++;
                  
                  ?>
                    <tbody>
                        <tr>
                            <td><?php  echo $sr;?></td>
                            <td><?php  echo $title;?></td>
                            <td><?php  echo $datetime;?></td>
                            <td><?php  echo $author;?></td>
                            <td>
                               <?php
                               
                               $total=approveComments($Id);
                               if($total >0){
                                   ?>
                                  <span class="badge bg-success"><?php echo $total?></span>
                                 
                            <?php } ?>
                            <?php
                               
                               $total=disPpproveComments($Id);
                               if($total >0){
                                   ?>
                                  <span class="badge bg-danger"><?php echo $total?></span>
                               
                            <?php } ?>
  
                            </td>
                            <td>
                               <a class="btn btn-info" href="fullPost.php?id=<?php echo $Id?>">Preview</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php   }?>
                  </table>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">
                        Theme By | Amit | <span id="year"></span> &copy; ---All right
                    </p>
                    <p class="text-center small">
                        <a style="color:white ;text-decoration:none;cursor: pointer;" href="#">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat veniam nostrum non
                            mollitia porro dignissimos exercitationem asperiores? Temporibus, porro itaque.
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div style="height: 10px; background: #27aae1;"></div>



    <!-- end navbar -->








    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/jquery.js"></script>
    <script>
        $("#year").text(new Date().getFullYear())
    </script>
</body>

</html>