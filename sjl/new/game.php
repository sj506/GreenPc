<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>오목</title>
    <link rel="stylesheet" href="game.css">
</head>
<body>
    <table>
        <?php
        print "<div id='doll'>";
        for($i=0;$i<=20;$i++)
        {
            print"<tr>";

            for($z=0;$z<=20;$z++)
            {
                print"<td></td>";
            }
            print "</tr>";
        }
        print "</div>";
        print "<div id='doll_1'>";
        for($i=0;$i<=20;$i++)
        {
            for($z=0;$z<=20;$z++)
            {
                print"@";
            }
        
            print"@ <br>";

        }
        print "</div>";
        ?>
        </table>
</body>
</html>