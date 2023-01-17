<?php
 
function fruits ($fruit, $count, $price) {
    echo $fruit.  'は'.$count * $price. '円です。<br>';
}
 
fruits('りんご', 2, 150);
fruits('みかん', 1, 150);
fruits('もも', 3, 1000);
 
?>