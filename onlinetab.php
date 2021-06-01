<!DOCTYPE html>
<html>
<body>

<?php
echo "<table border='1' style='border-collapse: collapse'>";
for($fdigit=0;$fdigit<=9;$fdigit++){
    echo "<tr>";
    for($sdigit=0;$sdigit<=9;$sdigit++){
       echo"<td>$fdigit$sdigit</td>";
    }
    echo "</tr>";
}
echo "</table>";
$num_one=89;
$num_two=4167;
$num_three=170;
$greatest=($num_one>$num_two)?(($num_one>$num_three)?$num_one:$num_three):(($num_two>$num_three)?$num_two:$num_three);
echo "the greatest number is $greatest";
//echo get_current_user();
function fact($n)
{
    if($n==0 || $n==1)
    {
        return;
    }
    return $n*fact($n-1);
}
fact(5);
$m=null;
$n="50";
if($m??$n)
{
    echo $m;
}
else{
    echo $n;
}

if(strstr("akash",0,"akash my name is")==true)
{
    echo "yes";
}
$p=substr_count("my name is","ak");
echo "<br> $p";
mysqli_c
?>
</body>
</html>
