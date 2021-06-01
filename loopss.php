<?php
/*$num_1=310;
$num_2=70;
$num_3=45;
$num_4=78;
switch($num_1 > $num_2 )
{
    case 1:
        switch($num_1>$num_3)
        {
            case 1:
                echo "number 1 is greater";
                break;
            case 0:
                echo "number 3 is gre";
                break;

        }
    break;
    case 0:
        switch ($num_2>$num_3)
        {
            case 1:
                echo "number 2 is gre";
                break;
            case 0:
                echo "number 3 is gre";

        }
}*/

/*$count = 100;
while ($count <= 2000) {
    if ($count % 2 == 1) {
        echo "$count  ";
    }
    $count++;
}

$num = 7;
$count = 10;
while ($count >= 1) {
    echo $num * $count;
    echo "<br>";
    $count--;
}
echo "outside loop<br>";
$num = 8;
$count = 1;
do {
    echo $num * $count;
    echo "<br>";
    $count++;
} while ($count <= 10);
echo "<br>outside do while loop";*/

/*$sum=0;
for($count=1;$count<=1000;$count++)
{
    if($count%2==1)
    {
        echo "$count ";
    }
  //echo "\$count=$count and \$check=$check";
}


$data = ["School" => ["Late shashi pratap" , "Vivek chaudhary", "Gaurav shara"], "Graduation" => ['Jatinder singh', 'Bhupinder singh', 'Manpreet sandhu'] ];
 echo '<h1>Friends From and Names';
foreach ($data as $friends => $names) {
    echo "<h2>$friends</h2>";
    foreach ($names as $name) {
        echo "<div>$name</div>";
    }
}*/

/*for($row=1;$row<=5;$row++){
    for($col=1;$col<=5;$col++){
        echo "section B";
        break 2;
    }
}

$num=1;
do
{
    //$num++;
    if($num%2==1)
    {
        echo "$num ";
    }
    $num++;
}while($num>1001);
echo "<br> outside loop";

for(;$num<5;)
{
    echo "akash";
    $num++;
}

for($num=1;$num<=5;$num++)//row
{


    if($num==2)
    {

        continue ;
    }
    echo $num;
}
echo "<br>";

foreach($arr : $rollno){
   // echo $index."<br>";
    //echo $element."<br>";
    //echo "The index is $index and its value is : $element<br>";
    echo $rollno;
}

/*$classrecord=array("ankit"=>84,"rahul"=>65,"raj"=>86);
foreach($classrecord as $stuname=>$marks)
{
    echo "The students name is $stuname and he/she got $marks in php <br>";
}*/

echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($row=1; $row <= 10; $row++) {
    echo "<tr>";
    for ($col=1; $col <= 10; $col++) {
        $p = $col * $row;
        echo "<td>$p</td> ";
    }
    echo "</tr>";
}
echo "</table>";

/*<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
</html>*/

for ($a = 0; $a < 10; $a++) {
    for ($b = 0; $b < 10; $b++) {
        echo $a . $b . ", ";
    }
}
//printf("<br>");























