<!DOCTYPE html>
<html>
<body>

session_start();
<img src = "logo.jpg" width ="1440" > 
</br>
</br>
</br>
</br>
  
   
    <form action="x.php" method="post">
	<h1><b><u> <center><top>Please Select Stationery Item</top></center></u></b></h1></br>
	<div align ="center">
	<?php
	if($_POST['Paper']=="Paper")
	{ 

 ?>
	 Paper Type:&emsp; 
	 <select name="paper" value="paper" >
         <option value="P61">6*12*1 </option>
         <option value="P101">10*12*1</option>
         <option value="P102">10*12*2</option>
         <option value="P103">10*12*3</option>
         <option value="P151">15*12*1</option>
		 <option value="P152">10*12*2</option>
         <option value="P153">15*12*3</option>
		 <option value="PA4JK">A4-JK 70GSM</option>
		 <option value="PLEGALJK">LEGAL-JK 70GSM</option>
      </select> 
	  &emsp;&emsp;
	  Quantity : <input type="text" name="quant" ></input>
	  </br>
	  </br>
	  
	<?php
	}
	 if($_POST['Paper']=="Ribbon")
	 {
	?>
	  Ribbon Type: &emsp;
	  <select name="paper"  value="ribbon" >
         <option value="PRMSP245">PRINTER RIBBON-MSP245 </option>
         <option value="PRTVSE245">PRINTER RIBBON-TVSE </option>
         <option value="PRMSP255">PRINTER RIBBON-MSP255</option>
         <option value="PRTVSE255">PRINTER RIBBON-TVSE(255)</option>
         <option value="RLIPIT2250">RIBBON-T2250</option>
		 <option value="RPB5650">RIBBON-PB-5650</option>
         <option value="RLIPITVSE">PRINTER RIBBON-TVSE(PRODOT)</option>
		 <option value="B30">RIBBON LINE PRINTER(B30)</option>
		 <option value="RHD6595">RIBBON HD 6595</option>
		 <option value="PRTVSELIPI">PRINTER RIBBON-TVSE/LIPI</option>
		 <option value="MT661">RIBBON-MT661</option>
		 <option value="PR50">RIBBON DRAFT PR50-PRODOT</option>
      </select>
	 &emsp;&emsp;
	  Quantity : <input type="text" name="quant" ></input>
	<?php
	 }
	
	 
	 
	 ?>
	 
	
	
	
	<input type="submit" name="Submit" value="Submit"></input>
	
	
    

	  </br>
	  
	  </div>
	  
	  
	  
   <div align= "left">

        <?php include 'menu.php';?>
   </div>
   <center>
 
</center>

</form>
   
</body>
</html>