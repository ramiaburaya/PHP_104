<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHP - The if...elseif...else Statement</title>
</head>

<body>

    <?php

    echo "<h1>PHP - The if...elseif...else Statement</h1>";

    $hour = 20;

    echo $hour;

    if ($hour <= 8) {

        echo " - Good morning";
    } else if ($hour <= 15) {

        echo " - Have a good day";
    } else {

        echo " - Have a good  night";
    }

    ?>
</body>

</html>