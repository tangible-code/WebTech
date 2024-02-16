<?php
$score = $_POST["score"];
$grade = "";

if($score < 60)
{
    $grade = "F";
}
elseif ($score >= 60 && $score <= 70)
{
    $grade = "D";
}
elseif ($score >= 71 && $score <= 80)
{
    $grade = "C";
}
elseif ($score >= 81 && $score <= 90)
{
    $grade = "B";
}
elseif ($score > 90)
{
$grade = "A";
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