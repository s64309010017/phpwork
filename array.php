<?php

    $name = array(
        "Teera",
        "weera",
        "Peera",
        "Meera"
    );



echo "<h2>Tndexed Array</h2>";
echo "จำนวนข้อมูล".count($name)."ชุด<br>";
echo "ข้อมูล Index 2 = ".$name[2]."<br>";

echo"<hr color='red'>";
echo "<p>การใช้ for ดึงข้อมูล</p>";

for($num = 0;$num < count($name);$num++){
    echo 'ข้อมูล = '.$name[$num]."<br>";
}

echo"<hr color='red'>";
echo"<p>การใช้ foreach ดึงข้อมูล </p>";
foreach($name as $nm){
    echo $nm."<br>";
}

echo "<hr color='green' >";
echo "<hr color='green' >";


$students = array(
    "Teera" => "3.33",
    "Weera" => "2.22",
    "Peera" => "1.11",
    "Meera" => "0.00"
);

echo "<h2>Associative Array</h2>";
echo "จำนวนข้อมูล".count($name)."ชุด<br>";

echo "<hr color='red'>";
echo "<p>การใช้ foreach ดึงข้อมูล</p>";
foreach($students as $kstd => $vstd){
    echo "Key($kstd : " .$vstd. "<br>";
}

echo "<hr color='green'>";
echo "<hr color='green'>";

$subjects = array(
    array(" Basic HTML","1-4-3","Rusnee Pohma"),
    array("Basic Database","1-2-2","safika Pohma"),
    array("Basic Java","2-2-2","fatee Pohma"),
    array("Basic NetWork","2-2-3","snee Pohma"),
    array("Basic Javascript","0-4-2","kitiya Pohma")
    

);

echo "<h2>Multimensional Array</h2>";
echo "จำนวนข้อมูล ".count($subjects)."ชุด<br>";
echo $subjects[4][1]. "<br>";

echo "<hr color='red'>";
echo "<p>การใช้ for ดึงข้อมูล</p>";
for($r = 0;$r < count($subjects); $r++){
    for($c = 0;$c < 3; $c++){
        echo $subjects[$r][$c]. "<br>";
    }
   echo "<hr>";
}
echo "<hr color='green'>";
echo "<hr color='green'>";




?>