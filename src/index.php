<?php
$Number_1 = $_POST['num1'];
$Number_2 = $_POST['num2'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($Number_1) && is_numeric($Number_2)) {
    switch ($operator) {
        case "+":
           $result = $Number_1 + $Number_2;
            break;
        case "-":
           $result = $Number_1 - $Number_2;
            break;
        case "*":
            $result = $Number_1 * $Number_2;
            break;
        case "/":
            $result = $Number_1 / $Number_2;
    }
}


?>
<!DOCTYPE html>

<head>
	<title>calculator</title>
</head>

<body>
    <div id="wrapper">
	  <form action="" method="post">
            <p>
                Number1:&emsp;<input type="number" name="num1" id="num1"  value="<?php echo $Number_1; ?>" /> <b><b>
            </p>
            <p>
                Number2:&emsp;<input type="number" name="num2" id="num2"  value="<?php echo $Number_2; ?>" /> <b><b>
            </p>
            <p>
            Result:&emsp;<input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b><b>
            </p>
            <input type="submit" name="operator" value="+" />
            <input type="submit" name="operator" value="-" />
            <input type="submit" name="operator" value="*" />
            <input type="submit" name="operator" value="/" />
	  </form>
    </div>
</body>
</html>