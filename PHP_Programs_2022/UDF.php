<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body text="green">

    <font face="lucida handwriting">

        <?php
        echo "<center>";
        function rumi()
        {
            static $a = 0;
            $a++;
            echo "<br><br>";
            echo $a;
            echo "<br><br>";
            echo "|--------------------------|";
            if ($a < 10) {
                rumi();
            }
        }

        rumi();
        ?>

</body>

</html>