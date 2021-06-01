<?php
$stu_roll_no=[181500200,181500201,181500202,181500203];
$stu_roll_no[4]=89768565;
$stu_roll_no[]=567467565;
array_push($stu_roll_no,4564646);
array_unshift($stu_roll_no,5545);

echo "students's roll no <br>";
echo $stu_roll_no[2];
$data = ["School" => ["Late shashi pratap" , "Vivek chaudhary", "Gaurav sharma"], "Graduation" => ['Jatinder singh', 'Bhupinder singh', 'Manpreet sandhu'] ];
echo '<h1>Friends From and Names';
foreach ($data as $friends => $names) {
    echo "<h2>$friends</h2>";
    foreach ($names as $name) {
        echo "<div>$name</div>";
    }
}
usort();
uasort();
uksort();
//print_r($stu_roll_no);













