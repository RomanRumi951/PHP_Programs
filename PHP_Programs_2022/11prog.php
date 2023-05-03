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
        <input type="text" name="t1" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003;color:green; placeholder="              Enter any color name (red, green, blue)"><br><br>
        <input type="submit" value="submit" style=width:5rem;height:3rem;border-radius:1rem;font-size:1rem;font-weight:bold;border-color:transparent;><br><br>
    </form>
        <?php

                @$a = $_POST['t1'];
                
                if($a === 'green' or $a === 'Green' or $a === 'GREEN')
                {
                    echo "<body style=background-color:green;> ";
                }
                else if($a === 'blue' or $a === 'Blue' or $a === 'BLUE')
                {
                    echo "<body style=background-color:blue;> ";
                }
                else if($a === 'red' or $a === 'Red' or $a === 'RED')
                {
                    echo "<body style=background-color:red;> ";
                }
                else
                {
                    echo "<body style=background-color:purple;>";
                }



        ?>
</body>
</html>