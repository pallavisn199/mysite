<html>



<body>
<img src = "logo.jpg" width ="1350"> 
<?php
$dbname="d";      
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");
    mysqli_query($connect,"select ref_");