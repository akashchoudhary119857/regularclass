<!DOCTYPE html>
<html>
<body>

<?php
echo "<table border='1' style='border-collapse: collapse'>";
/*for($fdigit=1  ;$fdigit<=10;$fdigit++){
    echo "<tr>";
    for($sdigit=1;$sdigit<=10;$sdigit++){
        if(($fdigit+$sdigit)%2!=0){
          echo "<td bgcolor='black' style='height: 100px;width: 100px'>" ;
        }
        else{
            echo "<td style='height: 100px;width: 100px'>" ;
        }
       // $x=$fdigit * $sdigit;
        //echo "<td> "."$x". "</td>";
    }
    echo "</tr>";
}*/
for($first_d=1;$first_d<=8;$first_d++)
{
    echo "<tr>";
    for($sec_d=1;$sec_d<=8;$sec_d++)
    {
        echo "<td>$first_d * $sec_d= ".$first_d*$sec_d."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>

