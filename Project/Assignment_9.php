<?php
$member = $_POST["member"];
$msg = "";

if($member == "premium")
{
    $msg = "Welcome Premium User!";
}
elseif($member == "basic"){
$msg = "Welcome Basic User!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
</head>
<body>
<div align="center">
    <form method="post">
        <label for="member">Membership:</label>
        <input type="text" name="member">
        <br>
        <label for="msg">msg:</label>
        <input type="text" value="<?php echo $msg; ?>" disabled>
        <br>
        <input type="submit" value="LOGIN">
    </form>
</div>
</body>
</html>