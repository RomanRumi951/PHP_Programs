<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <center>



    <table cellpadding="35" cellspacing="15" border="1" style="border-radius: 1rem;"> 

        <th style=border:none;border-radius:1rem;color:dark-black;background-color:#0002;text-align:center;>ASCII Values:::</th>
        <th style=border:none;border-radius:1rem;color:dark-black;background-color:#0002;text-align:center;>char(  ):::</th>
        <th style=border:none;border-radius:1rem;color:dark-black;background-color:#0002;text-align:center;>ord(  ):::</th>

        <?php

        $i = 1;
        $j = 1;

            
            for ($j = 0; $j <= 255; $j++) {

                echo "<tr>";
                $a = chr($j);
                $b = ord($a);
                echo "<td style=border:none;border-radius:1rem;color:dark-black;background-color:#0002;text-align:center;>$j </td><td style=border:none;border-radius:1rem;color:dark-black;background-color:#0002;text-align:center;>$a</td><td style=border:none;border-radius:1rem;color:dark-black;background-color:#0002;text-align:center;>$b</td>";
                echo "</tr>";
                
            }

            

        ?>

    </table>

</body>

</html>