<?php
    //$handle = fopen ("input_leftR.txt","r");
    $handle = fopen ("php://stdin","r");
    fscanf($handle,"%d %d",$n,$k); //n and k values are available from here
    $a_temp = fgets($handle);
    $a = explode(" ",$a_temp);
    array_walk($a,'intval');

    //My Code from below
    $i; $j; $temp;
    if($n<0 || $n>1000000 || $k<0|| $k>1000000 || count($a) <=0)
        exit;
    for($i=0; $i<$k%$n; $i++){
    //for($i=0; $i<$k; $i++){
        for($j=0; $j<$n-1; $j++){
            $temp = $a[$j];
            $a[$j] = $a[$j+1];
            $a[$j+1] = $temp;
        }
    }

    for($i=0;$i<$n;$i++){
    printf("%d", $a[$i]);

    if($i<$n-1)
        printf(" ");
    }
?>