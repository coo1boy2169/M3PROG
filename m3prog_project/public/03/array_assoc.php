<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $komendWeer = ["maandag" => 10 , "disndag" => 6 , "woendag" => 7 , "donderdag" => 4 , "vrijdag" => 11 , "zaterdag" => 5 , "zondag" => 10]; 
        // echo print_r($komendWeer)
    ?>
    
    <div class="sun"> </div>
    <div class="cloud"> </div> 
    <div class="cloud x"> </div> 

 <table class="dagen">
    <tr> 
        <td> dag </td>
        <td> grade</td>
    </tr>
    <?php
        foreach($komendWeer as $key => $value){

            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
    ?>
    </table>

    
</body>
</html>