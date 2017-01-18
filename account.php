<?php 
//include('connexion.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Tripper</title>

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
	<h1 style="text-align:center;">Devenez Savior en quelques secondes</h1>
	<h2 style="text-align:center;">Inscrivez-vous en 3 ou 4 étapes:</h2>
	<!-- multistep form -->
	
	<form action="etape1.php" method="POST" id="msform">

	  <!-- progressbar -->
	  <ul id="progressbar">
	    <li class="active">Account Setup</li>
	    <li>Social Profiles</li>
	    <li>Civil Details</li>
	    <li>Personal Details</li>
	  </ul>

	  <!-- fieldsets -->
	  <fieldset>
	    <h2 class="fs-title">Créer un compte Tripper</h2>
	    <h3 class="fs-subtitle"></h3>
	    <input type="text" name="mail" placeholder="mail" />
	    
        <select name="pays" id="pays" >
        	<option value="none">Pays de résidence</option>
        	<option value="Angleterre">Angleterre</option>
        	<option value="USA">États-Unis</option>
        	<option value="France">France</option>
    	</select>
	    <input type="button" name="next" class="next action-button" value="Créer un compte" />
	  </fieldset>
	
	  <fieldset>
	    <h2 class="fs-title">Ajouter ses coordonnées</h2>
	    <h3 class="fs-subtitle"></h3>

		<select name="sexe" id="sexe" >
        	<option value="mme">Mme</option>
        	<option value="mr">Mr</option>
    	</select>

	    <input type="text" name="nom" placeholder="nom" />
	    <input type="text" name="prenom" placeholder="prenom" />
	    <input type="text" name="telportable" placeholder="Téléphone Mobile" />
	    <input type="text" name="telfixe" placeholder="Téléphone Fixe" />
		<input type="text" name="adresse" placeholder="Adresse" />
		<input type="text" name="cp" placeholder="Code postal" />
		<input type="text" name="ville" placeholder="Ville" />
		

	    <input type="button" name="previous" class="previous action-button" value="Précédent" />
	    <input type="button" name="next" class="next action-button" value="Suivant" />
	  </fieldset>

		<fieldset>
			<h2 class="fs-title">Votre état civil</h2>
			<h3 class="fs-subtitle"></h3>
			<input type="date" name="datedenaissance" >
			<select name="paysdenaissance" id="pays_naissance" >
				<option value="none">Pays de naissance</option>
				<option value="Montenegro">Monténégro</option>
				<option value="Ecosse">Ecosse</option>
				<option value="France">France</option>
			</select>

			<select name="dpdenaissance" id="departement_naissance" >
				<option value="none">Département de naissance</option>
				<option value="75">75</option>
				<option value="78">78</option>
				<option value="92">92</option>
			</select>
			<input type="text" name="comdenaissance" placeholder="Commune de naissance" />
			<input type="text" name="nationalite" placeholder="Nationalité" />
			<input name="Newsletter" type="checkbox" value="mentions-newsletter"/>Je désire recevoir la newsletter chaque mois.
			<input name="Mentions" type="checkbox" value="mentions-legales"/>Accepter les mentions légales
			<input type="button" name="previous" class="previous action-button" value="Précédent" />
			<input type="button" name="next" class="next action-button" value="Suivant" />
		</fieldset>


	  <fieldset>
	    <h2 class="fs-title">Connecter votre compte paypal</h2>
	    <h3 class="fs-subtitle"></h3>
	
		<input type="text" name="mailpaypal" placeholder="Mon adresse paypal" />

		<h2 class="fs-title">Pas de compte ?</h2>
		<input type="button" name="submit" class="action-button" value="Ouvrir un compte" />
	    <input type="button" name="previous" class="previous action-button" value="Précédent" />
	    <input type="submit" name="next" class="next action-button" value="Valider" />
	  </fieldset>
	</form>



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
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
  </body>
  </html>