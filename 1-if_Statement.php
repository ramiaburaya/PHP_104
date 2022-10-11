<!DOCTYPE html>
<html lang="en">

<head>

    <title>The if Statement</title>
</head>

<body>

    <?php

    echo "<h1>The if Statement</h1>";

    $Hour = date("H"); // get hour from local Time (PC)

    if ($Hour > 8) {
        echo "Have good Day";
    }

    ?>
</body>

</html>