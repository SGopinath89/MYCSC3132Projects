<?php
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPass = getenv('DB_PASS');
try {
    //connect with database
    $connect = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if (!$connect) {
        die("connection failed".mysqli_connect_error());
    } 
    else {
        //echo "Connected successfully";
    }
} 
catch (Exception $e) {
    die($e->getMessage());
}

//echo "abc<br>";

?>