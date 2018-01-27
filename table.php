<html>
<body>
<img src = "logo.jpg" width ="1440"> 
</br>
<p align="right"><a href="a_p1.php">Back</a></p>
<?php

    $dbname="d1";      
    $dbuser = "root";
    $dbpass = "root";
    $dbhost = "localhost";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");
    session_start();
	$_SESSION["a"]=$_POST['Paper'];
   if($_POST['Paper']=="Paper")
	{ 
      
	      $result= mysqli_query($connect,"select * from paper");?>

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
	     <td>ACTION</td>
	     </tr>
	<?php
          while ($row = mysqli_fetch_assoc($result)) 
          {
	 ?>
	     <tr>
	     <td><?php printf ("%d\t\t", $row["sol_id"]);?></td>
	     <td>PAPER</td>
	     <td><?php printf("%s",$row["4paper_type"]);?></td>
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
		       }?> </td>
		 <td><a href="table1.php">APPROVE</a><td>
	     </tr>
	
		<?php
         }

    }


?>
<?php

 if($_POST['Paper']=="Ribbon")
	{ 
      
	      $result= mysqli_query($connect,"select * from ribbon");?>

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
	     <td>ACTION</td>
	     </tr>
	<?php
          while ($row = mysqli_fetch_assoc($result)) 
          {
	 ?>
	     <tr>
	     <td><?php printf ("%d\t\t", $row["sol_id"]);?></td>
	     <td>Ribbon</td>
	     <td><?php printf("%s",$row["ribbon_type"]);?></td>
         <td><?php printf("%d\t",$row["number"]); ?></td>
	     <td> <?php echo $row["req_date"];?></td>
	     <td> <?php printf("%d",$row["ref_no"]);?></td>
	     <td><?php 
		      if ($row["status"]==0)
			   {
			     echo "PENDING";}
		      else
		       {   
		       echo " APPROVED";
		       }?></td>
		 <td><a href="table1.php">APPROVE</a><td>
	     </tr>
	
		<?php
         }

    }


?>

</body>
</html>