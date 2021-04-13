<?php

// Complete the catAndMouse function below.
function catAndMouse($x, $y, $z) {
    if (abs($x - $z) < abs($y - $z))
        return "Cat A";
    elseif (abs($x - $z) > abs($y - $z))
        return 'Cat B';
    else
        return 'Mouse C';
}

$fptr = fopen("OUTPUT_PATH.txt", "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $xyz_temp);
    $xyz = explode(' ', $xyz_temp);

    $x = intval($xyz[0]);

    $y = intval($xyz[1]);

    $z = intval($xyz[2]);

    $result = catAndMouse($x, $y, $z);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
