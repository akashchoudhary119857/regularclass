<?php
declare(strict_types=1);
$area=56;
function sum(int $val_2, string $val_1)
{
    global $area;
    echo $area;
$res=$val_1+$val_2;
return $res;

}
$ans=sum(3,"78");
echo $ans;


