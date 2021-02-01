<?php
$name = 'Yoshi';
$age = 30;
// $name = 'Mario'; OVERWRITE VAR VALUE

// CONSTANT Variable

define('NAME', 'Yoshi');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>

<body>
    <h1>User Profile Page</h1>
    <div class="">
        <?php echo $name ?>
    </div>
    <div class="">
        <?php echo $age ?>
    </div>
    <div class="">
        CONSTANT : <?php echo NAME ?>
    </div>
</body>

</html>