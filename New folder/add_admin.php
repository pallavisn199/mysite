<html>
<body>

 <form action="admin_alter.php" method="post">
<img src = "logo.jpg" width ="1440"> 
<p align="right"><a href="a_p1.php">Back</a></p>
</div>

<div align= "left">


<div align="center">
</br></br>
</br></br></br></br>
TABLE NAME: &emsp;&emsp; &emsp; 
<select name="table" value="table"  >
         <option value="p">paper</option>
         <option value="r">Ribbon</option>
         <option value="fp">Floppy</option>
         <option value="ff">File Folder</option>
         <option value="cdr">CDR</option>
		 <option value="cn">Cleaner</option>
         <option value="car">Cartridge</option>
		 <option value="other">Other</option>
		 
      </select> 
	  </br></br>
COLUMN NAME: &emsp;&emsp; <input type="text" name="col_name" size="12" ></input></br></br>
TYPE OF COLUMN:&emsp;&emsp;<select name="coltype" value="coltype"  >
         <option value="num">Number </option>
         <option value="character">Character</option>
         <option value="date1">Date</option>
         
      </select> 
	  </br></br>

SIZE OF COLUMN :&emsp;&emsp; <input type="text" name="col_size" size="12" ></input></br></br>
<input type="submit" name="submit" value="submit" ></input>

     
<button onclick="myFunction()">cancel</button>
	<script>
    function myFunction() 
    {
        window.location = 'a_p1.php';
    }
</script> 


</form>

</body>
</html>






