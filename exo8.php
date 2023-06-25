<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 8</h1>
    <p>Soit l'URL suivante : http://my.mobirise.com/data/userpic/764.jpg
    Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.</p>
    <h2>résultat</h2>
    <?php
      $image="http://my.mobirise.com/data/userpic/764.jpg";
      $x=6;
      function repeterImage ($url,int $x){
        for ($w=0;$w<$x;$w++){
            echo "<img src='$url'>";
        }}
      repeterImage ($image,$x);
    ?>
</body>
</html>