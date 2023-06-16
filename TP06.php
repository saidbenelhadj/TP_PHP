<?php 
/*
    Vous allez ajouter le code HTML de base (!)
    Vous allez ajouter un formulaire de connexion
        - Login
        - mot de passe

    A la soumission du formulaire :
        - Vous allez vérifier si le login est égal à : mail@contat.com
        - Vous allez vérifier si le mot de passe est égal à : pwd123

    Si le login et le mot de passe ne correspondent pas :
        - Vous allez afficher un message d'erreur

    Si le login et le mot de passe correspondent :
        - Vous allez masquer le formulaire de contact
        - Vous allez inclure un fichier qui contient un titre (h1)
        - Vous allez afficher un lien "Déconnexion"
        - Vous allez enregistrer le login en COOKIE ou en SESSION

    Si l'utilisateur clique sur "Déconnexion" :
        - Vous allez afficher le formulaire de connexion
        - Vous allez supprimer la connexion (variable COOKIE ou SESSION)
*/
if(isset($_POST) && !empty($_POST)){
    setcookie("login", $_POST["login"] , time() + 60 * 60);
    setcookie("mdp", $_POST["mdp"] , time() + 60 * 60);
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    include_once("H1.html");
            ?>
<div class="container">
        <div class = "row">
           
            <div class="mb-12">
                <form action="" method="POST">
                    <label for="" class="form-label">Login</label>
                    <?php
                        if(isset($_POST["login"]) && empty($_POST["login"])){
                        echo "<br><small> veuillez remplir le champ login au foramt mail </small>";
                    }
                    ?>
                    <input type="email" class="form-control" name="login" id="" aria-describedby="helpId" placeholder="Saisir mail">
                    <label for="" class="form-label">Mot de passe</label>
                    <?php
                        if(isset($_POST["mdp"]) && empty($_POST["mdp"])){
                        echo "<br><small> veuillez remplir le mot de passe </small>";
                    }
                    ?>
                    <input type="password" class="form-control" name="mdp" id="" aria-describedby="helpId" placeholder="Saisir mot de passe">
                    <input type="submit" value="envoyez" class="btn btn-outline-primary">
                    <input type="reset" value="reset" class="btn btn-outline-secondary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>