<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <center><form action="" method="post">
        <input type="text" name="t1" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003; placeholder="                                Enter a string"><br><br>
        <input type="submit" name="s1" style=width:5rem;height:3rem;border-radius:1rem;font-size:1rem;font-weight:bold;border-color:transparent;><br><br>
        
    </form>
        <?php

                @$a = $_POST['t1'];
                // @$b = strlen($a);
                // @$i = 0;
                // @$sum = 0

                echo "<h3 style= font-family:cursive;color:green>";

                
                print_r(str_split($a));

                // $c = print_r(str_split($a));
                echo "<br><br>";
                @$b = array('Hello','World!','Beautiful','Day!');
                echo "<br><br>";
                print_r($b);
                echo "<br><br>";
                echo implode(" ",$b);
                
        ?>
</body>
</html>