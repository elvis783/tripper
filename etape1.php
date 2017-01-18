<?php 

include('connexion.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$values = new stdClass();
$values->mail=$_POST["mail"];
$values->pays=$_POST["pays"];
$values->sexe=$_POST["sexe"];
$values->nom=$_POST["nom"];
$values->prenom=$_POST["prenom"];
$values->telportable=$_POST["telportable"];
$values->telfixe=$_POST["telfixe"];
$values->adresse=$_POST["adresse"];
$values->ville=$_POST["ville"];
$values->datedenaissance=$_POST["datedenaissance"];
$values->paysdenaissance=$_POST["paysdenaissance"];
$values->dpdenaissance=$_POST["dpdenaissance"];
$values->comdenaissance=$_POST["comdenaissance"];
$values->nationalite=$_POST["nationalite"];
$values->mailpaypal=$_POST["mailpaypal"];

if (isset($_POST['Ok1'])){
    $values->inscription_newsletter='Oui'; 
}else{
    $values->inscription_newsletter='Non'; 
}

if (isset($_POST['Ok2'])){
    $values->inscription_mentions='Oui';
}else{
    $values->inscription_mentions='Non';
}

function insert($object){
    // var_dump($object);
    $req = bdConnect()->prepare('INSERT INTO account (mail,pays,sexe,nom,prenom,telportable,telfixe,adresse,ville,datedenaissance,paysdenaissance,dpdenaissance,comdenaissance,nationalite,inscription_newsletter,inscription_mentions,mailpaypal) 
        VALUES(:mail, :pays, :sexe, :nom, :prenom, :telportable, :telfixe, :adresse, :ville, :datedenaissance, :paysdenaissance, :dpdenaissance, :comdenaissance, :nationalite, :inscription_newsletter, :inscription_mentions, :mailpaypal)');
    $req->execute(array(
        'mail' => $object->mail,
        'pays' => $object->pays,
        'sexe' => $object->sexe,
        'nom' => $object->nom,
        'prenom' => $object->prenom,
        'telportable' => $object->telportable,
        'telfixe' => $object->telfixe,
        'adresse' => $object->adresse,
        'ville' => $object->ville,
        'datedenaissance' => $object->datedenaissance,
        'paysdenaissance' => $object->paysdenaissance,
        'dpdenaissance' => $object->dpdenaissance,
        'comdenaissance' => $object->comdenaissance,
        'nationalite' => $object->nationalite,
        'inscription_newsletter' => $object->inscription_newsletter,
        'inscription_mentions' => $object->inscription_mentions,
        'mailpaypal' => $object->mailpaypal,
        ));
}

$msg = '';
insert($values);

Echo ('Merci vous avez bien été inscrit en tant que Savior !')


// mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
// mysql_close();



// function insert($mail,$pays,$sexe,$nom,$prenom,$numero_port,$numero_fixe,$adresse,$ville,$anniversaire,$pays_de_naissance,$departement_naissance,$com_naissance,$nationalite,$newsletter,$mentions,$email_paypal)
// {
//     $connexion = bdConnect();
//     $insert = $connexion->prepare("INSERT INTO account(mail,pays,sexe,nom,prenom,telportable,telfixe,
//         adresse,ville,datedenaissance,paysdenaissance,dpdenaissance,comdenaissance,nationalite,inscription_newsletter,
//         inscription_mentions,mailpaypal) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
//     $insert->execute(array($mail,$pays,$sexe,$nom,$prenom,$numero_port,
//     	$numero_fixe,$adresse,$ville,$anniversaire,$pays_de_naissance,
//     	$departement_naissance,$com_naissance,$nationalite,$newsletter,
//     	$mentions,$email_paypal));
    
//     $select = $connexion->prepare("select * FROM account WHERE mail = ?");

//     $select->execute(array($mail,$pays,$sexe,$nom,$prenom,$numero_port,
//     	$numero_fixe,$adresse,$ville,$anniversaire,$pays_de_naissance,
//     	$departement_naissance,$com_naissance,$nationalite,$newsletter,
//     	$mentions,$email_paypal));

//     $data = $select->fetch();
//     return $data;
// }

// $msg = '';

// if(isset($_POST["mail"])){
//   if(filter_var ( $_POST["mail"] , FILTER_VALIDATE_EMAIL)){
//     $retour = insert($_POST["mail"],$_POST["pays"],$_POST["sexe"],$_POST["nom"],$_POST["prenom"],$_POST["numero_port"],
//     	$_POST["numero_fixe"],$_POST["adresse"],$_POST["ville"],$_POST["anniversaire"],$_POST["pays_de_naissance"]
//     	,$_POST["departement_naissance"],$_POST["com_naissance"],$_POST["nationalite"],$_POST["newsletter"]
//     	,$_POST["mentions"],$_POST["email_paypal"]);
//     if($retour != false){
//       $msg = "<h3>"."Merci ! Inscription réussie". "</h3>";
//       echo $msg;
      
//     }
//     else{
//       $msg = "<h3>"."Oup's un petit problème.". "</h3>";
//     echo $msg;
//     }
//   }
// }


?>

