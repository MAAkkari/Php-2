<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exercice 4</h1>
    <p> A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s'ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l'URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
 </p>
    <h2>résultat</h2>
    <?php
        $capitales=["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];
        asort($capitales);
        echo "<table border='1'><tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr>";
        function afficherTableHTML(array $capitales){
            foreach ($capitales as $pays=>$capitale){
                echo"<tr>
                <td>".strtoupper($pays)."</td>
                <td>$capitale</td>
                <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</a></td>
                </tr>";
            }
        }
        afficherTableHTML($capitales);
        echo "</table>";
    ?>
</body>
</html>