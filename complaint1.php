html>
<body>

<?php
$val1 = $_POST['pending'];  // Storing Selected Value In Variable
$val2 = $_POST['table'];  // Storing Selected Value In Variable
$val3 = $_POST['ref'];  // Storing Selected Value In Variable
$dbname="d1";      
$dbuser = "root";
$dbpass = "root";
$dbhost = "localhost";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");

$date=date("y-m-d");

if($val2=="p" || $val2=="r" $val2=="fp" || $val2=="cdr" $val2=="cn" || $val2=="car" $val2=="other" || $val2=="ff"  )
{  
   
	
    mysqli_query($connect,"insert into complaint values(0703,'$val2','$val3','$val1)");
	
  header("Location: default.php");
  exit();
	
}



mysqli_close($connect);




?>

</body>




</html>
