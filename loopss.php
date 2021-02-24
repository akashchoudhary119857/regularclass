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

$sum=0;
for($count=1,$check=10;$count<=$check;$count++,$check--)
{
  echo "\$count=$count and \$check=$check";

}


$data = ["School" => ["Late shashi pratap" , "Vivek chaudhary", "Gaurav shara"], "Graduation" => ['Jatinder singh', 'Bhupinder singh', 'Manpreet sandhu'] ];
 echo '<h1>Friends From and Names';
foreach ($data as $friends => $names) {
    echo "<h2>$friends</h2>";
    foreach ($names as $name) {
        echo "<div>$name</div>";
    }
}



