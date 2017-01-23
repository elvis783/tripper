<?php
header("Content-Type: text/html");
require_once "connexion.php";

function insert($email,$nom,$prenom){
  
    $connexion = bdConnect();
    $insert = $connexion->prepare("INSERT INTO newsletter(email,nom,prenom) VALUES(?,?,?)");
    $insert->execute(array($email,$nom,$prenom));
    $select = $connexion->prepare("select * FROM newsletter WHERE email = ?");
    $select->execute(array($email,$nom,$prenom));
    $data = $select->fetch();

    return $data;
}
$msg = '';

echo $nom;
echo $prenom;
echo $mail; 


if(isset($_POST["email"])){
  if(filter_var ( $_POST["email"] , FILTER_VALIDATE_EMAIL)){
    $retour = insert($_POST["email"],$_POST["nom"],$_POST["prenom"]);
    if($retour != false){
      $msg = "<h3>"."Merci ! Inscription réussie". "</h3>";
      
    }
    else{
      $msg = "<h3>"."Oup's un petit problème.". "</h3>";
    }
  }
}
$headers = "From: \"Tripper\"<mytrippersolution@gmail.com>\n";
$headers .= "Reply-To: mytrippersolution@gmail.com\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
$headers .= "Content-Type: image/png";
$sujet = 'Merci de votre intérêt pour Tripper!';
$message = "
  <!DOCTYPE html>
  <html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
  </head>
  <p style=\"text-align:center;\"><img  src=\"http://www.tripper-app.com/img/petit-logo.png\"></p>";

$message .= "
  <h1>Merci de votre intérêt pour Tripper</h1>
  <p style=\"text-align:center;\"><img src=\"http://www.tripper-app.com/img/emailing.png\" width=\"100%\" </p>
  <p align=\"justify\">Rassurez-vous, cela ne durera que quelques semaines. Nous vous invitons tous les jours de plus en plus d’utilisateurs afin de vous assurez la meilleure expérience tout au long du processus.</p>
  <p align=\"justify\"> Nous sommes très reconnaissant pour votre patience et nous vous recontacterons dès que possible.</p>
  <p align=\"justify\"> En attendant vous pouvez également nous suivre sur <a href=\"https://www.facebook.com/trippersolution/?fref=ts\" target=\"_blank\">Facebook</a>  , ou redécouvrir notre concept sur notre <a href=\"http://tripper-app.com/?utm_source=Email%20Pre-lancement&utm_content=Emailing\" target=\"_blank\">page de lancement.</a></p>

  <p>A très bientôt !</p>
  <h3>L’équipe Tripper</h3>
  <hr>
  </body></html>";
$destinataire = $_REQUEST['email'];
if(mail($destinataire,$sujet,$message,$headers))
{
  "L'email a bien été envoyé.";
}
else
{
  "Une erreur c'est produite lors de l'envois de l'email.";
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Vous cherchez à vous procurer de la liquidité. Quel qu’en soit la raison, pas de banque à proximité, perte de ses moyens de paiement, Tripper vous sauve la mise avec ses Saviors.">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Tripper</title>
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script type="tex-/javascript" href="js/jquery-3.1.1.min"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
    <body>
      <div id="site">
          <?php include('header.php');?>

        <section class="four_container page-section">
          <div class="container-fluid">
           <div class="row">
            <div class="col-md-10 col-md-offset-1 center_content">
              <div class="col-md-8 col-md-offset-2 col-xs-12" style="margin-top: 28%;">
               <div class="newsletter">

                <h1>Merci ! Votre inscription à bien été prise en compte.</h1>
                
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <p class="copyright" align="center">© 2017 Tripper IESA MULTIMÉDIA All Rights Reserved.</p>
        </div>
        </div>

        </section>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-89994770-1', 'auto');
      ga('send', 'pageview');

    </script>
    <!-- Hotjar Tracking Code for www.tripper-app.com -->
    <script>
      (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:384213,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
      })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <script type="text/javascript" src="js/main.js"></script>


</body>
</html>
