	

<html>
<head></head>
<body>

<?php
Session_start();
$_SESSION["u"]=$_POST["user"];
echo $_SESSION["u"];
 $dbname="d1";      
$dbuser = "root";
$dbpass = "root";
$dbhost = "localhost";
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");
 
 if($_SESSION['value']=="Admin")
 {
     $query = mysqli_query($connect,"SELECT * FROM tb_admin WHERE id='$_POST[user]' && pass='$_POST[pass]'");
	 
	 

header("Location:admin_work.php"); /* Redirect browser */
exit();
 
 }
 else
 {
     if($_SESSION['value']=="Branch Login")
	
	{

       $query = mysqli_query($connect,"SELECT * FROM sol WHERE sol_id='$_POST[user]' && pass='$_POST[pass]'");
	  // echo "<h1> Branch Login </h1><br>";
	  // echo"<b> welcome<b>";
    }
	else
	{
		echo "wrong username and password";
	//header("Location: test.php");
	
	}	
 }?>
 
 <?php
//$result = mysqli_query($connect, $query);
//if ( false === $result ) {
 // printf("error: %s\n", mysqli_error($connect));
//}
//else {
 // echo 'done.';
//}

$i= mysqli_num_rows($query);
echo $i;
if($i !=0)
{
	echo "sucessful";
}
else 
{
	echo "wrong username/password combination, please enter correct values"; 
	header("Location: test.php");
}




/*while ($row = mysqli_fetch_assoc($result)) 
{
if($row["sol_id"]==$_POST['user'] && $row["pass"]==$_POST{"pass"})
{
       printf ("%d (%d)\n", $row["sol_id"], $row["pass"]);

}
  else  7
{
echo "wrong username/password combination, please enter correct values"; 
exit();
} 

}
*/
 include 'default.php';

mysqli_close($connect);

?>	
      
	  
	  
	  
	  
	  
	  


</body>
</html>