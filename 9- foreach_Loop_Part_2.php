<!DOCTYPE html>
<html>

<head>

    <title>PHP foreach Loop - Part 2</title>
</head>

<body>

    <?php

    echo "<h1>PHP foreach Loop - Part 2</h1>";

    $array = array("A" => "Black", "B" => "Blue", "Y" => "Yellow", "W" => "White");

    foreach ($array as $key => $value) {
        echo $key . " => " . $value . "<br><br><hr>";
    }
    ?>
</body>

</html>