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
        <input type="text" name="t1" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003;color:green; placeholder="                            Enter First Number::"><br><br>
        <input type="text" name="t2" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003;color:green; placeholder="                            Enter Second Number::"><br><br>
        <input type="text" name="t3" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003;color:green; placeholder="                            Enter any Character(+, -, *, /)::"><br><br>
        <input type="submit" value="submit" style=width:5rem;height:3rem;border-radius:1rem;font-size:1rem;font-weight:bold;border-color:transparent;><br><br>
    </form>
        <?php

                @$a = $_POST['t1'];
                @$b = $_POST['t2'];
                @$c = $_POST['t3'];

                switch($c)
                {
                    case '+':
                        $d = $a + $b;
                        echo "<h3 style= font-family:cursive;color:green> Addition Of Entered Number is $d....";
                        break;

                    case '-':
                        $d = $a - $b;
                        echo "<h3 style= font-family:cursive;color:green> Subtraction Of Entered Number is $d....";
                        break;

                    case '*':
                        $d = $a * $b;
                        echo "<h3 style= font-family:cursive;color:green> Multiplication Of Entered Number is $d....";
                        break;

                    case '/':
                        $d = $a / $b;                    
                        echo "<h3 style= font-family:cursive;color:green> Division Of Entered Number is $d....";
                        break;

                    default:
                        echo "<h3 style= font-family:cursive;color:green> Invalid Choice....";
                }
                
        ?>
</body>
</html>