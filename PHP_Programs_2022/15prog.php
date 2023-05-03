<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><form action="" method="post">
        <input type="text" name="t1" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003;color:green; placeholder="                              Enter any Number :)"><br><br>
        <input type="submit" value="submit" style=width:5rem;height:3rem;border-radius:1rem;font-size:1rem;font-weight:bold;border-color:transparent;><br><br>
    </form>
        <?php

                @$a = $_POST['t1'];
                @$i = 0;
                @$osum = 0;
                @$esum = 0;

                for($i=1;$i<=$a;$i++)
                {
                    if ($i % 2 == 0) {

                        echo "<h3 style= font-family:cursive;color:green>  $i ";
                        $esum = $esum + $i;
                    }
                    else {

                        echo "<h3 style= font-family:cursive;color:green>  $i ";
                        $osum = $osum + $i;   
                    }
                    
                }

                echo "<hr>";

                echo "<h3 style= font-family:cursive;color:green> Sum of Even Numbers = $esum ";

                echo "<hr>";

                echo "<h3 style= font-family:cursive;color:green> Sum of Odd Numbers = $osum ";

                echo "<hr>";
        ?>
</body>
</html>