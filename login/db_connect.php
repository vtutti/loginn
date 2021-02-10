<?php
/* Database connection start */
//$servername = "mysql://bb25f8f33875df:fde0a2c2@us-cdbr-east-02.cleardb.com/heroku_c8f9676cdad8a4d?reconnect=true";
$servername = "us-cdbr-east-02.cleardb.com";
$username = "b768ac3de916f9";
$password = "d8f737d1";
$dbname = "heroku_acfb298fa1dc0df";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
