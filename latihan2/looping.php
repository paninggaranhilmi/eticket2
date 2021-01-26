<?php
    for ($i=2; $i <= 100; $i++) {
        $sisaBagi = $i % 5;
        if($sisaBagi != 0 && $sisaBagi !=2 && $sisaBagi != 4){
            echo $i;
            echo "<br>";
        }
    }
?>