<?php
    
    $tan = $_POST['tan'];
    $tingi = $_POST['tingi'];
    $kkk = 1/2 * $tan * $tingi;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณ.....</title>
</head>
<body>
    <br>
    <p style='color:red'>
     <?php
        echo " ความสูง เท่ากับ ".$tingi."<br>";
    ?>   
    </p>
    <p style='color:green'>
     <?php
        echo " ฐาน เท่ากับ ".$tan."<br>";
    ?>   
    </p>
    <p style='color:blue'>
     <?php
        echo " พื้นที่รูปสามเหลี่ยม เท่ากับ ".$kkk;
        ?>   
    </p>
     
</body>
</html>