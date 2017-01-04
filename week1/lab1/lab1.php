<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $tableSize = 10;
        echo "<table>";
        for ($row = 1; $row < $tableSize; $row++) :
        echo "<tr>";
        for ($col = 1; $col < $tableSize; $col++) :
        $color  = "";
        for ($i = 0; $i < 6; $i++):
        $click = (mt_rand(0,15));
        switch($click){
        case "10":
        $click= "A";
        break;
        case "11":
        $click = "B";
        break;
        case "12":
        $click = "C";
        break;
        case "13":
        $click = "D";
        break;
        case "14":
        $click = "E";
        break;
        case "15":
        $click= "F";
        break; 
        default:
        break;
        }
        $color .= $click;
        endfor;
        echo "<td style='background-color: #$color;'> $color <br /><span style= 'color:#ffffff;'> $color </span></td>";           
        endfor;         
        echo "</tr>\n";
        endfor;
        echo"</table>";     
        ?>
    </body>
</html>
