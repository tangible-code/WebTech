<?php
$steps = $_POST["steps"];
$level = "";

if($steps < 5000)
{
    $level = "Beginner";
}
elseif ($steps >= 5000 && $steps <= 10000)
{
    $level = "Intermediate";
}
elseif ($steps > 10000)
{
$level = "Advanced";
}
else{
$level = "Invalid";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health</title>
</head>
<body>
<div align="center">
    <form method="post">
        <label for="steps">Steps:</label>
        <input type="number" name="steps">
        <br>
        <label for="level">Level:</label>
        <input type="text" value="<?php echo $level; ?>" disabled>
        <br>
        <input type="submit" value="PRINT">
    </form>
</div>
</body>
</html>