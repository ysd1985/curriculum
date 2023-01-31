<?php
$my_number = $_GET['my_number'];
function one_num($my_number){
    $lnd_num = substr($my_number, rand(0,strlen($my_number)-1) ,1) ; 
    return $lnd_num ;
}
?>
<?php echo date('Y/m/d'); ?>の運勢は
<br>
<?php

//ランダムに抽出された１つの数字を$aとする
$a =one_num($my_number)
?>
<p>選ばれた数字は<?php echo $a;  ?></p>
<?php
switch ($a) {
	case 0:
		echo '凶';
		break;
	case 1:
	case 2:
	case 3:
		echo '小吉';
		break;
	case 4:
	case 5:
	case 6:
		echo '中吉';
		break;
	case 7:
	case 8:
		echo '吉';
		break;
    case 9:
        echo '大吉';
        break;
}
?>



