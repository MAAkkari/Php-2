<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 6</h1>
    <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
    de valeurs</p>
    <h2>résultat</h2>
    <?php
    $elements = array("Monsieur","Madame","Mademoiselle");
    //ouverture de la liste deroulante avec <select>
    echo "<select>";
    //remplis la liste deroulante au fur et a mesure avec les elements de l'array en mettant ces elements entre <option>
    function alimenterListeDeroulante($elements){
            foreach($elements as $valeur){
            echo "<option value='sexe'>$valeur</option>";
            }
    }
    alimenterListeDeroulante($elements);
    echo "</select>";
    ?>
</body>
</html>