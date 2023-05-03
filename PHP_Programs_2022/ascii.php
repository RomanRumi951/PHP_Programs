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

        <?php

        $i = 1;
        $j = 1;

            
            for ($j = 0; $j <= 255; $j++) {

                echo "<tr>";
                $a = chr($j);
                echo "<td style=border:none;border-radius:1rem;color:dark-black;background-color:#0002;>$j </td><td style=border:none;border-radius:1rem;color:dark-black;background-color:#0002;>$a</td>";
                echo "</tr>";
                
            }

            

        ?>

    </table>

</body>

</html>