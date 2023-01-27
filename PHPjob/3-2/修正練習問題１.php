<?php

//単価×個数＝金額を求める関数:f_total
function f_total($tanka, $count) {
	$total = $tanka * $count ;

  return $total;
}
   
  $fruits = [
    [
      'name' => 'りんご',
      'tanka' => 150,
      'count' => 2,
    ],
    [
      'name' => 'みかん',
      'tanka' => 50,
      'count' => 3,
    ],
    [
      'name' => 'もも',
      'tanka' => 500,
      'count' => 6,
    ],
  ];
  
  // TODO : foreach文を使って$fruitsそれぞれの金額を取得・表示
  foreach ($fruits as $value) {
    print $value['name'] ."は".f_total($value['tanka'],$value['count'])."円です。<br>\n"; 
  }
 
?>

  



