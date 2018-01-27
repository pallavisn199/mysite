<html>
<body>

<?php
$val1 = $_POST['pending'];  // Storing Selected Value In Variable
$val2 = $_POST['table']; 
echo $val2; // Storing Selected Value In Variable
$val3 = $_POST['ref'];  // Storing Selected Value In Variable
$dbname="d";      
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");

$date=date("y-m-d");

$val4=intval($val3);
	
   $a= mysqli_query($connect,"insert into complaint values(0703,'$val2','$val4','$val1')");
	if($a==1)
		echo "hello";
  //header("Location: default.php");

	




mysqli_close($connect);




?>

</body>




</html>
