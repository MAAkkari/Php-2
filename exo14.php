<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<body>
    <h1>Exercice 14</h1>
    <p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
suivantes :
Peugeot 408 : $v1 = new Voiture("Peugeot","408");
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
echo $v1->getInfos()."br/>";
echo $ve1->getInfos()."br/>";
.</p>
    <h2>résultat</h2>
    <?php  
    Class Voiture{
        protected string $_marque;
        protected string $_modele;
        //contructeur de la classe voiture 
        public function __construct(string $marque,string $modele){
            $this -> _marque=$marque;
            $this -> _modele=$modele;
        }
        public function getMarque(){
            return $this->_marque;
        }
        public function setMarque(string $marque){
            $this->_marque=$marque;
        }
        public function getModele(){
            return $this->_modele;
        } 
        public function setModele(string $modele){
            $this->_modele=$modele;
        }
        // affiche les informations du var de classe voiture
        public function getInfos(){echo "<br>"."<br>"."Info vehicule"."<br>"."****************************"."<br>"."Nom et modèle du vehicule : $this->_marque $this->_modele";
        }
    }
    Class VoitureElec extends Voiture { //creation de la sous class voitureElec
        private int $_autonomie;
        //heritage du constructeur de la class parent et ajout du parametre autonomie
        public function __construct(string $marque, string $modele, int $autonomie) {
            parent::__construct($marque, $modele);
            $this->_autonomie = $autonomie;
        }
        public function getAutonomie(){
            return $this->_autonomie;
        }
        public function setAutonomie(int $autonomie){
            $this->_autonomie=$autonomie;
        }
        //affiche les informations de la var de classe VoitureElec
        public function getInfos(){parent::getInfos();
        echo"<br>"."l'autonimie est de $this->_autonomie";
        }
    }
    $v1 = new Voiture("Peugeot","408");
    $ve1 = new VoitureElec("BMW","I3",100);
    echo $v1->getInfos()."<br/>";
    echo $ve1->getInfos()."<br/>";
?>
</body>
</html>