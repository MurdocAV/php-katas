<?php 
function iterateArr ($arr) {
  for ($x = 0; $x <= count($arr); $x++) {
    echo "$arr[$x] <br>";
 }
}
// $cars=array("Volvo","BMW","Toyota");
// iterateArr($cars);

// Iterate and concatenate 
function iterateArr ($arr) {
  $output = '';
  for ($x = 0; $x <= count($arr); $x++) {
    $output = $output.$arr[$x];
 }
  return $output;
}

?>