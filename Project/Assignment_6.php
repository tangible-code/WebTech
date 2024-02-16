<?php
$username = $_POST["username"];
$password = $_POST["password"];
$msg = "";

if($username == "Shyam")
{
    if($password == "09876")
    {
        $msg = "Login Successful";
    }
    else{
        $msg = "Invalid Credentials";
    }
}
else{
    $msg = "Invalid Credentials";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div align="center">
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <label for="msg">msg:</label>
        <input type="text" value="<?php echo $msg; ?>" disabled>
        <br>
        <input type="submit" value="LOGIN">
    </form>
</div>
</body>
</html>