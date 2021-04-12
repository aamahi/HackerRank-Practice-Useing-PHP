<?php
function  insertionSort( $ar) {

    //get array last value
    $end=end($ar);
    
    //use global m value
    global $m; $c=$m; $t=$m-1;
    $flag=false;
    for($i=0;$i<$c;$i++){
    $t>0 ? $t-- : $t=-1;
    $temp=[];
    for($j=0;$j<$c-1;$j++){
    if($j==0 && $t<0){
    $temp[]= $end;
    }
    $temp[]= $ar[$j];
    if( $j == $t){
    if($ar[$t] > $end){
    $temp[]= $ar[$j];
    }else{
    $temp[]= $end;
    $flag=true;
    }
    }
    }
    for($k=0;$k<count($temp);$k++){
    echo $temp[$k] . ' ';
    }
    if($flag==true){break;}
    echo "\n";
    }
    
    }
    $fp = fopen("php://stdin", "r");
    fscanf($fp, "%d", $m);
    $ar = array();
    $s=fgets($fp);
    $ar = explode(" ", $s);
    for($i=0;$i < count($ar);$ar[$i++]+=0);
    insertionSort($ar);
    