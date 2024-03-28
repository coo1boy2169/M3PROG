<?php 



$input = $_GET['dag'];



$voorspelling = [
    'ma' => 20,
    'di' => 15,
    'wo' => 69,
    'do' => 33,
    'vr' => 1,
    'za' => 3,
    'zo' => 44,

];


$voorspellingImg = [
    'ma' => "/assets/images/cloud.png",
    'di' => "/assets/images/cloud.png",
    'wo' => "/assets/images/sun.png",
    'do' => "/assets/images/cloud.png",
    'vr' => "/assets/images/snow.png",
    'za' => "/assets/images/cloud.png",
    'zo' => "/assets/images/rain.png",

];

echo "de voorspelling is  =  ";
echo $voorspelling [$input];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $voorspellingImg [$input] ?>" alt="">
</body>
</html>