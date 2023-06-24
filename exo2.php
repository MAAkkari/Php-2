<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exercice 2</h1>
    <p> Soit le tableau suivant :
$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays
s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
 </p>
    <h2>résultat</h2>
    <?php
        $capitales=["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
        ksort($capitales);
        echo "<table border='1'><tr><th>Pays</th><th>Capitale</th></tr>";
        function afficherTableHTML(array $capitales){
            foreach ($capitales as $pays=>$capitale){
                echo"<tr>
                <td>".strtoupper($pays)."</td>
                <td>$capitale</td>
                </tr>";
            }
        }
        afficherTableHTML($capitales);
        echo "</table>";
    ?>
</body>
</html>