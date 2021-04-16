<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$unsorted = array();
for($unsorted_i = 0; $unsorted_i < $n; $unsorted_i++){
fscanf($handle,"%s",$unsorted[]);
}

//make sure user define sorting comparison to sort big string
function comp($a, $b){
if( strlen($a) == strlen($b)){
return $a > $b;
}else{
return strlen($a) > strlen($b);
}
}
usort($unsorted, "comp");

foreach ($unsorted as $v) {
echo $v,"\n";
}

