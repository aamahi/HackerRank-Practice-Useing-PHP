<?php

// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $max = $scores[0]; $min = $scores[0];
    $max_count=0;
    $min_count=0;
    foreach($scores as $value){
        if ($value>$max){
            $max=$value; $max_count++;
        }
        if ($value<$min){
            $min=$value; $min_count++;
        }
    }
    return array($max_count, $min_count);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);