<?php
 
 $fruits = [
	"りんご"=> [150, 2], 
	"みかん" => [50, 3], 
	"もも" => [500, 6]
];

//単価×個数＝金額を求める関数:f_total
function f_total($tanka, $count) {
	$total = $tanka * $count ;

  return $total;
}

// TODO : foreach文を使って$fruitsそれぞれの金額を取得・表示
foreach ($fruits as $key => $value) {
    print $key ."は".f_total($value[0],$value[1])."円です。<br>\n"; 
  }
?>
 
 
  



