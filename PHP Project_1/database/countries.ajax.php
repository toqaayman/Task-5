<?php  

require_once("conn.php");
if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET["c"])){
       $counter=$_GET["c"];

    }else{
      $counter=0;
    }
}



$query="SELECT Code,Name,Continent,Region,SurfaceArea FROM country LIMIT $counter,20";
$stm=$pdo->query($query);
$countries=$stm->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($countries);



?>