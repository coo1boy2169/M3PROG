<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $namen = ["jhon cena" , "bob ross " , "ROndaldo " , "messie" ,"vex"];
    $namen[] = "jack black";
    echo count($namen);
    echo "<br>";
    echo print_r($namen);
    echo "<br> ";
    echo array_pop($namen);
    

    $name_tekst= implode("<br>" ,$namen);
    echo $name_tekst;

    ?> 
    
</body>
</html>