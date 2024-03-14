<?php


function currentDateTime()
{
    // Toont de huidige datum en tijd met uren, minuten en seconden
    echo date('d-m-Y H:i:s');
}


function add($getal1, $getal2)
{
    $som = $getal1 + $getal2;
    return $som;
    //    add somm
}

function substract()
{
    $cijfer1 = 1;
    $cijfer2 = 2;
    $sometje = $cijfer2 - $cijfer1;
    return $sometje;
    //    minsom
}

function delen()
{

    $delen1 = 16;
    $delen2 = 2;
    $delenSom = $delen1 / $delen2;
    return $delenSom;
    // deel som
}

function keer()
{
    $keer1 = 2;
    $keer2 = 2;
    $keerSom = $keer1 * $keer2;
    return $keerSom;
    //keer som

}


function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs)
{




    $aantal_liters = $afstand_km / $km_per_liter;


    $kosten_euro = $aantal_liters * $liter_prijs;

    return $kosten_euro;
}


function vliegen($AftandKm, $PrijsLiterKerosine, $KiloBagage, $Bussines)
{


    $kosten = ($PrijsLiterKerosine * $AftandKm) / 30;
    $KiloBagage = 5;
    // per kilo 5 euro er bij
    if ($Bussines == true) {
        $kosten *= 1.5;
    }
    // als true voegt i 1,5 toe aan de kosten anders niet 
    return $kosten;
}
