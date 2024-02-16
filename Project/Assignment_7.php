<?php
$temperature = $_POST["temperature"];
$msg = "";

if($temperature > 25)
{
    $msg = "It's a sunny day!";
}
else{
$msg = "Consider taking an umbrella";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
</head>
<body>
<div align="center">
    <form method="post">
        <label for="temperature">Temperature:</label>
        <input type="number" name="temperature">
        <br>
        <label for="msg">msg:</label>
        <input type="text" value="<?php echo $msg; ?>" disabled>
        <br>
        <input type="submit" value="CHECK">
    </form>
</div>
</body>
</html>