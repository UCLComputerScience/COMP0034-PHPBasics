<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>PHP Embedded in an HTML page</title>
</head>
<body>
<div class="container">
<h2>Echo</h2>

<?php
$date = date("l, F d, Y h:i", time());
echo "<p>Today is $date</p>";
$a = 123;
$b = 456;
$c = $a + $b;
echo "<p>$a + $b  is $c</p>";
?>


<h2>Expression block example</h2>

<?php
for ($i = 10; $i >= 1; $i--) { ?>
    <p> <?= $i ?> green bottles, standing on the wall, <br/>
        <?= $i ?> green bottles, standing on the wall. <br/>
        And if one green bottle should accidentally fall, there'll be, <br/>
        <?= $i - 1 ?> green bottles, standing on the wall. </p> <?php } ?>

<h2>Complex expression block example</h2>

<?php
for ($i = 1; $i <= 3; $i++) { ?>
    <h<?= $i ?>>This is a level <?= $i ?> heading.
    </h
        <?= $i ?>> <?php }
?>

</div>
</body>
</html>