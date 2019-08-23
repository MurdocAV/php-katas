<?php
/*

6 kyu
Replace With Alphabet Position

Welcome.

In this kata you are required to, given a string, replace every letter with its position in the alphabet.

If anything in the text isn't a letter, ignore it and don't return it.

"a" = 1, "b" = 2, etc.

Example
alphabet_position('The sunset sets at twelve o\' clock.');
Should return "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11" (as a string)

*/



function splitString($string) {
  $returnArr = (str_split($string));
  return $returnArr;
}

function alphabetPos($alpha) {
  $num = ord($alpha);
  if ($num < 91 && $num > 64) {
      return ($num - 64);
    } else if ($num < 123 && $num > 96){
      return ($num - 96);
    } else {
      return '';
    }
}

function iterateArr ($arr) {
  $output = '';
  for ($x = 0; $x <= count($arr); $x++) {
    if (alphabetPos($arr[$x]) > 0 && alphabetPos($arr[$x]) < 27) {
      $output = $output . alphabetPos($arr[$x]);
      $output = $output . " ";
    }
 }
  return $output;
}

function alphabet_position(string $s): string {
  $output = splitString($s);
  $output = iterateArr($output);
  $output = substr($output, 0, -1);
  return $output;
}
?>