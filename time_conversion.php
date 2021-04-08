<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
    if (preg_match('/(.+?)(\w{2})$/',$s, $matches)){
      $date = explode(":", $matches[1]);
      if ($matches[2] == 'PM' && $date[0] < 12){
        $date[0]+=12;
      }
      if ($matches[2] == 'AM' && $date[0] == 12){
        $date[0]=0;
      }
      $date[0] = sprintf("%02d",$date[0]);
      echo implode(':', $date);
      return implode(':', $date);
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$__fp = fopen("php://stdin", "r");
fscanf($__fp, "%[^\n]", $s);
$result = timeConversion($s);
fwrite($fptr, $result . "\n");
fclose($__fp);
fclose($fptr);