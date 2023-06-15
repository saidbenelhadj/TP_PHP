<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /* commentaires 
        sur plusieurs lignes
    */

    echo "<h1>HELLO EVERYBODY</h1>";
    echo '<h2>How are you?</h2>';
    echo ('<h2>How are you?</h2>');
    // ecriture de variables 
    $var = "hello world ";
    echo $var . "<br>";

    // camelcase 
    $maVariable = " hello my wordlist ";
    echo $maVariable. "<br>";
    echo gettype($maVariable);

    //snakeCase
    $ma_variable = " hello my snake_case ";
    echo $ma_variable. "<br>";
    echo gettype($ma_variable);

    // concatenation de variables
    $prenom = "Saïd";
    echo "<h3>bonjour " .$prenom." </h3>";

    // calculate
    $numA = 15 ;
    $numB = 25 ;
    $result = $numA + $numB;
    echo "le resultat de $numA + $numB est ".$result. "<br>";

    // tableau indexe   

    $tableau[0] = 12;
    $tableau[1] = 13;
    $tableau[2] = 14;
    $tableau[3] = 16;

    $monTableau = array(12,13,14,16);

    foreach ($monTableau as $key => $value) {
       echo "<h3>$value</h3>";
       
    }
 // tableau associatifs
 $tableauNote["Jean"] = 12;
 $tableauNote["Julien"] = 13;
 $tableauNote["sylvain"] = 14;
 $tableauNote["seb"] = 16;

 $monTableau = array(
    "Jean" => 12,
    "Julien" =>13,
    "sylvain" =>14,
    "seb" => 16);

 // échanger la valeur de deux variables

 $coca = "Coca";
 $grenadine = "Grenadine";

 echo "<p>Le verre de coca contient  $coca et le verre de grenadine contient  $grenadine </p>";

 // Echange des valeurs 

 $coca = "Coca";
 $grenadine = "Grenadine";
 
 $echange = $coca;
 $coca = $grenadine;
 $grenadine = $echange;
 echo "<p>Maintenat Le verre de coca contient  $coca et le verre de grenadine contient  $grenadine </p>";

 // deuxieme technique échange par destructuration

[ $coca, $grenadine] = [$grenadine, $coca];


 echo "<p>Maintenat Le verre de coca contient  $coca et le verre de grenadine contient  $grenadine </p>";

 // technique échange par destructuration d'un tableau indexé

 $note = array(12,13,14,16);

    
[$jean, $julien, $sylvain, $seb] = $note;
echo $jean. "<br>";

// technique échange par destructuration d'un tableau associatif

$note = array(
    "Jean" => 12,
    "Julien" =>13,
    "Sylvain" =>14,
    "Seb" => 16);
    
["Jean" => $jean, "Julien" =>$julien, "Sylvain" => $sylvain, "Seb" => $seb] = $note;
echo $julien;

// Opérateur mathématique

echo "<br> <br>";
echo "<h3>Maths</h3>";

$calculator = 5 + 3 * (25-6) / 2;

echo $calculator;

// Opérateur logique

echo "<br> <br>";
echo "<h3>Opérateur Logique</h3>";

$num1 = 2;
$numA = 5;

// on teste par les operateurs == ou  (=== qui teste le type et la valeur)

if ($num1 == $numA) {
    echo "<h3>true</h3>";
}
else{
    echo "<h3>false</h3>";
}


// les switch servent a tester une valeur sur une variable

$numJour = 4;

    switch ($numJour) {
        case 1:
            echo "Nous sommes Lundi";
            break;
        case 2:
            echo 'Nous sommes Mardi';
            break;
        case 3:
            echo 'Nous sommes Mercredi';
            break;         
        case 4:
            echo 'Nous sommes Jeudi';
            break;
        case 5:
            echo 'Nous sommes Vendredi';
            break;
        case 6:
            echo 'Nous sommes Samedi';
            break;
        case 7:
            echo 'Nous sommes Dimanche';
            break;
        default:
           echo "Ce jour n'exite pas";
            break;
    }

    // Méthode GET et POST 
        if(isset($_GET["data"]) && !empty($_GET["data"])){
            $data = $_GET["data"];
            echo "<h3>". $data. "</h3>";
        }else{
            echo "<h3>Veuillez saisr une donnée!</h3>";
        }
    ?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="get">
    <label>Entrez un texte :</label>
    <div class="mb-12">
      <label for="" class="form-label">Data</label>
      <input type="text" class="form-control" name="data" id="" aria-describedby="helpId" placeholder="saisir texte">
      <input type="submit" value="envoyez">
    </div>

        </form>
    </body>
    </html>
</body>
</html>