<html>
<body>
<img src = "logo.jpg" width ="1440"> 
<right><a href="default.php" align="center">BACK</a></right>
 <form action="complaint2.php" method="post">
<div align="center">
<h1><B> Reporting for Stationery Request Pendency</b></h1><br>
PENDENCY FROM :&emsp; &emsp; :&emsp; &emsp;
<input type="radio" name ="pending" value="itcluster" checked>IT CLUSTER 
<input type="radio" name ="pending" value="vendor" checked>VENDOR <br><br>
TYPE OF STATIONERY:&emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp;
 
<select name="table" value="table" >
         <option value="paper">paper </option>
         <option value="ribbon">Ribbon</option>
         <option value="floppy">Floppy</option>
         <option value="file floder">File Folder</option>
         <option value="cdr">CDR</option>
		 <option value="cleaner">Cleaner</option>
         <option value="cartridge">Cartridge</option>
		 <option value="other">Other</option>
		 
      </select> 
	  </br></br>
REFERENCE NUMBER :&emsp; &emsp;  &emsp;  &emsp; 
<input type="text" name="ref" size="30"><br>
<input tYpe="submit" name="submit" value="submit" "><br>

</div>
</form>
</body>
</html>