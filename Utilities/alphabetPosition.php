<?php
/* Returns position in alphabet 1-26 */
// Unicode for alphabet's: 
// Upper Case | 'A' start at 65
// Lower Case | 'a'start at 97

function alphabetPos($alpha) {
  $num = ord($alpha);
  if ($num < 91) {
      return ($num - 64);
    } else {
      return ($num - 96);
    }
}

echo alphabetPos('c');
?>