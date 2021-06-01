
<html>
<head>
    <title>
        chessboard
    </title>
    <style>
        border=1px solid black;
        border-collapse=collapse;
        width=500px;
        height=500px;
    </style>
</head>

<body>
<table>
<?php
/*for($row=1;$row<=8;$row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        if ($row % $col == 0 && $col % $row == 1) {
            echo "<td style='background-color: black'></td>";
        } elseif ($row % $col == 1 && $col % $row == 0) {
            echo "<td style='background-color: black'></td>";
        } else {
            echo "<td style='background-color: white'></td>";
        }
    }

}*/
$fact=1;
function fac($a){
    global $fact;
    for($b=$a;$b>=1;$b--){
        $fact*=$b;
    }
    echo "factorial of".$a."is".$fact;
}
fac(5);
?>
</table>
</body>
</html>
