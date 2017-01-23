<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <!-- jQuery library (served from Google) -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <!-- bxSlider Javascript file -->
  <script src="js/jquery.bxslider.min.js"></script>
  <!-- bxSlider CSS file -->
  <link href="css/jquery.bxslider.css" rel="stylesheet" />


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>

</head>

<body>
 <?php include('header.php');?>

 <section class="securite_first_container page-section">
  <div class="container-fluid">

   <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-12">
      <h2>Avec <span>TRIPPER,</span> </h2>
      <p>changez de devises facilement...</p>
      <p>...Et surtout en toute sécurité !</p>
      <button><a href="solution.php">Tripper comment ça marche  ?</a></button>
      <button><a href="account.php">Ouvrez un compte gratuitement</a></button>
    </div>
  </div>
</div>
</section>

<section class="securite_second_container page-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6  col-md-offset-3  col-sm-12">
        <h3>Fini les galères pour changer de devises à l'étranger, même sans carte de retrait !</h3>

      </div>
    </div>
  </div>

</section>

<section class="securite_third_container page-section">
  <div class="container-fluid">
    <div class="row">

       <div class="col-xs-12 col-md-4">
       
        <p><span>Les experts</span>
          <br/><br/>La sécurité de vos transactions est au coeur de nos préoccupations chez Tripper.C’est pourquoi nous avons consulté des experts en sécurité bancaire et en développement pour créer le système de transaction de Tripper.

          Tous les échanges donnent lieu à un code à usage unique. 
          Ce code est donné au voyageur qui doit le communiquer au Savior, la personne qui lui donne de la monnaie locale. 

        </p>
      </div>

      <div class="col-xs-12 col-md-4">
  
       <p><span>Codes et liquidités</span><br/><br/>Les sommes que le voyageur demande ne peut excéder un équivalent de 300 euros (en monnaie locale).
        Une commission de 5% est appliquée à toutes les transactions de 1 à 100 euros, et de 10% de 100 à 300 euros. La commission est prise directement par le Savior.  

        A réception de ce code et après l’avoir inscrit dans la plateforme, le Savior est immédiatement remboursé par Tripper. C’est un peu comme Blablacar mais tout est très rapide ! 

        Les codes sont complexes et ne peuvent être copiés. 
      </p>
    </div>

    <div class="col-xs-12 col-md-4">

     <p><span>Nos équipes et SAV</span><br/><br/>S’il y avait un problème nos équipes se rendent disponibles à tout moment, en effet, basées à différents endroits dans le monde, il y aura toujours quelqu’un de disponible pour vous répondre. C’est ça une entreprise internationale qui accompagne ses clients globetrotteurs ;) 

      N’oublions pas que les Saviors sont notés par les utilisateurs, et que les voyageurs faisant appel à nous ponctuellement pourraient être bannis si des saviors les signalaient. 

      Mais nous pensons que dans une approche d’échange et de service, les mentalités sont plus propices à passer de bons moments !
    </p>
  </div>

</div>
</div>
</section>




<section class="six_container page-section">
  <div class="container-fluid">

   <div class="row">
    <div class="col-md-12">

      <h2>Ne perdez pas le fil</h2>
      <p>En souscrivant à la Newsletter, tester la version Bêta de notre service avant la communication officielle !</p>
      <form action="config.php" method="POST">

        <input type="nom" placeholder="Votre nom" id="form-nom" name="nom" required />
        <input type="prenom" placeholder="Votre prénom" id="form-prenom" name="prenom" required />
        <input type="email" placeholder="Votre e-mail" id="form-email" name="email" required />

        <input type="submit" value=""  />
      </form>
    </div>
  </div>
</div>
</section>


<section class="seven_container page-section">
  <div class="container-fluid">
    <div class="row col-md-12">

      <?php include('footer.php');?>

    </div>
  </div>
</section>
<script src="js/script.js"></script>
<script src="js/caroussel.js"></script>


</body>
</html>