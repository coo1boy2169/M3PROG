<?php 

    $autos = ["merri" , "audi" , "bmw" , "lotus" , "bugati"]; 
    $autos[] = "lambo ";

    echo count($autos);
    echo "<br>";
    var_dump($autos);
    echo "<br>";
    echo  $autos[3];

    echo implode( ">>" , $autos);

    
?>