<html>



<body>
<img src = "logo.jpg" width ="1440"> 
<left><a href="default.php">BACK</a></left>
<h2><center> Bills </center></h2>

<?php
Session_start();
$sol=$_SESSION["u"];
$dbname="d1";      
$dbuser = "root";
$dbpass = "root";
$dbhost = "localhost";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");
     $result= mysqli_query($connect,"select * from payment");
	 
	
	
//$i= mysqli_num_rows($result);
//echo $i;

?>
</br>
</br>
</br>
</br>

<table border=1 align="center" >
	<tr>
	<td>SOLID</td>
	<td>FILE-NAME</td>
	<td>BILL DATE </td>
	<td>REQ. NO </td>
	<td>UPLOAD DATE</td>
	<td>BILL NO</td>
	<td>STATUS OF REQUEST</td>
	
	</tr>
	<?php
while ($row = mysqli_fetch_assoc($result)) 
{
	

 //if($row['sol']== $sol )
//{
	
	?>
	<tr>
	<td><?php printf ("%d\t\t", $row["sol"]);?></td>
    <td> <?php echo $row["path"];?></td>
	<td> <?php echo $row["bill_date"];?></td>
	<td> <?php echo $row["req_no"];?></td>
	<td> <?php echo $row["upload_date"];?></td>
	<td> <?php echo $row["billno"];?></td>
	
	<td><a href="bill_view.php">VIEW</a>
	
	        </td>
	</tr>
 
		<?php
   // }

}

?>


		



</body>
</html>
	