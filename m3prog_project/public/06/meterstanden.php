<?php
include_once("../../source/database.php");

$connection = database_connect();

$result = $connection->query("select * from meterstanden");

// print_r($result->fetch_all());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>meterstand</title>
</head>
<body>
    <?php 
        foreach($result as $rij)
    {
        ?>
        
         <section>
            <h1> meterstand </h1>
            <p> <label>Stand: </label><?=$rij["stand"]?> Kwh</p>
            <p> <label>Soort: </label><?=$rij["soort"]?> Kwh</p>

         </section>
         
        <?php

        
    }
   ?>
    
</body>
</html>