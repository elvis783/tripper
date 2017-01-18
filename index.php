<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
  <div class="header">
    <div class="wrap">
      <header>
        <h1 class="logo">
          <a href="">
            <img src="img/logo-tripper.png" alt="TRIPPER">
          </a>
        </h1>
      </header>
      <nav>
        <ul class="main-nav">
          <li><a href="#" class="is-active">La solution</a></li>
          <li><a href="#">Devenir savior</a></li>
          <li><a href="#">Sécurité</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Contact</a></li>


          <li><a href="">Login</a></li>
          <li class="button-inscription"><a href=""> Inscription</a></li>
        </ul>
      </nav>
      <button id="btn-nav">Menu</button>
    </div>
  </div>


  <section class="first_container page-section">
    <div class="container-fluid">

     <div class="row">
      <div class="col-md-6 col-sm-12">
        <h2>Tripper, votre pied à terre à l'étranger.</h2>
        <p> Retirer de l'argent, <span>sans carte de retrait</span><br/> partout dans le monde.</p>
        <button><a href="">Découvrir la solution</a></button>
      </div>
    </div>
  </div>
</section>

<section class="second_container page-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <h2>Devenez Savior en 10 minutes</h2>
        <p> Bénéficiez d'avantages en facilitant l'accessibilité <br/>
          de votre devise d'origine aux utilisateurs de Tripper</p>
          <button><a href="">Devenir Savior</a></button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="third_container page-section">
  <div class="container-fluid">
    <div class="row col-md-12">
      <div class="col-xs-6 col-md-6">
        <h2>Rien de plus qu'un téléphone</h2>
        <ul>
          <li>
            <h3>Rechercher</h3>
            <p>Trouver rapidement un savior à proximité grâce à un sms à notre service.</p>
          </li>
          <li>
            <h3>Contacter</h3>
            <p>Trouver rapidement un savior à proximité grâce à un sms à notre service.</p>
          </li>
          <li>
            <h3>Echanger</h3>
            <p>Trouver rapidement un savior à proximité grâce à un sms à notre service.</p>
          </li>
        </ul>
      </div>

      
      <div class="col-xs-6 col-md-6">
        <div class="phone">
          <img src="img/phone.png" class="img-responsive" alt="Rien de plus qu'un téléphone"/>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="four_container page-section">
  <div class="container-fluid">
    <div class="row col-md-12">
      <h2>Tripper en chiffres</h2>
      <div class="col-xs-6 col-md-4">
        <div class="box-chiffres">
          <img src="img/picto-voyageurs.png" alt="3000"/>
          <h3>3000</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat sit amet lectus</p>
        </div>
      </div>

      
      <div class="col-xs-6 col-md-4">
        <div class="box-chiffres">
          <img src="img/picto-savior.png" alt="3000"/>
          <h3>700</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat sit amet lectus</p>
        </div>
      </div>

      <div class="col-xs-6 col-md-4">
        <div class="box-chiffres">
          <img src="img/picto-sms.png" alt="3000"/>
          <h3>100 000</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat sit amet lectus</p>
        </div>
      </div>


    </div>
  </div>
</section>

<section class="five_container page-section">
  <div class="container-fluid">


   <div class="row">
<ul class="bxslider">
  <li><img src="img/pic1.jpg" /></li>
  <li><img src="img/pic2.jpg" /></li>
  <li><img src="img/pic3.jpg" /></li>
  <li><img src="img/pic4.jpg" /></li>
</ul>
   
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