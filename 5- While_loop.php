<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHP while Loop</title>
</head>

<body>

    <?php

    echo "<h1>PHP while Loop</h1>";

    $x = 10;

    while ($x > 0) {

        echo "Value of <strong>X</strong> is  <mark>" . $x . "</mark> <br><br>";
        echo "increment : Start <br><br>";
        $x--;
        echo "increment : Done <br><br>";
        echo "<hr>";
    }

    echo "The Last value of <strong>X</strong> is " . $x;
    ?>
</body>

</html>