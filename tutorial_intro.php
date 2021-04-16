<?php
$_fp = fopen("php://stdin", "r");
fscanf($_fp,"%d",$v);
$n=fgets($_fp);
$a=fgets($_fp);
$arr = explode(" ",$a);
//just use array search built in function
echo array_search($v, $arr);
