<?php
echo "สูตรคูณแม่ $numply.<br>";
for($num = 1; $num <= 12; $num++){
    echo " $numply.x ".$num." = ".($numply * $num);
    echo "<br>";
}
echo"<hr color='red'>";

echo "สูตรคูณแม่ 12<br>";
$num2 = 1;

while($num2 <= 12){
    echo " 12 x ".$num2." = ".($num2*12);
    echo "<br>";
    $num2++;
    
}
echo"<hr color='red'>";

echo "สูตรคูณแม่ 121<br>";
$num3 = 1;
do{
    echo " 121 x ".$num3." = ".($num3*121);
    $num3++;
    echo "<br>";
}while($num3 <= 12);


?>