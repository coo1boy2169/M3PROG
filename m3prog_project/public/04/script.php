<?php 
    include_once 'functions.php';

        echo keer();

            
        echo  berekenRitKosten(663, 15, 1.90);
        echo '</br>';
        echo  berekenRitKosten(1438 , 20 , 1.46);
        
        echo '</br>';
        echo  berekenRitKosten(1991  , 18.47  , 2.23);

        $afronding = berekenRitKosten(1991  , 18.47  , 2.23);
        $afrond = number_format($afronding);
        echo "</br> ";

        echo $afrond;



        
?>
