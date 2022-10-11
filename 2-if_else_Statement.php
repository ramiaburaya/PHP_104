<!DOCTYPE html>
<html lang="en">

<head>

    <title>if else Statement</title>
</head>

<body>

    <?php

    echo "<h1>if else Statement</h1>";

    $hour = date("H"); // get date from local host (PC)

    if ($hour > 21) { // not nigth
        echo "Have a good <mark>day</mark>";
    } else {
        echo "have a good <mark>night</mark>";
    }



    ?>
</body>

</html>