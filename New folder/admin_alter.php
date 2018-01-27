<html>
<body>
<img src = "logo.jpg" width ="1440"> 
</br>
<p align="right"><a href="a_p1.php">Back</a></p>
<?php
    session_start();
    $dbname="d1";      
    $dbuser = "root";
    $dbpass = "root";
    $dbhost = "localhost";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");










</body>

</html>
