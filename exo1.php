<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exercice 1</h1>
    <p> Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
 </p>
    <h2>résultat</h2>
    <?php
        $texte="Mon texte en parametre";
        function convertirMajRouge ($texte){ 
            echo "<span style='color: red'>".strtoupper($texte)."</span>";
        }
        convertirMajRouge ($texte)
    ?>
</body>
</html>