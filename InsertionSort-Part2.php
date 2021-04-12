<?php
function  insertionSort( $ar) {

    //use global $m
    global $m;
    for($i=0;$i<$m-1;$i++){
    
    //trics only here, very simple
    $s=array_slice($ar,0,$i+2);
    sort($s);
    for($j=0;$j<$m;$j++){
    echo (isset($s[$j]))? $s[$j].' ' : $ar[$j].' ';
    }
    echo "\n";
    }
    }
    $fp = fopen("php://stdin", "r");
    
    
    fscanf($fp, "%d", $m);
    $temp = fgets($fp);
    $arr = explode(' ',$temp);
    
    for($i = 0; $i < $m; $i++)
    {
    $arr[$i] = (int) $arr[$i];
    }
    
    insertionSort( $arr);
?>    