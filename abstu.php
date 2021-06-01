<html>
<head>
    <title>
        chessboard
    </title>
    <style>
    .blackcol{
    background-color: black;
    }
        table{
        border:1px solid black;
        border-collapse:collapes;
        width:500px;
        height:500px;}
    </style>
</head>

<body>
<table>
<?php
for($row=0;$row<=7;$row++) {
    echo "<tr>";
    for ($col = 0; $col <= 7; $col++) {
        if ($row % 2 == 0 && $col % 2 == 1) {
            echo "<td class='blackcol'></td>";
        } elseif ($row % 2 == 1 && $col % 2== 0) {
            echo "<td class='blackcol'></td>";
        } else {
            echo "<td style='background-color: white'></td>";
        }
    }
    echo "</tr>";

}
