<?php
$cost = $_POST["cost"];
$msg = "";

if($cost > 1000)
{
    $msg = "You Are Eligible for our store 1000+ Discount";
}
else{
$msg = "You Are ".(strval(1000-$cost))." less to get a Discount";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount</title>
</head>
<body>
<div align="center">
    <form method="post">
        <label for="cost">Cost:</label>
        <input type="number" name="cost">
        <br>
        <label for="msg">msg:</label>
        <input type="text" value="<?php echo $msg; ?>" disabled>
        <br>
        <input type="submit" value="CHECK">
    </form>
</div>
</body>
</html>