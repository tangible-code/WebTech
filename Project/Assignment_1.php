<?php
$cost = $_POST["cost"];
$grand_total = 0;

if($cost > 5000)
{
    $grand_total = $cost + ($cost * 10)/100;
}
else{
    $grand_total = $cost;
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
        <h3>Enter your Amount for Checkout</h3>
    <form method="post">
        <label for="cost">Cost:</label>
        <input type="number" name="cost">
        <br>
        <label for="total">Grand Total:</label>
        <input type="number" value="<?php echo $grand_total; ?>" disabled>
        <br>
        <input type="submit" value="CHECKOUT">
    </form>
</div>
</body>
</html>