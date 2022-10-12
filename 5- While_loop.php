<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHP while Loop</title>
</head>

<body>

    <?php

    echo "<h1>PHP while Loop</h1>";

    $x = 10;

    while ($x <= 101) {
        if ($x != 10) {
            echo "Value of <strong>X</strong> is  <mark>" . $x . "</mark> <br><br>";
        } else {
            echo "Value of X is intinal value  " . $x . "<br><br>";
        }
        echo "Dcrement : Start <br><br>";
        $x += 10;
        echo "Dcrement : Done <br><br>";
        echo "<hr>";
    }

    echo "The Last value of <strong>X</strong> is " . $x;
    ?>
</body>

</html>