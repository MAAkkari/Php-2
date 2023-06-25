<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 9</h1>
    <p>SCréer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de
    valeurs en paramètre ("Monsieur","Madame","Mademoiselle")</p>
    <h2>résultat</h2>
    <?php
     $sexe=["Monsieur","Madame","Mademoiselle"];
     function afficherRadio($tab){$x=0;
         foreach($tab as $sexe){
         echo  '<input type="radio" name="radio'.$x.'value='.$sexe.'">
             <label for="radio'.$x.'">'.$sexe.'</label>'.'<br>';
            $x+=1;
         }
     }
     afficherRadio($sexe);
 ?>
</body>
</html>