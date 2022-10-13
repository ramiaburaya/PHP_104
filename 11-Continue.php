<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHP Break and Continue - Continue</title>
</head>

<body>
    <?php
    echo "<h1>PHP Break and Continue - <mark>Continue</mark></h1>";


    /*
        the for loop will stop when  i =26
    */
    for ($i = 0; $i < 11; $i++) {

        if ($i == 4) {
            echo "break :Start<br>";
            echo "break :Done<br><hr>";

            break;
        }

        echo "<strong>I</strong> is : --> " . $i . "<br><br><hr>";
    }

    echo "<strong>Last value of I = </strong> " . $i . "<br><br><hr>";

    echo "<hr>";
    echo "<h2>While</h2>";





    $x = 0;
    while ($x < 11) {

        if ($x == 4) {
            echo "continue :Start<br>";
            echo "continue :Done<br><hr>";
            $x++;
            continue;
        }
        echo "<strong>I</strong> is : --> " . $x . "<br><br><hr>";

        $x++;
    }

    echo "<strong>Last value of I = </strong> " . $x . "<br><br><hr>";
    ?>
</body>

</html>