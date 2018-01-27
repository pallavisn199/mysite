<!DOCTYPE html>
<html>
<body>
<img src = "logo.jpg" width ="1440"> 
<right><a href="default.php" align="center">BACK</a></right>
<form action="upload.php" method="post" enctype="multipart/form-data">
<br>
<br>
<br>
  <div align="center"> <h1><b> Bill to upload:<b></h1>
    Bill No:&emsp; <input type="text" name="billno"><br><br>
	Bill Date: <input type="text" name="billdate"><br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	</div>
</form>

</body>
</html>