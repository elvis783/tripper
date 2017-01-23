<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tripper</title>
    <link rel="stylesheet" type="text/css" href="css/style_savior.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="description" content="Vous cherchez à vous procurer de la liquidité. Quel qu’en soit la raison, pas de banque à proximité, perte de ses moyens de paiement, Tripper vous sauve la mise avec ses Saviors.">
    <!-- jQuery library (served from Google) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="http://www.tripper-app.com">
    <meta name="twitter:creator" content="@trippersolution">
    <meta name="twitter:title" content="Tripper">
    <meta name="twitter:description" content="Nous mettons à votre disposition des Saviors à proximité qui répondront présent pour vous procurer de la liquidité.">
    <meta name="twitter:image" content="http://www.tripper-app.com/img/image-twitter.png">
</head>

 <body>
  <?php include('header.php');?>


  <section class="first_container page-section">
    <div class="container-fluid">
     <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-12">
        <h1>Profitez d'avantages en prêtant<br>main forte à nos <span style="color: #88B9E5;">Tripper</span></h1>
        <p> Si Tripper fonctionne aujourd'hui, <br>c'est grâce à vous et aussi un peu à nous !</p><br>
        <button>Devenir Savior</button>
      </div>
    </div>
  </div>
</section>
<a href="#dernieres-nouvelles" ><img src="img/top_arrow.png" style="display: block; margin: auto;top: 778px;" alt=""></a>
<section class="second_container page-section" id="dernieres-nouvelles">
  <div class="container">
    <div class="row">
      <h1>Tirez votre épingle du jeu !</h1>
      <p>En toute sécurité.</p>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 col-xs-12">
        <div class="blocbleu1">
          <br><br><br>
          <h3>Prenez contact</h3>
          <br>
          <img src="img/phone-new.png" class="img-responsive" width="160" alt="">
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="blocbleu2">
          <br><br><br>
        <h3>Effectuer la transaction</h3>
        <br>
        <img src="img/phone-new.png" class="img-responsive" width="160" alt="">
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="blocbleu3">
          <br><br><br>
          <h3>Récupérez votre Allopass</h3>
          <br>
          <img src="img/phone-new.png" class="img-responsive" width="160" alt="">
        </div>
        </div>
    </div>
  </div>
</section>

<section class="third_container page-section">
  <div class="container-fluid">
    <div class="row col-md-12">
      <div class="col-md-1 col-xs-0"></div>
      <div class="col-md-6 col-sm-12">
        <div class="box__black">
          <h2>Qu’est-ce qu’un Savior ?</h2>
          <h3>Vous êtes le coeur de Tripper !</h3><br>
          <p>Les Saviors (locaux ou commerces) partout dans le monde sont à votre disposition, prenez contact directement avec eux pour les rencontrer.
          </p>
        </div> 
      </div>
      <div class="col-md-5"><div id="slider-wrap">
      <ul id="slider">
       <li>
        <div>   
         <img src="img/locked.png" alt="la sécurité"/>
         <p>Avec ou sans smartphone nous offrons la possibilité à notre communauté de se procurer de la liquidité à l’étranger, sans carte de retrait, et en toute sécurité. </p>
       </div>                
       <i class="fa fa-image"></i>
     </li>

     <li>
      <div>
        <img src="img/locked.png" alt="la sécurité"/>
        <p>Tripper est une solution disponible 24h/24h et 7j/7 partout dans le monde.</p>
      </div>
      <i class="fa fa-gears"></i>
    </li>

    <li>
      <div>
        <img src="img/locked.png" alt="la sécurité"/>
        <p>Nous collaborons des experts en sécurité bancaire et en développement constamment pour assurer la sécurité du système de transaction de Tripper.</p>
      </div>
      <i class="fa fa-sliders"></i>
    </li>
  </ul>
  <!--controls-->
  <div class="btns" id="next"><img src="img/next.png"/></div>
  <!--  <div class="btns" id="previous"><i class="fa fa-arrow-left"></i></div>-->
  <!--controls-->  
  </div></div>
    </div>
  </div>
</section>

<section class="four_container page-section">
  <div class="container-fluid">
    <div class="row">
      <h1>Participez à l'aventure</h1><br>
      <button><a href="account.php">Devenir Savior</a></button>
    </div>
  </div>
</section>

<section class="footer_container page-section">
  <div class="container-fluid">
    <div class="row col-md-12">
      <?php include('footer.php');?>
    </div>
  </div>
</section>

<script src="js/script.js"></script>
<script>
  
  $(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>
</body>
</html>