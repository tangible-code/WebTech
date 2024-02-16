<?php
$new = false;
if(isset($_POST['login']))
{
    $new = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
</head>
<body>
<div align="center">
    <form method="post">
        <label for="plan1">Plan 1:</label>
        <input type="radio" name="plan" value="plan1">
        <br>
        <br>
        <label for="plan2">Plan 2:</label>
        <input type="radio" name="plan" value="plan2">
        <br>
        <br>
        <label for="plan3">Plan 3:</label>
        <input type="radio" name="plan" value="plan3">
        <br>
        <br>
        <?php
        if($new)
        {
            echo '<label for="trial">Trial:</label>
            <input type="radio" name="plan" value="trial"><br><br>';
        }
        ?>
        <input type="submit" value="New" name="login">
    </form>
</div>
</body>
</html>