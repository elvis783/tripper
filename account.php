<?php 
//include('connexion.php');
?>


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

	<section class="account_container page-section">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12 col-sm-12">
		
					<h2>Devenez Savior en quelques minutes</h2>
					<p>Saisissez vos informations personnelles</p>
					<!-- multistep form -->

					<form action="etape1.php" method="POST" id="msform">

						<!-- progressbar -->
						<ul id="progressbar">
							<li class="active">Saisissez votre adresse e-mail</li>
							<li>Saisissez vos coordonnées</li>
							<li>Saisissez votre état civil</li>
							<li>Synchronisez votre compte PAYPAL</li>
						</ul>

						<!-- fieldsets -->
						<fieldset>
							<h2 class="fs-title">Créer un compte Tripper</h2>
							<h3 class="fs-subtitle"></h3>
							<input type="text" name="mail" placeholder="Votre adresse e-mail" />

							<select name="pays" id="pays" >
								<option value="none">Pays de résidence</option>
								<option value="Angleterre">Angleterre</option>
								<option value="USA">États-Unis</option>
								<option value="France">France</option>
							</select>
							<input type="button" name="next" class="next action-button" value="Étape suivante" />
						</fieldset>

						<fieldset>
							<h2 class="fs-title">Vos informations personnelles</h2>
							<h3 class="fs-subtitle"></h3>

							<select name="sexe" id="sexe" >
								<option value="mme">Mme</option>
								<option value="mr">Mr</option>
							</select>

							<input type="text" name="nom" placeholder="nom" required/>
							<input type="text" name="prenom" placeholder="prenom" required />
							<input type="text" name="telportable" placeholder="Téléphone Mobile" required/>
							<input type="text" name="telfixe" placeholder="Téléphone Fixe" required />
							<input type="text" name="adresse" placeholder="Adresse" required/>
							<input type="text" name="cp" placeholder="Code postal" required/>
							<input type="text" name="ville" placeholder="Ville"required />


							<input type="button" name="previous" class="previous action-button" value="Précédent"/>
							<input type="button" name="next" class="next action-button" value="Suivant" />
						</fieldset>

						<fieldset>
							<h2 class="fs-title">Votre état civil</h2>
							<h3 class="fs-subtitle"></h3>
							<input type="date" name="datedenaissance" required>
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
							<input type="text" name="comdenaissance" placeholder="Commune de naissance"required />
							<input type="text" name="nationalite" placeholder="Nationalité" required/>
							<input name="Newsletter" type="checkbox" value="mentions-newsletter" required/>Je désire recevoir la newsletter chaque mois.
							<input name="Mentions" type="checkbox" value="mentions-legales" required/>Accepter les mentions légales
							<input type="button" name="previous" class="previous action-button" value="Précédent" required/>
							<input type="button" name="next" class="next action-button" value="Suivant" required/>
						</fieldset>


						<fieldset>
							<h2 class="fs-title">Connecter votre compte paypal</h2>
							<h3 class="fs-subtitle"></h3>

							<input type="text" name="mailpaypal" placeholder="Mon adresse paypal" required/>

							<h2 class="fs-title">Pas de compte ?</h2>
							<input type="button" name="submit" class="action-button" value="Ouvrir un compte" required/>
							<input type="button" name="previous" class="previous action-button" value="Précédent" required/>
							<input type="submit" name="next" class="next action-button" value="Valider" required/>
						</fieldset>
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

</body>
</html>