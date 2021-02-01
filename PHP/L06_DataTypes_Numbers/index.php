<?php
$radius = 25;
$pi = 3.14;

// basic operators - *, / ,+ ,- ,**(power)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>

<body>
    <div class="">
        <?php
        echo $pi * $radius ** 2;
        ?>
    </div>
    <div class="">
        $radius++ (25++)
        <div class="">

            <?php
            echo $radius++;
            ?>
        </div>
    </div>
    <div class="">
        ++$radius (++26) since the previous $radius++ added 1
        <div class="">

            <?php
            echo ++$radius;
            ?>
        </div>
    </div>
    <div class="">
        floor(3.6) 
        <div class="">

            <?php
            echo floor(3.6);
            ?>
        </div>
    </div>
    <div class="">
    echo ceil(3.1);
        <div class="">

            <?php
            echo ceil(3.1);;
            ?>
        </div>
    </div>
</body>

</html>