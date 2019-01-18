<?php 
$myArray = array();
if(isset($_POST)){
    $myArray[] = array(
                'PartName' => $_POST['name'],
                'Quantity' => $_POST['quantity'],
                'Price' => $_POST['price']
    );
}
/*
foreach($myArray as $val){
    if(isset($val)){
    echo('<tr><td>'.$val["PartName"].'</td><td>'.$val["Quantity"].'</td><td>'.$val["Price"].'</td></tr>');
    };
}*/
?>
<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Test for LL EXETER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Test</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adddata.php">Add Data</a>
            </li>
            </ul>
        </div>
        </nav>
        <div class="jumbotron"> 
            <h2>Enter New Data Here within Scope of Use</h2>
                <form method="post" name="add">
                    <div>
                        <input type="text" name="name" placeholder="Part Name" class="form-control" >
                        <input type="text" name="quantity" placeholder="Quantity" class="form-control" >
                        <div class="input-group-prepend">
                            <span class="input-group-text">£</span>
                            <input type="text" name="price" placeholder="Price" class="form-control" >
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit">
                        </div>
                    </div>
                </form> 
        </div>  
    </body>
</html>