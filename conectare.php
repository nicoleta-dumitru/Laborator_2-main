<?php
    $nume = $_POST['nume'];
    $parola = $_POST['parola'];
    $contor = 0;

    if($nume == "Nicoleta" && $parola == "Parola"){
        echo " Welcome, " . $nume;
    }else{
        echo "Parola gresita, mai incearca!";
        $contor++;
    }


?>