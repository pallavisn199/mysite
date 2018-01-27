<html>
<body>
<?php
Session_start();

$selected_val = $_POST['paper'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value 
$selected_val1 = $_POST['ribbon'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val1;  // Displaying Selected Value 

$a= $_POST['quant'];
$b=intval($a);
echo "amount of paper:".$b;
 $dbname="d";      
$dbuser = "root";
$dbpass = "root";
$dbhost = "localhost";
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");

$i= intval($_SESSION["u"]);
$d=date('y-m-d');
//Perform queries
mysqli_query($connect,"insert into paper values('$i','$b','$selected_val','$d')");


mysqli_close($connect);




?>

</body>




</html>
