<?php
$title = $_POST["title"];
$post_title = "";
if(strlen($title) > 50)
{
    $post_title = substr($title,0,50);
}
else{
    $post_title = $title;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
<div align="center">
    <form method="post">
        <label for="title">Title:</label>
        <input type="text" name="title">
        <br>
        <label for="post_title">Post Title:</label>
        <input type="text" value="<?php echo $post_title; ?>" disabled maxlength="50">
        <br>
        <input type="submit" value="PUBLISH">
    </form>
</div>
</body>
</html>