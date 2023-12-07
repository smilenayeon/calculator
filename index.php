<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diana's calculator</title>
    <link rel="stylesheet" href="/CSS/index.css">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type="number" name="num01" placeholder="first number"/>
<select  name="operator">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
</select>
<input type="number" name="number02" placeholder="second number"/>
<button>Calculate</button>

</form>

<?php
if( $_SERVER["REQUEST_METHOD"] == "POST"){
$num01 = filter_input(INPUT_POST,"num01", FILTER_SANITIZE_NUMBER_FLOAT);
$num02 = filter_input(INPUT_POST,"num02", FILTER_SANITIZE_NUMBER_FLOAT);
$operator = htmlspecialchars($_POST["operator"]);

}
?>

</body>
</html>