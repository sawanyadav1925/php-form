<?php
if (isset($_POST['Submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $answer = total_amount($units);
        echo "$answer";
        
    }
}
function total_amount($units)
{
    global $total_price ;

    if($units <= 50)
    {
        $total_price = $units * 3.50;   
    }
    else if($units > 50 && $units <= 150)
    {
        $first_bill = 50 * 3.50;
        $units = $units - 50;
        $total_price = $first_bill + $units * 4.00;

    }
    else if($units > 150 && $units <= 250)
    {
        $first_bill = 50 * 3.50;
        $sec_bill = 100 * 4.00;
        $units = $units - 150;
        $total_price = $first_bill + $sec_bill + $units * 5.20;
        
    }
    else
    {
        $first_bill = 50 * 3.50;
        $sec_bill = 100 * 4.00;
        $third_bill= 100 * 5.20;
        $units = $units - 250;
        $total_price = $first_bill + $sec_bill +$third_bill +$units * 6.50;
        
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>
<body>
<form action="" method="post">
Enter units : <input type="text" name="units"><br>
<input type="submit" name = Submit><br>
<p><?php echo "total bill amount=".$total_price?></p>
</form>
</body>
</html>