<?php
$q1 = $_POST["add"];
$q2 = $_POST["sub"];
$q3 = $_POST["mul"];
$score = 0;
if($q1 == "four")
{
    $score += 1;
}

if($q2 == "35")
{
    $score += 1;
}

if($q3 == "81")
{
    $score += 1;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Choice</title>
</head>
<body>
<div align="center">
        <h3>Questions</h3>
    <form method="post">
        <!--Q1-->
        <h5>What is 3+1</h5>
        <label for="five">Five:</label>
        <input type="radio" name="add" value="five">
        <label for="four">Four:</label>
        <input type="radio" name="add" value="four">
        <label for="Three">Three:</label>
        <input type="radio" name="add" value="three">
        <label for="nine">Nine:</label>
        <input type="radio" name="add" value="nine">
        <br>
         <!--Q2-->
         <h5>What is 78-43</h5>
        <label for="90">90:</label>
        <input type="radio" name="sub" value="90">
        <label for="54">54:</label>
        <input type="radio" name="sub" value="54">
        <label for="45">45:</label>
        <input type="radio" name="sub" value="45">
        <label for="35">35:</label>
        <input type="radio" name="sub" value="35">
        <br>
         <!--Q3-->
         <h5>What is 9 x 9</h5>
        <label for="34">34:</label>
        <input type="radio" name="mul" value="34">
        <label for="87">87:</label>
        <input type="radio" name="mul" value="87">
        <label for="81">81:</label>
        <input type="radio" name="mul" value="81">
        <label for="2">2:</label>
        <input type="radio" name="mul" value="2">
        <br>
        <label for="total">Total Score:</label>
        <input type="number" value="<?php echo $score; ?>" disabled>
        <br>
        <input type="submit" value="MARKS">
    </form>
</div>
</body>
</html>