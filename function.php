<?php
  
  function displayName(){
      echo "Rusnee pohma";
    }
    echo "My Name is ";
    displayName();

    echo "<hr color='red'>";

    function addNumber($num1,$num2){
       echo $num1 + $num2;
    }
    addNumber(2,4);

    echo "<hr color='green'>";
     
     function displaystudent($name){
        echo $name;
     }
     displaystudent ("Rusnee");


    echo "<hr color='red'>";

    function powerNumber($num,$pow){
       echo $num ** $pow;
    }
    addNumber(10,5); 

    echo "<hr color='green'>";

    function number($numerate,$denomerate){
        echo $numerate % $denomerate;
     }
     addNumber(17,5);





?>