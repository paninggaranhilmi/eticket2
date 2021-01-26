<?php
    $search = strtolower($_POST["nama"]);

    if($search == "nasi goreng"){
        $desk = "Nasi goreng adalah nasi yg digoreng";
    }elseif($search == "mie ayam"){
        $desk = "Mie ayam adalah mie dikasih ayam";
    }elseif($search == "rendang"){
        $desk = "Rendang adalah daging dikasih micin";
    }else{
        $desk = "Hasil Tidak Ditemukan";
    }

    echo "$desk";
?>