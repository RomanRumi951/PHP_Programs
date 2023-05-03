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
        <input type="text" name="t1" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003;color:green; placeholder="                            Enter any Number::"><br><br>
        <input type="submit" value="submit" style=width:5rem;height:3rem;border-radius:1rem;font-size:1rem;font-weight:bold;border-color:transparent;><br><br>
    </form>
        <?php

                @$a = $_POST['t1'];
                switch($a)
                {
                    case 1:
                        echo "<h3 style= font-family:cursive;color:green> Sunday....";
                        break;

                    case 2:
                        echo "<h3 style= font-family:cursive;color:green> Monday....";
                        break;

                    case 3:
                        echo "<h3 style= font-family:cursive;color:green> Tuesday....";
                        break;

                    case 4:
                        echo "<h3 style= font-family:cursive;color:green> Wednesday....";
                        break;

                    case 5:
                        echo "<h3 style= font-family:cursive;color:green> Thursday....";
                        break;

                    case 6:
                        echo "<h3 style= font-family:cursive;color:green> Friday....";
                        break;

                    case 7:
                        echo "<h3 style= font-family:cursive;color:green> Saturday....";
                        break;

                    default:
                        echo "<h3 style= font-family:cursive;color:green> Invalid Choice....";
                }
                
        ?>
</body>
</html>