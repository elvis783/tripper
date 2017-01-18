<?php

function bdConnect(){
try {
      $dbh = new PDO("mysql:host=chefluistnelvis.mysql.db;dbname=chefluistnelvis","chefluistnelvis","Lastapas78");
  } catch (Exception $e) {
        die ('Connexion échouée : ' . $e->getMessage());
    }
    return $dbh;
}

// $mail=$_POST["mail"];
// $pays=$_POST["pays"];
// $sexe=$_POST["sexe"];
// $nom=$_POST["nom"];
// $prenom=$_POST["prenom"];
// $telportable=$_POST["numero_port"];
// $tefixe=$_POST["numero_fixe"];
// $adresse=$_POST["adresse"];
// $ville=$_POST["ville"];
// $datedenaissance=$_POST["anniversaire"];
// $paysdenaissance=$_POST["pays_de_naissance"];
// $dpdenaissance=$_POST["departement_naissance"];
// $comdenaissance=$_POST["com_naissance"];
// $nationalite=$_POST["nationalite"];
// $inscription_newsletter=$_POST["newsletter"];   
// $inscription_mentions=$_POST["mentions"];
// $mailpaypal=$_POST["email_paypal"];


// echo ('Base de donnée OK');
// echo $pays;
// echo $sexe;



?>