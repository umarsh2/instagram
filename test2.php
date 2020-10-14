<?php
function fun($v1,$v2){
	return $v1 . "." . $v2;
}
$arr = array("umar","ali","faisal");
$arr = array_reduce($arr, "fun");
print_r($arr);
