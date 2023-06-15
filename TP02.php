<?php
$seuil = 16;
$num = 15;


if($num < $seuil) {
    $resultat = $num * 2;
    echo "La valeur de notre resultat $resultat est bien inférieur a notre seuil $seuil";
}
else{
    echo $num;
}

?>