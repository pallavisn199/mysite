<html>
<body>


<img src = "logo.jpg" width ="1440"> 



  
   
    <form action="add.php" method="post">
	<h1><b><u> <center><top>Please Select Stationery Item</top></center></u></b></h1></br>
	<div align ="center">
	<table>
	<tr>
	<td>
	      <input type="submit" name="Paper" value="Paper"  style="height:80px; width:200px" ></input></td>
		  <td>
	      <input type="submit" name="Paper" value="Ribbon"  style="height:80px; width:200px" ></input></td>
	<tr><td>	  
		  <input type="submit" name="Paper" value="Floppy" style="height:80px; width:200px" ></input></td>
		  <td>
		  <input type="submit" name="Paper" value="File Folder" style="height:80px; width:200px" ></input></td></tr>
		  <tr>
	     <td> <input type="submit" name="Paper" value="CDR" style="height:80px; width:200px" ></input></td>
		 <td> <input type="submit" name="Paper" value="Cleaner" style="height:80px; width:200px" ></input></td></tr>
		 <tr>
		  <td> <input type="submit" name="Paper" value="Cartridge" style="height:80px; width:200px" ></input></td>
		  <td> <input type="submit" name="Paper" value="Others"  style="height:80px; width:200px"></input></td>
		  
	      </tr>
	 </div>
	  
   <div align= "left">

        <?php include 'menu.php';?>
   </div>
  

</form>
   
</body>
</html>