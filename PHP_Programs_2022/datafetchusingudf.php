<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <!-- <form action="" method="POST">
        <input type="text" name="t1"><br><br>
        <input type="text" name="t2"><br><br>
        <input type="submit" value="Submit">
    </form> -->
    <?php

        function test()
        {
            echo "<form method=POST>";
            echo "<input type=text name=t1><br><br>";
            echo "<input type=text name=t2><br><br>";
            echo "<input type=submit value=Submit>";
            echo "</form>";
            $a = $_POST['t1'];
            $b = $_POST['t2'];
            $c = $a + $b;
            echo "<br><br>";
            echo "The sum is $c";
            // return $c;
        }
       test();

       function name($d='rajkot')
       {
           
           echo "welcome to ", $d;
           

       }

       name('jahangir');
       name();
       
    ?>
    
</body>
</html>