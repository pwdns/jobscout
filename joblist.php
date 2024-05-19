<?php 
    include("connection.php");
    include("dashboard.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <title>JOBSCOUT - Job Listings</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <h1>JOBSCOUT</h1>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li class="active"><a href="create.php">Upload</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </div>
    </header>
    <div class="container mt-4">
        <div class="row">
            <?php
                include "connection.php";
                $sql = "SELECT * FROM items_table";
                $result = $conn->query($sql);
                if(!$result){
                    die("Invalid query: " . $conn->error);
                }
                while($row = $result->fetch_assoc()){
                    echo "
                        <div class='col-md-4'>
                            <div class='card mb-4 shadow-sm'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$row['item_name']}</h5>
                                    <p class='card-text'><br>{$row['contact']}</p>
                                    <p class='card-text'>{$row['item_desc']}</p>
                                    <div class='d-flex justify-content-between align-items-center'>
                                    <small class='text-muted'>Price: Rp. {$row['item_price']}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                }
                // }if($row == ""){
                //     echo "<br>not available at the moment please comeback later!";
                // }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <footer>
        <div class="container">
            <small>Copyright &copy; 2023 - JOBSCOUT, All Rights Reserved</small>
        </div>
    </footer>
</body>
</html>
