<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
    précisant le nom des champs associés.</p>
    <h2>résultat</h2>
    <?php
        $nomsInput = array("Nom","Prénom","Ville");
        function afficherInput(array $nomsInput){
            foreach($nomsInput as $valeur){
                echo "<br>".$valeur;
                echo "<br>"."<input type='text'></input>";
            }
        }
        afficherInput($nomsInput);
    ?>
</body>
</html>