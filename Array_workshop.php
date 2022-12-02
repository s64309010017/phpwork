<?php

    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];
    $sub6 = $_POST['sub6'];
    $sub7 = $_POST['sub7'];
    $sub8 = $_POST['sub8'];
    $sub9 = $_POST['sub9'];
    $sub10 = $_POST['sub10'];
    $sub11 = $_POST['sub11'];
    $sub12 = $_POST['sub12'];
    $sub13 = $_POST['sub13'];
    $sub14 = $_POST['sub14'];
    $sub15 = $_POST['sub15'];
    $sub16 = $_POST['sub16'];
    $sub17 = $_POST['sub17'];
    $sub18 = $_POST['sub18'];
    $pro  = $_POST['pro'];


    $subjects = array(
        array( $sub1, $sub2, $sub3), 
        array( $sub4, $sub5, $sub6), 
        array( $sub7, $sub8, $sub9), 
        array( $sub10, $sub11, $sub12), 
        array( $sub13, $sub14, $sub15), 
        array( $sub16, $sub17, $sub18), 
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        h1{
            text-align: center;
            font-size: 50px; 
            color: #000000;
        }
        p{
            text-align: center;
            font-size: 20px; 
        }
        div{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 400px;
            background: #EEF0EA;
            border-radius: 50px;

        }
        h4{
            text-align: center;
            font-size: 50px; 
        }
        body{
            background-image: linear-gradient(#F08080,#FFB6C1);
            padding: 330px;
        }
    </style>

    <?php
    echo "<table>";
    switch ($pro) {
        case 'หาจำนวนอาเรย์':
            echo "<h1 style=text-align:center; border-color: green'>จำนวนข้อมูล";
            echo count($subjects);
            echo "ชุด</h1>";
            break;
        
    default:
    for($r = 0;$r< count($subjects);$r++){
        for($c = 0;$c < 3; $c++){
            echo 'ข้อมูลรายวิชา = '.$subjects[$r][$c]."<br>";
        }
        echo "<hr color='#00FFFF'>";  
    }
   
}
?>

</body>
</html>
