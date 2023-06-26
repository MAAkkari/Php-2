<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 7</h1>
    <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non.</p>
    <h2>résultat</h2>
    <?php
        $elements=["choix 1"=>false,"choix 2"=>false,"choix 3"=>true];
        //nomme les cases a cocher avec les elemements de l'array en les mettant dans des <input type =checkbox >
        function genererCheckbox($elements ){
            foreach($elements  as $choix=>$etat){
                $checked = ($etat==true) ? "checked" : "";
            echo  '<input type="checkbox" name="checkbox1" value='.$choix.' ' . $checked .  '>
                <label for="checkbox1">'.$choix.'</label>'.'<br>';
            }
        }
        genererCheckbox($elements);
    ?>
</body>
</html>