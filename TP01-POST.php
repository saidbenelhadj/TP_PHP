<?php

  if(isset($_POST["data"]) && !empty($_POST["data"])){
    $prixHT = $_POST["data"];
    $tva = 20/100;
    $prixTTC = $prixHT + ($prixHT*$tva);
    $message ="le prix HT est de $prixHT € avec une TVA de $tva ce qui donne un Prix TTC = $prixTTC €";
    }else{
        $error = "<p> Veuillez saisir un prix! </p>";
    }
    // $prixHT = !empty($_POST["data"] ? $_POST["data"] : null);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>TP01-GET</title>
    <style>
        p{
            color:red;
        }
    </style>
    <div class="container">
        <div class = "row">
            <div class="mb-12">
                <?php
                 if(isset($_POST["data"]) && !empty($_POST["data"])){
                    echo $message;
                 } else{
                    echo $error;
                 }
                ?>
            <form action="" method="POST">
                <label for="" class="form-label">number</label>
                <input type="text" class="form-control" name="data" id="" aria-describedby="helpId" placeholder="Saisir chiffre">
                <input type="submit" value="envoyez" class="btn btn-outline-primary">
                <input type="reset" value="reset" class="btn btn-outline-secondary">
            </form>
            </div>
        </div>
    </div>
</head>
<body>
    
</body>
</html>