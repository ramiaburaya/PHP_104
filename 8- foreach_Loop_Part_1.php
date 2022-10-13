<!DOCTYPE html>
<html>

<head>

    <title>PHP foreach Loop - Part 1</title>
</head>

<body>

    <?php

    echo "<h1>PHP foreach Loop - Part 1</h1>";

    $array = array("A" => "Blue", "B" => "Blue", "Y" => "Blue", "W" => "Blue");

    foreach ($array as $value) {
        echo ($value . "<br><br><hr>");
    }

    ?>
</body>

</html>