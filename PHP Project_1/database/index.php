<?php
require_once("conn.php");
session_start();

$query = "SELECT * FROM country LIMIT 0,20;";
$stm = $pdo->query($query);

$allRecords = $stm->fetchAll(PDO::FETCH_ASSOC);

// foreach($allRecords as $row){
//     print_r($row);
//     echo "<br>";
// }

// print_r($allRecords);

// while($row=$stm->fetch(PDO::FETCH_ASSOC)){
//     print_r($row);
// }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <title>index</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card shadow border">
                    <div class="card-body">
                        <h2 class="text-center">Countries</h2>
                        <hr>
                        <?php include_once("success.php") ?>
                        <table id="countriesBody" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Continent</th>
                                    <th>Region</th>
                                    <th>SurfaceArea</th>
                                    <th>link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allRecords as $k => $record) { ?>
                                    <tr>
                                        <td><?php echo $k + 1 ?></td>
                                        <td><?php echo $record["Name"] ?></td>
                                        <td><?php echo $record["Continent"] ?></td>
                                        <td><?php echo $record["Region"] ?></td>
                                        <td><?php echo $record["SurfaceArea"] ?></td>
                                        <td><a href="cities.php?q=<?php echo $record["Code"] ?>">
                                                View Cities
                                            </a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="text-center mt-1" id="loadMoreContainer">
                            <button id="loadMoreBtn" class="btn btn-success">
                                Load More
                                <i id="loadMoreSpinner" class="fas fa-spinner fa-spin d-none"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script>
        function generateCountryRow(n,record){
            var html=`<tr>
             <td>${n}</td>
             <td>${record['Name']}</td>
             <td>${record['Continent']}</td>
             <td>${record['Region']}</td>
             <td>${record['SurfaceArea']}</td>
             <td><a href="cities.php?q=${record['Code']}">View Cities</a></td>
            </tr>`;
            return html;
        }
        $(document).ready(function() {
            var counter = 20;
            $("#loadMoreBtn").click(function(ev) {
                ev.preventDefault();
                var loadMoreSpinner = $("#loadMoreSpinner");
                loadMoreSpinner.removeClass("d-none");
                $(this).attr("disabled", "disabled");

                $.ajax({
                    url: "/php_lec1/database/countries.ajax.php?c=" + counter,
                    method: "GET",
                    success: function(result) {
                        var countries = JSON.parse(result);
                        if (countries) {
                           for(var i=0; i < countries.length ; i++){
                               var countryHtml=generateCountryRow(counter+i+1,countries[i]);
                               $('#countriesBody').append(countryHtml);
                           }
                        }
                        if(countries.length < 20){
                            $("#loadMoreContainer").html(`<p class="text-center">No More Data</p>`)
                        }

                        counter += 20;

                    },
                    error: function() {

                    },
                    complete: function() {
                        $("#loadMoreSpinner").addClass("d-none");
                        $("#loadMoreBtn").removeAttr("disabled");
                    }

                })
            })
        })
    </script>
</body>

</html>