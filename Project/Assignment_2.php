<?php
$light = $_POST["light"];
$msg = "";

if($light == "Green")
{
    $msg = "Go";
}
elseif ($light == "Yellow")
{
    $msg = "Slow Down";
}
elseif ($light == "Red")
{
$msg = "Stop";
}
else{
$msg = "Invalid";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Light</title>
</head>
<body>
<div align="center">
    <form method="post">
        <label for="light">Light:</label>
        <input type="text" name="light">
        <br>
        <label for="msg">Log:</label>
        <input type="text" value="<?php echo $msg; ?>" disabled>
        <br>
        <input type="submit" value="PRINT">
    </form>
</div>
</body>
</html>