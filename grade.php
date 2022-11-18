<?php

$score = $_GET['score'];

if($score >= 90){
    echo "คุณได้ A+";
}elseif($score >=80){
    echo "คุณได้ A";
}elseif($score >=75){
    echo "คุณได้ B+";
}elseif($score >=70){
    echo "คุณได้ B";
}elseif($score >=65){
    echo "คุณได้ C+";
}elseif($score >=60){
    echo "คุณได้ C";
}elseif($score >=55){
    echo "คุณได้ D+";
}elseif($score >=50){
    echo "คุณได้ D";
}else{
    echo "คุณได้ F";
}
?>