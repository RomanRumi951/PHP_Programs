<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>

    <form action="" method="POST">
        <input type="text" name="t1" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:20rem; placeholder="                                 Input number 1"><br><br>
        <input type="text" name="t2" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:20rem; placeholder="                                 Input number 2"><br><br>
        <input type="text" name="t3" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:20rem; placeholder="                                 Input number 3"><br><br>
        <input type="submit" value="submit" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:10rem;font-size:2rem;font-family:cursive;color:green;><br><br>
    </form>
        <?php
            $a = $_POST['t1'];
            $b = $_POST['t2'];
            $c = $_POST['t3'];

            if($a > $b and $a > $c)
            {
                echo "<h3 style=font-size:2rem;font-family:cursive;color:green;>The maximum number is ", $a;
            }
            else if($b > $a and $b > $c)
            {
                echo "<h3 style=font-size:2rem;font-family:cursive;color:green;>The maximum number is ", $b;
            }
            else if($c > $a and $c > $b)
            {
                echo "<h3 style=font-size:2rem;font-family:cursive;color:green;>The maximum number is ", $c;
            }
            else
            {
                echo "<h3 style=font-size:2rem;font-family:cursive;color:green;>Inputted number is Equal ";
            }
        ?>
</body>
</html>