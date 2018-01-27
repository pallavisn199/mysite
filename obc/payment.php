<!DOCTYPE html>
<html>
<body>
<img src = "logo.jpg" width ="1440"> 

<form action="upload.php" method="post" enctype="multipart/form-data">
<br>
<br>
<br>
  <div align="center"> <h1> Bill to upload:</h1>
    Bill No: <input type="text" name="billno"><br>
	Bill Date: <input type="text" name="billdate"><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	</div>
</form>

</body>
</html>