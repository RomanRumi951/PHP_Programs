<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        echo "<H3>Math Functions...</H3>";
        echo "absolute value ",abs(5.55);
        echo "<br>";
        echo "ceil ",ceil(5.55);
        echo "<br>";
        echo "floor ", floor(5.55);
        echo "<br>";
        echo "round value ", round(5.55);
        echo "<br>";
        echo "floating point remainder(modulo) ", fmod(4,4);
        echo "<br>";
        echo "minimum ", min(5, 3, 7);
        echo "<br>";
        echo "maximum ", max(5, 3, 9);
        echo "<br>";
        echo "power ", pow(5,2);
        echo "<br>";
        echo "square root ", sqrt(9);
        echo "<br>";
        echo "random value ", rand(1,10);
        echo "<br>";

        echo "<h3>String functions....</h3>";

        echo chr(98);
        echo "<br>";
        echo ord('roman');
        echo "<br>";
        echo strtolower('ROMAN');
        echo "<br>";
        echo strtoupper('roman');
        echo "<br>";
        echo strlen('romanriyazrubina');
        echo "<br>";
        echo ltrim("hello world", "hello");
        echo "<br>";
        echo rtrim("hello world", "rld");
        echo "<br>";
        echo trim("hello world", "hed");
        echo "<br>";
        echo strcmp("hello world", "hello world hello");
        echo "<br>";
        print_r(array(5,6,7,8,9));
        echo "<br>";
        // echo trim("hello world", "hed");
        echo "<br>";
        echo strcspn("Hello world!","w",5,3);
        
    ?>
    
</body>
</html>