<?php

// echo realpath($_SERVER["SCRIPT_FILENAME"]) ;

//  echo "<br>";
//  echo  realpath(__FILE__);

 if(strcmp(realpath($_SERVER["SCRIPT_FILENAME"]) ,realpath(__FILE__)) ==0){
          header("Location:/php_lec1/file_folder/forbidden.php");
          return;
 }
 

?>




<?php if (isset($_SESSION["success"])) { ?>
    <div class="alert alert-success">
        <?php echo $_SESSION["success"] ?>
        <?php unset($_SESSION["success"]) ?>
    </div>
<?php } ?>

