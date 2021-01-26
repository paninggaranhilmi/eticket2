<?php
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    if($nilai >= 85){
        $grade = "A";
        echo "$nama berhasil LULUS dengan grade $grade";
    }elseif($nilai >= 70){
        $grade = "b";
        echo "$nama Berhasil Lulus dengan grade $grade";
    }elseif($nilai >=60){
        $grade = "c";
        echo "$nama Berhasil Lulus dengan grade $grade";
    }else{
        echo "$nama Anda TDK LULUS";
    }
?>