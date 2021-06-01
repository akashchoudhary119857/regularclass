<?php
$fruits=array("mango","apple");
$student=["amit"=>67,"anil"=>98,"Sumit"=>56];
//echo $fruits; wrong
//echo $fruits[0]; right
//var_dump($fruits);
//print_r($fruits);
/*for($index=0;$index<2;$index++)
{
    echo $fruits[$index];//echo $fruits[1]
    echo "<br>";
}
foreach($fruits as $index=>$fruit)
{
    echo $index." ";
    echo $fruit."<br>";
}*/
$stu_record=array("amit",24,67.5);
$roll=["amit"=>1,"aditiya"=>2,"aniket"=>3,"garry"=>4];
print_r(array_change_key_case($roll,CASE_UPPER));
echo "<br>";
print_r(array_chunk($roll,2));
echo "<br>";
$arkey=["name1","name2"];
$arval=[12,14];
print_r(array_combine($arkey,$arval));
echo "<br>";
echo count($arval);
$arr=array_fill(3,5,"akash");
echo "<br>";
print_r($arr);
echo "<br>";
print_r(array_keys($roll));
echo "<br>";
print_r(array_merge($arkey,$arval));
echo "<br>";
$sear=(array_search(14,$arval));
echo $sear;
//sorting of an array
$stu_age=array("abhi"=>23,"amit"=>21,"garry"=>27,"harry"=>20);
arsort($stu_age);
echo "<br>";
print_r($stu_age);
asort($stu_age);
echo "<br>";
print_r($stu_age);
krsort($stu_age);
echo "<br>";
print_r($stu_age);
ksort($stu_age);
echo "<br>";
print_r($stu_age);
$files=["tm10.txt","Tm1.txt","tm15.txt","Tm12.txt","tm28.txt"];
natsort($files);
echo "<br>";
print_r($files);
natcasesort($files);
echo "<br>";
print_r($files);
$marks=[56,98,78,90,45,67];
rsort($marks);
echo "<br>";
print_r($marks);
sort($marks);
echo "<br>";
print_r($marks);

$friends_name=["schoolfriends"=>["rohit","mohit","vijay"],"collegefriends"=>["garry","harry","ammy"]];
print_r($friends_name);
$arr=[[1,2,3],[1,2,3],[1,2,3]];
echo "<br>";
print_r($arr);



















