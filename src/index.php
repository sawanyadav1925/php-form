<?php
if(isset($_POST['submit']))  
    {    
$length = $_POST['length']; 
$width = $_POST['width'];    
$area = $length*$width; 
$perimeter=2*($length+$width);  
$a = "Area is ".$area."sq.mtr";
$b = " Perimeter is ".$perimeter."mtr";
}   
?> 
<html>
    <head>
        <title>area</title>
    </head>  
<body> 
<form method = "post">      
Length: <input type="number" name="length"> <br> <br>
Width: <input type="number" name="width"> <br><br>  
<input type = "submit" name = "submit" value="Area & Perimeter">   
</form>  
<div>
<p>  <?php echo $a?> </p>
<p>  <?php echo $b?></p>
</div> 
</body>   
</html>  