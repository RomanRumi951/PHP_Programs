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
                @$b = strlen($a);
                @$i = 0;
                @$sum = 0;

                for($i=0;$i<$b;$i++)
                {
                    if($a[$i]=='a' or $a[$i]=='e' or $a[$i]=='i' or $a[$i]=='o' or $a[$i]=='u' or $a[$i]=='A' or $a[$i]=='E' or $a[$i]=='I' or $a[$i]=='O' or $a[$i]=='U')
                    {
                        $sum++;
                    }
                    
                }

                echo "<hr>";

                echo "<h3 style= font-family:cursive;color:green> Total number of vowels in Inputted string is $sum ::: ";
        ?>
</body>
</html>