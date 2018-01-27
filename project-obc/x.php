<html>
<body>
session_start();
<?php
$selected_val = $_POST['paper'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value 
//$selected_val1 = $_POST['ribbon'];  // Storing Selected Value In Variable
//echo "You have selected :" .$selected_val1;  // Displaying Selected Value 

$a= $_POST['quant'];
$b=intval($a);
echo "amount of paper:".$b;
 $dbname="d";      
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");

$date=date("y-m-d");
if($selected_val=="P61" || $selected_val=="P101" || $selected_val=="P102"|| $selected_val=="P103"|| $selected_val=="P151"|| $selected_val=="P152"|| $selected_val=="P153"|| $selected_val=="PA4JK"|| $selected_val=="PLEGALJK" )
{  
      $session['ref']=$ref= mt_rand(1,100000);
    mysqli_query($connect,"insert into paper values(0703,'$b','$selected_val','$date','$ref')");
	
  header("Location: p1.php");
  exit();
	
}

if($selected_val=="PRMSP245"  || $selected_val=="PRTVSE245" || $selected_val=="PRMSP255"|| $selected_val=="PRTVSE255"|| $selected_val=="RLIPIT2250"|| $selected_val=="RPB5650"|| $selected_val=="RLIPITVSE"|| $selected_val=="B30"|| $selected_val=="RHD6595"|| $selected_val=="PRTVSELIPI"|| $selected_val=="MT661"|| $selected_val=="PR50")
{
    $ref= mt_rand(1,100000);
    mysqli_query($connect,"insert into ribbon values(0703,'$b','$selected_val','$date','$ref')");
 
}

mysqli_close($connect);




?>

</body>




</html>
