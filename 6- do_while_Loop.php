<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHP do while Loop</title>
</head>

<body>

    <?php

    echo "<h1>PHP do while Loop</h1>";

    $x = 5;

    do {
        echo "Value of x is " . $x . "<br><br>";
        $x++;
    } while ($x <= 10);

    echo "<hr>";
    echo "The last value of X " . $x;

    ?>
</body>

</html>