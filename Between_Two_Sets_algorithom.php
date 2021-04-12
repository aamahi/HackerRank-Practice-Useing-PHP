<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$m);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');
$b_temp = fgets($handle);
$b = explode(" ",$b_temp);
array_walk($b,'intval');

$lower_bound = $a[$n-1];
$upper_bound = $b[0];

$count_x = 0;

for($i = 1; $i <= $upper_bound; $i++){
$sum_mod = 0;

for($j = 0; $j < $n; $j++){
if ($i%$a[$j]!=0) {
$sum_mod=1;
}
}

for($k = 0; $k < $m; $k++){
if ($b[$k] % $i) {
$sum_mod =1;
}
}

if($sum_mod == 0){
$count_x++;
}
}

echo $count_x;

?>
