<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

$positive;
$negative;
$zero;
$number= count($arr);

for($i=0; $i<$number; $i++){
if ($arr[$i]>0) {
$positive++;
}
if ($arr[$i]<0) {
$negative++;
}
if ($arr[$i] == 0) {
$zero++;
}
}

$positive= floatval($positive/$number);
$negative= floatval($negative/$number);
$zero = floatval($zero/$number);

print($positive."\n");
print($negative."\n");
print($zero);
?>