<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<body>
    <h1>Exercice 11</h1>
    <p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.
.</p>
    <h2>résultat</h2>
    <?php  
    //
    $date=date_create("2018-02-23");
    //met la date en francais , Full veux dire que le nom du jour et du mois apprait en complet , None veux dire que l'heure ne s'affiche pas 
    $formatter=new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    //met $date dans le format crée juste au dessus
    $date = $formatter->format($date);
    echo "$date";
?>
</body>
</html>