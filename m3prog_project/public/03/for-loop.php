<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pokemon</title>
</head>
<body>
    <?php 
        $pokemons = ["dito" , "pika" , "charmender" , "eeve" ,"squirdel"];
        $img = [  " https://assets.pokemon.com/assets/cms2/img/pokedex/detail/132.png",  "https://www.pokemon.com/nl/pokedex/pikachu", "https://www.pokemon.com/nl/pokedex/charmander" , "https://www.pokemon.com/nl/pokedex/eevee" , "https://www.pokemon.com/nl/pokedex/squirtle" ];

        echo $pokemons[0]; 
      
 
    
 ?>
    
    <img src=  "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/132.png" >   </img>
    <?php 
    echo "</br>";
    echo $pokemons[1];
    ?>
    <img src=  "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/025.png" >   </img>
    <?php 
    echo "</br>";
    echo $pokemons[2];
    ?>
    <img src=  "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/004.png" >   </img>
<?php 
    echo "</br>";
    echo $pokemons[3];
    ?>
     <img src=  "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/133.png" >   </img>
<?php 
    echo "</br>";
    echo $pokemons[4];
    ?>
     <img src=  "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/007.png" >   </img>

</body>
</html>