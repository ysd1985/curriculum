<?php

for ( $i = 1 ; $i <= 100 ; $i++){
 if      (!($i % 15)){
                echo "Fizz Buzz<br/>" ;
   }elseif
         (!($i % 5)){
                echo "Buzz<br/>" ;
   }elseif
         (!($i % 3)){
                echo "Fizz<br/>" ;
   }elseif
         ($i % 15){
                echo $i."<br/>" ;
   }elseif
         ($i % 5){
                echo $i."<br/>" ;
   }elseif
         ($i % 3){
                echo $i."<br/>" ;
   }
}

?>