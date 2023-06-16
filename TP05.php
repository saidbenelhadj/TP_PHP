<?php
/*
    Vous allez ajouter le code HTML de base pour une page web (!)
    Vous allez ajouter un titre H1 (Veuillez renseigner les informations)
    Vous allez y ajouter un formulaire qui vous demande :
        - Votre prénom
        - Votre nom
        - Votre age

    Lorsque l'utilisateur renseigne les informations et valide le formulaire
    vous allez envoyer les données en méthode POST

    Une fois que les données ont été envoyées,
    vous allez vérifier si elles ne sont pas vide
    si les données sont vide, vous allez afficher un message d'erreur
    si les données sont remplies, vous allez les stocker sur les cookies

    Une fois les données stockées sur les cookies
    Vous allez afficher :
        "Bonjour PRENOM NOM, tu as AGE ans"

    Exemple :
        "Bonjour Jean-Louis ERRANTE, tu as 36 ans"

    Informations importantes :
        - Le message d'erreur doit s'afficher sous le champ qui pose problème
        - Le message "Bonjour..." doit s'afficher à la place du H1 de base
*/
setcookie("prenom", $_POST["prenom"] , time() + 60 * 60);
setcookie("nom", $_POST["nom"] , time() + 60 * 60);
setcookie("age", $_POST["age"] , time() + 60 * 60);
$data = $_COOKIE;
if(isset($_POST["data"]) && !empty($_POST["data"])){
    
    $message = "Bonjour " .$data["prenom"]. " " .$data["nom"]. "tu as " .$data["age"] ."ans";
    }else{
        $error = "<p> Veuillez saisir vos informations! </p>";
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire avec cookie</title>
    <style>
        p , small{
            color:red;
        }
    </style>
</head>
<body>
    <?php
            if(!empty($_COOKIE? $_COOKIE : null)){
            echo "<h1>Bonjour " .$_COOKIE["prenom"]. " " .$_COOKIE["nom"]. " tu as " .$_COOKIE["age"] ." ans" ;
            }else{
                echo "<h1>Formulaire avec cookie</h1>" ;
            }
            ?>
      
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
                    <label for="" class="form-label">Prénom</label>
                    <?php
                        if(isset($_POST["prenom"]) && empty($_POST["prenom"])){
                        echo "<small> veuillez remplir le Prenom </small>";
                    }
                    ?>
                    <input type="text" class="form-control" name="prenom" id="" aria-describedby="helpId" placeholder="Saisir chiffre">
                    <label for="" class="form-label">Nom</label>
                    <?php
                        if(isset($_POST["nom"]) && empty($_POST["nom"])){
                        echo "<small> veuillez remplir le Nom </small>";
                    }
                    ?>
                    <input type="text" class="form-control" name="nom" id="" aria-describedby="helpId" placeholder="Saisir chiffre">
                    <label for="" class="form-label">Age</label>
                    <?php
                        if(isset($_POST["age"]) && empty($_POST["age"])){
                        echo "<small> veuillez remplir votre Age </small>";
                    }
                    ?>
                    <input type="text" class="form-control" name="age" id="" aria-describedby="helpId" placeholder="Saisir chiffre">
                    <input type="submit" value="envoyez" class="btn btn-outline-primary">
                    <input type="reset" value="reset" class="btn btn-outline-secondary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>