<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<body>
    <h1>Exercice 15</h1>
    <p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.</p>
    <h2>résultat</h2>
    <?php 
    $email="elan@elan-formation.fr"; // email a verifier
    if ( filter_var($email, FILTER_VALIDATE_EMAIL)){ // compare une string au filtre d'email si ca coincide ecrit qu'il est valide sinon ecrit qu'il est invalide
        echo "L'adresse $email est une adresse e-mail valide";
    }
    else {echo"L'addresse $email est une adresse e-mail invalide";}
?>
</body>
</html>