<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body style="background-color: rgb(217, 172, 238);"><br><br><br><br><br><br><br><br><br><br>
    <div class="container" align="center">    
    <table style="border:1px dashed #FF34B3; background-color: #FF34B3" cellspacing="3" cellpadding="3" width="200"><tr><td><table style="border:1px dashed #FF82AB ; background-color: #FF82AB " cellspacing="5" cellpadding="3" width="400"><tr><td style="background-color: #ffffff"><center><h2>ผลลัพธ์ที่ได้ <br><br>
    <?php
    switch ($op) {
        case '+':
            function addNumber($num1,$num2){
                echo $num1 + $num2;
            }
            echo addNumber($num1,$num2);
            break;
        case '-':
            function minusNumber($num1,$num2){
                echo $num1 - $num2;
            }
            echo minusNumber($num1,$num2);
            break;
        case 'x':
            function multipleNumber($num1,$num2){
                echo $num1 * $num2;
            }
            echo multipleNumber($num1,$num2);
            break;
        case '/':
            function divideNumber($num1,$num2){
                echo $num1 / $num2;
            }
            echo divideNumber($num1,$num2);
            break;        
        case '%':
            function number($num1,$num2){
                echo $num1 % $num2;       
            }
            echo number($num1,$num1);
            break;   
        default:
            function powerNumber($num1,$num2){
                echo $num1 ** $num2;               
            }
            echo powerNumber($num1,$num2);
            break;       
    }

?></h2></center>

</td></tr></table></td></tr></table>

</div>
</body>
</html>