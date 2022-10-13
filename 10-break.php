<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHP Break and Continue - Break</title>
</head>

<body>
    <?php
    echo "<h1>PHP Break and Continue - <mark>Break</mark></h1>";


    /*
        the for loop will stop when  i =26
    */
    for ($i = 0; $i < 50; $i++) {

        if ($i == 26) {
            break;
        }

        echo "<strong>I</strong> is : --> " . $i . "<br><br><hr>";
    }

    echo "<strong>Last value of I = </strong> " . $i . "<br><br><hr>";

    ?>
</body>

</html>