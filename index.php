<?php

/**
 * @author Jamie Lewis
 * @copyright 2015
 */

/** 
 * 
 * Instructions: 
 * Display the contents of the $testData array in an HTML table sorted by Price descending. Use bootstrap for this page. Please do the sorting of the array inside PHP
 * Do not modify anything in the $testData array.
 * Also, provide an input field that will post a value back to this page and use that value to override the price of the Luggage box
 * 
 * Dress it up however you want, and feel free to add any additions that you feel will show off your programming
 *    
 * Helpful Tips:
 * If you need to set up a PHP server for testing, you could install WAMP on your windows based computer (http://www.wampserver.com/en/)
 * Bootstrap information can be found here. use their online stylesheet/theme/javascript from the Bootstrap CDN (http://getbootstrap.com/getting-started/)
*/

$testData = array();
$testData[] = array(
				'PartName'	=> "Seat",
				'Quantity'	=> 26,
				'Price'		=> 31.79
);
$testData[] = array(
				'PartName'	=> "Handle Bar",
				'Quantity'	=> 8,
				'Price'		=> 12.99
);
$testData[] = array(
				'PartName'	=> "Luggage box",
				'Quantity'	=> 200,
				'Price'		=> 22.99
);
#echo "<pre>".print_r($testData,true)."</pre>";

if(isset($_POST)){
    if($testData['PartName']['Luggage box']){
        $testData = array(
            'PartName' => 'Luggage box',
            'Quantity' => 200,
            'Price' => $_POST['input1']
        );
    }
}
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
    <div class="container">
        <h1>Part's Inventory Data</h1>
        <table class="table table-dark">
            <tr>    
                <th>Part Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            <?php foreach($testData as $value){
                    if(isset($value)){
                    print('<tr><td>'.$value["PartName"].'</td><td>'.$value["Quantity"].'</td><td>'.$value["Price"].'</td></tr>');
                    }
                }
                ?>
        </table>
        <?php echo('<pre>'.print_r($_POST).'</pre>'); ?>
        <p>Use this to change the price of the Luggage box</p>
        <form method="post" name="change">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">£</span>
                </div>
                <input type="text" class="form-control" placeholder="Price" name="input1" aria-label="Amount (to the nearest Pound)">
                <input class="btn btn-primary" type="submit">
            </div>
        </form>  
    </div>
</body>
</html>