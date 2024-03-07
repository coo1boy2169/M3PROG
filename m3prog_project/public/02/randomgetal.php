<?php 

$getal = 11214.489;
$afgerond = round($getal);

echo "Als je $getal afrond dan krijg je: $afgerond  <br/>";
// Als je 11214.489 afrond dan krijg je: 11214


$random = 1.14159;                   // up is om hoog 
$radomafrond = (round($random, PHP_ROUND_HALF_DOWN));

echo $radomafrond ;


$rand1= (rand(0,100 ));
$rand2 = (rand(0,100));
$rand3 = (rand(0,100));

echo " <br/> 1 =$rand1 <br/>  2=  $rand2  <br/>  3=  $rand3 <br/> ";


$alles = ($rand1 + $rand2 + $rand3) / 3;

echo "<br/>  $alles";


?>