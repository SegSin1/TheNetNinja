<?php
$stringOne = 'my email is ';
$stringTwo = 'marion123@thenetninha.co.uk';
// echo $stringOne . $stringTwo;

$name = 'mario';
$escaping = "the ninja screamed \"whhhhh\" ";
$singleDoubleQutes = 'the ninja screamed "whhhhh"' ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>

<body>
    <div>
        concat with '.'
        <div class="">
            <?php
            echo "$stringOne $stringTwo";
            ?>
        </div>
        <div class="">
            <?php
            echo 'Hi my name is ' . $name;
            ?>
        </div>
    </div>
    <div>
        concat with ""
        <div class="">
            <?php
            echo "$stringOne $stringTwo";
            ?>
        </div>
    </div>
    <div class="">
        escaping:
        <div class="">
            <?php
            echo $escaping
            ?>
        </div>
    </div>
    <div class="">
            singleDoubleQutes:
        <div class="">
            <?php
            echo $singleDoubleQutes
            ?>
        </div>
    </div>
    <div class="">
            string in certain index:
        <div class="">
            <?php
            echo $singleDoubleQutes[0];
            ?>
        </div>
    </div>
    <div class="">
            string length strlen(STRING):
        <div class="">
            <?php
            echo strlen($singleDoubleQutes);
            ?>
        </div>
    </div>
    <div class="">
          strtoupper(STRING):
        <div class="">
            <?php
            echo strtoupper($singleDoubleQutes);
            ?>
        </div>
    </div>
    <div class="">
    str_replace('whhhhh','kololo', $singleDoubleQutes):
        <div class="">
            <?php
            echo str_replace('whhhhh','kololo', $singleDoubleQutes);
            ?>
        </div>
    </div>
</body>

</html>