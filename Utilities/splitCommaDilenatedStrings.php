<?php 
/* explodes string into all chars and retunrns it in an array */

function splitString($string) {
  $returnArr = (str_split($string));
  // print_r($returnArr);
  // echo $returnArr[0];
  return $returnArr;
}

?>