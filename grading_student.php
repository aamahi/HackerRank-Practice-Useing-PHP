<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

for($a0 = 0; $a0 < $n; $a0++){
fscanf($handle,"%d",$grade);

$next = round($grade/5) * 5;
$condition = $next - $grade < 3;

if ( $next > $grade && is_float($grade / 5) && $condition && $grade > 37) {
if (!$condition) {
echo $grade."\n";
}else{
echo $next."\n";
}
}else{
echo $grade."\n";
}
}

?>
