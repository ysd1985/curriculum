<?php
 
 //単価設定の連想配列
 $fruits =  ['りんご' => 150, 'みかん' => 50, 'もも' => 500];

//個数の連想配列
$fruitAmount = [2, 3, 6];

//単価×個数＝金額を求める関数:f_total
function getPrice($単価, $個数) {
	$合計値 = $単価 * $個数;

  return $合計値;
}

// TODO : foreach文を使って$fruitsそれぞれの金額を取得・表示
$i = 0;
foreach ($fruits as $key => $value) {
	echo $key."は".getPrice($value,$fruitAmount[$i])."円です。<br>\n";
	$i++;
	}
?>
 
 
  



