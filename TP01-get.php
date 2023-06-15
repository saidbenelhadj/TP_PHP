<?php

  if(isset($_GET["data"]) && !empty($_GET["data"])){
    $prixHT = $_GET["data"];
    $tva = 20/100;
    $prixTTC = $prixHT + ($prixHT*$tva);
    echo "<p> le prix HT est de $prixHT € avec une TVA de $tva ce qui donne un Prix TTC = $prixTTC € </p>";
    }else{
    echo "<h3> Veuillez saisr un prix! </h3>";
    }
$prixHT = 15;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>TP01-GET</title>
    <div class="container">
        <div class = "row">
            <div class="mb-12">
            <form action="" method="get">
                <label for="" class="form-label">number</label>
                <input type="text" class="form-control" name="data" id="" aria-describedby="helpId" placeholder="Saisir chiffre">
                <input type="submit" value="envoyez">
            </form>
            </div>
        </div>
    </div>
</head>
<body>
    
</body>
</html>