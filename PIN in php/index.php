<?php
    require_once "index1.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index1.php" method="post">
        <?php echo $Number_1; ?>
        <input type="text" name="PIN">
        <input type="submit" value="Submit">
    </form>
</body>
</html>