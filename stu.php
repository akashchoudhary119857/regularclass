<?php
$var=NULL;
var_dump($var);
$in=455787878458748795456456456;
var_dump($in);
$fl=754.450;
var_dump($fl);
$str='akash';
var_dump($str);
$arr=array('10.0',5.0,'8.0',7,9.0);
var_dump($arr);
class car{
    function  cars(){
        $this->model='bmw';
    }
}
$ope=3+5+6+8;
$vehi=new car();
var_dump($vehi);
echo "<br>";
$bina=(bool)1;
$a=3;
echo ($a<<4);
$b=20;
if($a==3 || $b==200){
    echo "yes";
}

$x=2;
$y=4;
while ($y != 0)
{

    // carry now contains common
    //set bits of x and y
    $carry = $x & $y;

    // Sum of bits of x and y where at
    //least one of the bits is not set
    $x = $x ^ $y;

    // Carry is shifted by one
    // so that adding it to x
    // gives the required sum
    $y = $carry << 1;
}
echo $x."<br>";

echo 12|33;
echo 12^33;

$a=6;
$b=4;


while ($b != 0)
{

    // carry now contains common
    //set bits of x and y
    $carry = (~$a) & $b;

    // Sum of bits of x and y where at
    //least one of the bits is not set
    $a = $a ^ $b;

    // Carry is shifted by one
    // so that adding it to x
    // gives the required sum
    $b = $carry << 1;
}
echo "<br>".$a;

$a="akash";
$b="Php trainer";
$a = $a.$b;

$arr_1=array("1","2","3");
$arr_2=array("3"=>1,2,3);
var_dump($arr_1);
var_dump($arr_2);
var_dump($arr_2+$arr_1);

$a=0;
$b=2;
if(!$a && $b++)
{
    $a++;
}
echo "<br>".$a;


$val_1="akash";
$val_2="choudhary";
echo "<br>";
var_dump($val_1);
echo "<br>";
var_dump($val_2);
echo "<br>";
var_dump($val_1!==$val_2);
echo 'Current script owner: ' . get_current_user()."\n";
echo "<br>";
var_dump($val_1<=>$val_2);
$res=$val_1--;
echo "<br>".$res;
echo $val_1."<br>";
var_dump(!$val_2);
$val_2.=$val_1;
echo "<br>".$val_2."<br>";
$ar_1=array(1,2.50,3);
$ar_2=array(1,2,3);
$secI=array("aditya"=>67,"ankit"=>89);
var_dump($ar_1);
echo "<br>";
var_dump($ar_2);
echo "<br>";
var_dump($ar_2!==$ar_1);
//echo phpinfo();
$num_1=(bool)"0";
//$num_2=60;
echo "<br>";
//$res=($num_1>$num_2)? :"Null";
echo $res;

$nc=$num_1??$num_2??null??7;
echo "<br>".$nc;
define("greeting",8);
echo greeting;
 echo constant("greeting");

 define("seca",["pulsar 150","pulsar 150 double disc","pulsar 150 single disc"]);
 print_r(seca);

echo round(5.5);
//echo number_format(657841548715,"","","");
echo "<br>";
echo "<br>".$nc;
























