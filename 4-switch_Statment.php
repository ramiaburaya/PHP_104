<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHP switch Statement</title>
</head>

<body>

    <?php

    echo "<h1>PHP switch Statement</h1>";

    $favcolor = "red"; // Black blue yellow red

    switch ($favcolor) {
        case "Black":
            echo "Your favorite color is Black!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "yellow":
            echo "Your favorite color is yellow!";
            break;
        default:
            echo "Your favorite color is neither Black, blue, nor Yellow!";
    }
    ?>

</body>

</html>