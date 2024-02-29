<?php 

$str ="jij moet nu gaan slapen";
$str = strtoupper($str);
echo $str;


$mystring = "Olgun , Lars , Jay , Daniel , Milan";
$find  = "Olgun";
$pos = strpos($mystring, $find);

if($pos === false){
    echo "die naam zie ik niet in me systeem ";
}
else{
    echo "ja die naam zie ik in mijn systeem";
}


$filename = 'm3prog_project/public/01/functions.php';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>