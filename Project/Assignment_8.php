<?php
$score = $_POST["score"];
$grade = "";

if($score >= 90)
{
    $grade = "A";
}
elseif ($score >= 80)
{
    $grade = "B";
}
elseif ($score >= 70)
{
    $grade = "C";
}
elseif ($score >= 60)
{
    $grade = "D";
}
elseif ($score < 60)
{
$grade = "F";
}
else{
$grade = "Invalid";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
</head>
<body>
<div align="center">
    <form method="post">
        <label for="score">Score:</label>
        <input type="number" name="score">
        <br>
        <label for="grade">grade:</label>
        <input type="text" value="<?php echo $grade; ?>" disabled>
        <br>
        <input type="submit" value="SCORE">
    </form>
</div>
</body>
</html>