<?php
/* Database connection start */

$servername = "us-cdbr-east-02.cleardb.com";
$username = "niodhesd";
$password = "odjesnf";
$dbname = "heroku_nivdsfljif";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
