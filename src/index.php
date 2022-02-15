<?php
$user_Input=$_POST['user input'];
$time= $_POST['time'];
$result;

if(isset($_POST['convert'])){
print_r($_POST);
    if($time=="htom"){
$result=60*$user_Input." min";
}

elseif($time=="htos"){
$result= (60*60)*$user_Input." seconds";
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">


<input type="text" name="user input"><br><br>

<input type="radio" id="" name="time" value="htom">
<label for="">Hours to Min</label><br>

<input type="radio" id="" name="time" value="htos">
<label for="">Hours to Sec</label><br>

<input type="submit" name="convert" value="convert">


<p>
    <?php
    echo $result;
    ?>
</p>

</form>

  
</body>
</html>