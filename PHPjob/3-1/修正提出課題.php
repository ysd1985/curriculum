<?php

for ( $i = 1 ; $i <= 100 ; $i++){
 if      (!($i % 15)){
                echo "FizzBuzz!!<br/>\n" ;
   }elseif
         (!($i % 5)){
                echo "Buzz!<br/>\n" ;
   }elseif
         (!($i % 3)){
                echo "Fizz!<br/>\n" ;
   }elseif
         ($i % 15){
                echo $i."<br/>\n" ;
   }elseif
         ($i % 5){
                echo $i."<br/>\n" ;
   }elseif
         ($i % 3){
                echo $i."<br/>\n" ;
   }
}

?>