<?php
 echo "<br>";
 for ($i = 0; $i <= 9; $i++) {
     if ($i == 5) {
         array_splice($array, $i, 1);
     } elseif ($i == 7) {
         array_splice($array, $i, 2);
     }
 }
 
 var_dump($array);
?>