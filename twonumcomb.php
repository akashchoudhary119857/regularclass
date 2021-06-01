<!DOCTYPE html>
<html>
<body>
<!--<table  style="border-collapse: collapse; border: 2px solid black ">-->
<?php
echo "<h1 style='text-align: center'>Chess Board</h1>";
echo "<table border=\"1\" style=\' border-collapse: collapse; align='center' \'>";
//echo "<table>";
/*for($first_d=1;$first_d<=8;$first_d++)
{
    echo "<tr>";
    for($sec_d=1;$sec_d<=8;$sec_d++)
    {
        //$val=$first_d*$sec_d;
        //echo "<td>$val</td>";
        echo "<td>$first_d * $sec_d= ".$first_d*$sec_d."</td>";
    }
    echo "</tr>";
}*/
for($row=1;$row<=8;$row++)
{
    echo "<tr>";
    for($col=1;$col<=8;$col++)
    {

        if(($row+$col)%2==0)
        {
           //echo "<td bgcolor='white'></td>";
             echo "<td style='border:1px solid black; border-collapse:collapse;height:100px; width:100px' >"."</td>";
        }
      else
        {
           // echo "<td bgcolor=black></td>";
            echo "<td style='border:1px solid black; border-collapse:collapse;height:100px; width:100px; background-color: black'>"."</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>