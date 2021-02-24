<?php
/*$day=8;
switch($day)
{
    default:
        echo "Wrong input";
        break;
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "wednesday";
        break;
    case 4:
        echo "thursday";
        break;
    case 5:
        echo "friday";
        break;

}*/

$num_1=1770;
$num_2=5817;
$num_3=1967;
switch($num_1>$num_2 )
{
    case 1:
        switch($num_1>$num_3){
            case 1:
                echo "number 1 is greater";
                break;
            case 0:
                echo "number 3 is greater";
                break;
        }break;

    case 0:
        switch ($num_2>$num_3){
            case 1:
                echo "Number 2 is greater";
                break;
            case 0:
                echo "Number 3 is greater";
        }


}





