<html>



<body>
<img src = "logo.jpg" width ="1440"> 
<h2><center> Status of Branch Requests </center></h2>

<?php
$dbname="d";      
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");
     $result= mysqli_query($connect,"select * from paper");
	 $result1= mysqli_query($connect,"select * from ribbon");
	
	
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
	<td>STATIONERY</td>
	<td>STATIONERY-TYPE </td>
	<td>NUMBER OF ITEM </td>
	<td>DATE OF REQUEST</td>
	<td>REF NO</td>
	<td>STATUS OF REQUEST</td>
	
	</tr>
	<?php
while ($row = mysqli_fetch_assoc($result)) 
{
	

 if($row['sol_id']== 703 )
{
	
	?>
	<tr>
	<td><?php printf ("%d\t\t", $row["sol_id"]);?></td>
	<td>PAPER</td>
	<td><?php printf("%s",$row["paper_type"]);?></td>
    <td><?php printf("%d\t",$row["number"]); ?></td>
	<td> <?php echo $row["req_date"];?></td>
	<td> <?php printf("%d",$row["ref_no"]);?></td>
	<td><?php
	        if ($row["status"]==0)
			{
			echo "PENDING";}
		   else
		   {
		   ECHO " APPROVED";
		   }?></td>
	</tr>
	<? 
		<?php
    }

}

?>
<?php
while ($row1 = mysqli_fetch_assoc($result1)) 
{
	

 if($row1['sol_id']== 703 )
{
	
	?>
	<tr>
	<td><?php printf ("%d\t\t", $row1["sol_id"]);?></td>
	<td>RIBBON</td>
	<td><?php printf("%s",$row1["ribbon_type"]);?></td>
    <td><?php printf("%d\t",$row1["number"]); ?></td>
	
	<td> <?php echo $row1["req_date"];?></td>
	<td> <?php printf("%d",$row1["ref_no"]);?></td>
	<td><?php
	        if ($row1["status"]==0)
			{
			echo "PENDING";}
		   else
		   {
		   ECHO " APPROVED";
		   }?></td>
	</tr>
	
	
	<? 
		<?php
    }

}?>

		<center><a href="default.php" align="center">BACK</a></center>



</body>
</html>
	