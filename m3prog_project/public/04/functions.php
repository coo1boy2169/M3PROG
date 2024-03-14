<?php 

        
function currentDateTime(){
    // Toont de huidige datum en tijd met uren, minuten en seconden
    echo date('d-m-Y H:i:s');
}

    function add($getal1, $getal2){
        $som = $getal1 + $getal2;
        return $som;
    }

    function substract(){
        $cijfer1 = 1;
        $cijfer2 = 2;
        $sometje = $cijfer2 - $cijfer1;
        return $sometje;
    }
    
    function delen(){

        $delen1= 16;
        $delen2 = 2;
        $delenSom = $delen1 / $delen2;
        return $delenSom;
    }

    function keer(){
        $keer1 = 2;
        $keer2 = 2;
        $keerSom =$keer1 * $keer2;
        return $keerSom;

    }
    




?>