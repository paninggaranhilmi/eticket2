<?php
    $hobi = ["basket","sepeda","nyanyi"];
    var_dump($hobi);

    // Add array
    echo "<br>";
    array_push($hobi,"voli","panah");
    var_dump($hobi);

    // Remove array
    // echo "<br>"
    // unset($hobi[2]);
    // var_dump($hobi);
    echo "<br>";
    array_splice($hobi,2,3);
    var_dump($hobi);
?>