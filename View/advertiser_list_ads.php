<?php
// Initialize the session
session_start();
include "../Controller/advertiser_adsController.php";
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">COMPANY PROFILE</h2>
                        <a href="" class="btn btn-success pull-right"></a>
                    </div>
                    <?php
                    // Include config file
                    require_once "../Model/db_config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM advertisers_ads";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>adsid</th>";
                                        echo "<th>company</th>";
                                        echo "<th>emailAddress</th>";
                                        echo "<th>phoneNumber</th>";
                                        echo "<th>description</th>";
                                        echo "<th>location</th>";
                                        echo "<th>tradingDays</th>";
                                        echo "<th>openHrs</th>";
                                        echo "<th>closingHrs</th>";
                                        echo "<th>address</th>";
                                        echo "<th>city</th>";
                                        echo "<th>province</th>";
                                       
                                    
                                    
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['adsid'] . "</td>";
                                        echo "<td>" . $row['company'] . "</td>";
                                        echo "<td>" . $row['emailAddress'] . "</td>";
                                        echo "<td>" . $row['phoneNumber'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                        echo "<td>" . $row['location'] . "</td>";
                                        echo "<td>" . $row['tradingDays'] . "</td>";
                                        echo "<td>" . $row['openHrs'] . "</td>";
                                        echo "<td>" . $row['closingHrs'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['city'] . "</td>";
                                        echo "<td>" . $row['province'] . "</td>";
                                        
                                        
                                        echo "<td>";
                                             
                                            echo "<a href='read.php?adsid=". $row['adsid'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?adsid=". $row['adsid'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?adsid=". $row['adsid'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            $result->free();
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                    }
                    
                    // Close connection
                    $mysqli->close();
                    ?>
                </div>
                
            </div>        
        </div>
    </div>
</body>
</html>