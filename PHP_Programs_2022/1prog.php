<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Enter your name and surname!!!</h2>
    <form action="" method="POST">
        <input type="text" name="t1"><br><br>
        <input type="text" name="t2"><br><br>
        <input type="submit" value="submit"><br>

    </form>
</center>
    <?php
    echo "<center>";
    echo "";
        @$a = $_POST['t1'];
        @$b = $_POST['t2'];
        @$c = " ";
        echo "<br>";
        echo "<h3>$a $c $b</h3>";
    ?>
    
</body>
</html>




