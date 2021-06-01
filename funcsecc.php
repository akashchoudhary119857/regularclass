<?php
$name="akash";
function runn()
{
    static $name_2=1;
    //echo "<br>hello welcome to offline mode<br> ";
    //echo "now you have to follow rules";
   return ++$name_2;

}
/*function rules(arg1, arg 2 .......)
{
    // a function name should start with letter or underscore_
    //a function name cannot start with a number
    //later it will be a combination of alphanumeric characters or underscore
    //in php a function name is case in-sensitive
    // it is optional to provide the argument list to the function name
    // before the name it is mandatory to use function keyword
}*/

//echo "hello , welcome in php class<br>";
$ans=runn();
echo "<br> $ans";
//echo "hope you all feel good and safe";
$ans=runn();
echo "<br> $ans";









