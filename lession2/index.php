<?php
const BASE_URL = "ASDJASHDKHASDKASHD";
define('URL', 'https://gokisoft.com');

echo BASE_URL;
echo URL;

function ten_ham($param1, $param2) {

}

function plus($x, $y) {
	$s = $x+$y;
	return $s;
}

$tong = plus(2, 3);
echo $tong;

$s1 = "Hello";
$s2 = $s1." World";
echo $s2;

$t = "12";
$x = "6";
$k = $t.$x;
echo $k.'<br/>';//126
$k = $t+$x;
echo $k.'<br/>';//18
$t = 12;
$x = 6;
$k = $t.$x;
echo $k.'<br/>';
echo abs(-15);
echo '<br/>';
echo max(1, 5, 2, 6, 3, 9);
echo '<br/>';
echo date('Y-m-d H:i:s');