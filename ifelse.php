<?php

   $score = 16;

   if($score % 2 == 0){
     echo "เลขคู่";
   }
   echo "<hr color='red'>";
   if($score % 2 == 0){
      echo "เลขคู่";
   }else{
    echo "เลขคู๋";
    
   }else{
      echo "เลขคี่";
   }
   echo"<hr color='red'>";
   $led = 'red'

   if($led == 'red'){
    echo "STOP!!!";
   }elseif($led == 'yello'){
       echo "SLOWLY!!!";
   }else{
       echo "GOING!!!";
   }

   

    
 


?>