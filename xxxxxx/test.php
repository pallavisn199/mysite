

<body>


<img src = "logo.jpg" width ="1350"> 
</br>
</br>
</br>
</br>
<form method="post" action="1.php" >
<div align="center">
<?php
Session_start();
$_SESSION['value']=$_POST['a'];
echo $_SESSION['value'];
?>
<h3>User-Id &emsp;  &emsp;  <input type="text" name="user"></input></br> </h3>
<h3>Password &emsp;&emsp;<input type="password" name="pass"></input></h3></br>
<input type="submit" value="submit" name="submit"></input></div>



</form>

</body>
</html>	