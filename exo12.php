<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<body>
    <h1>Exercice 12</h1>
    <p>La fonction var_dump($variable) permet d'afficher les informations d'une variable.
    Soit le tableau suivant : $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));.</p>
    <h2>résultat</h2>
    <?php  
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
    //foreach qui var_dump chaque element du tableau
    foreach($tableauValeurs as $valeur){
        var_dump($valeur);
        echo "<br>";
    }

?>
</body>
</html>