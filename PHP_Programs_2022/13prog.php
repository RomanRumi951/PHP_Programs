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
        <input type="text" name="t1" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003; placeholder="          Enter Marks For Data Structure Out of 100">
        <input type="text" name="t2" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003; placeholder="                 Enter Marks For PHP Out of 100"><br><br>
        <input type="text" name="t3" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003; placeholder="                Enter Marks Mathematics Out of 100">
        <input type="text" name="t4" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003; placeholder="                 Enter Marks For COA Out of 100"><br><br>
        <input type="submit" value="submit" style=width:5rem;height:3rem;border-radius:1rem;font-size:1rem;font-weight:bold;border-color:transparent;><br><br>
    </form>
        <?php

                @$a = $_POST['t1'];
                @$b = $_POST['t2'];
                @$c = $_POST['t3'];
                @$d = $_POST['t4'];

                @$e = ($a + $b + $c + $d)/4;

                if ($a >= 33 and $b >= 33 and $c >= 33 and $d >= 33) {

                    echo "<h3 style= font-family:cursive;color:green> Percentage of Given Marks out of 100 is $e%.... ";
                    echo "<br>";
                    echo "<h3 style= font-family:cursive;color:green> Status :: Pass !!!!.... ";
                }
                else
                {
                    echo "<h3 style= font-family:cursive;color:green> Status :: Fail !!!!.... ";   
                }

                



        ?>
</body>
</html>