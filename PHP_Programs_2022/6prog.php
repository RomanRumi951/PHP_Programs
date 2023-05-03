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
        <input type="text" name="t1" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003;color:green; placeholder="                                Enter any year"><br><br>
        
        <input type="submit" value="submit" style=width:5rem;height:3rem;border-radius:1rem;font-size:1rem;font-weight:bold;border-color:transparent;><br><br>
    </form>
        <?php

                @$a = $_POST['t1'];
                
                if(($a % 4 == 0) and ($a % 400 == 0))
                {
                    echo "<h3 style= font-family:cursive;color:green;>This year is leap year:::</h3>";
                }
                else 
                {
                    echo "<h3 style=font-family:cursive;color:green;>This year is not leap year:::</h3>";
                }

        ?>
</body>
</html>