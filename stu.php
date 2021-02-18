<?php
$var=NULL;
var_dump($var);
$in=455787878458748795456456456;
echo "<br>";
var_dump($in);
$fl=754.450;
echo "<br>";
var_dump($fl);
$str='akash';
echo "<br>";
var_dump($str);
echo "<br>";
$arr=array('10.0',5.0,'8.0',7,9.0);
var_dump($arr);
class car{
    function  cars(){
        $this->model='bmw';
    }
}
$ope=3+5+6+8;
$vehi=new car();
echo "<br>";
var_dump($vehi);
echo "<br>";
$bina=(bool)1;
$a=3;
echo "<br>";
echo ($a<<4);
$b=20;
if($a==3 || $b==200){
    echo "<br>";
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
echo "<br>";
echo $x."<br>";
echo "<br>";
echo 12|33;
echo "<br>";
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
echo "<br>";
echo "<br>".$a;

$a="akash";
$b="Php trainer";
echo "<br>";
$a = $a.$b;

$arr_1=array("1","2","3");
$arr_2=array("3"=>1,2,3);
echo "<br>";
var_dump($arr_1);
echo "<br>";
var_dump($arr_2);
echo "<br>";
var_dump($arr_2+$arr_1);

$a=0;
$b=2;
if(!$a && $b++)
{
    $a++;
}
echo "<br>";
echo "<br>".$a;


$val_1="akash";
$val_2="choudhary";
echo "<br>";
var_dump($val_1);
echo "<br>";
var_dump($val_2);
echo "<br>";
var_dump($val_1!==$val_2);
echo "<br>";
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
echo "<br>";
echo greeting;
echo "<br>";
 echo constant("greeting");

 define("seca",["pulsar 150","pulsar 150 double disc","pulsar 150 single disc"]);
echo "<br>";
 print_r(seca);

echo round(5.5);
//echo number_format(657841548715,"","","");
echo "<br>";
echo "<br>".$nc;

$a=boolval(" ");
var_dump($a);
if ($a){
    echo "yes";
}

define("pie",3.14);
echo "<br>".pie;

echo constant("pie");
print pie;
define("Pie",45);
echo Pie;
$in=34;
$fl=3.0;
$res=$in+$fl;
echo "<br>";
var_dump($res);
$x=2;
$y=4;
echo "<br>";
var_dump($x/$y);
echo "<br>";
var_dump($y/$x);
// type cast into integer
$tyin=(int)$fl;
echo "<br>";
var_dump($tyin);

$str="14 hello456";
$in=(integer)$str;
echo "<br>";
var_dump($in);
// type caste into float
$tyf=(float)$x;
echo "<br>";
var_dump($tyf);

//type caste into bool
$a=(bool)null;
$b=(bool)'';
echo "<br>";
var_dump($a);
$b=(bool)'hello';
echo "<br>";
var_dump($b);
$c=(bool)"my name";
echo "<br>";
var_dump($c);
$d=(bool)0;
echo "<br>";
var_dump($d);
$e=(bool)45;
echo "<br>";
var_dump($e);
$f=(bool)4.0;
echo "<br>";
var_dump($e);
$g=(bool)[];
echo "<br>";
var_dump($g);
$h=(bool)[1,2];
echo "<br>";
var_dump($h);
$i=(bool)[1,"hello"];
echo "<br>";
var_dump($i);
//type caste into an array
$b=(array)true;
echo "<br>";
var_dump($b);






















