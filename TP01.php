<?php

$prixHT = 15;
$tva = 0.2;
$prixTTC = $prixHT + ($prixHT*$tva);

echo "<p>le prix HT est de $prixHT € avec une TVA de $tva ce qui donne un Prix TTC = $prixTTC €</p>";

?>