<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.fullPage.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript">

$(document).ready(function() {
	$('#fullpage').fullpage({
		sectionsColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF'],
		anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', '5thpage', 'lastPage'],
		menu: '#menu',
		scrollingSpeed: 1000
	});
});
</script>
</head>
<body class="">
<div id="container">
  <div id="fullpage">
    <div class="section" id="section0">
      <div id="menu">
       
        <ul>
          <li class="accueil" data-menuanchor="firstPage"><strong><a href="#firstPage">item</a></strong></li>
          <li class="classement" data-menuanchor="secondPage"><strong><a href="#secondPage">item</a></strong></li>
          <li class="programme" data-menuanchor="4thpage"><strong><a href="#4thpage">item</a></strong></li>
          <li class="reglement" data-menuanchor="lastPage"><strong><a href="#lastPage">item</a></strong></li>
        </ul>
      </div>
      <div id="block1">
		<p>section</p>
      </div>
    </div>
    <div class="section" id="section1">
      <div id="block2">
  		<p>section</p>
      </div>
    </div>
    <div class="section" id="section2">
     <div id="block3">
      <p>section</p>
      </div>
    </div>
    <div class="section" id="section3">
      <div id="block4">
       <p>section</p>
      </div>
    </div>
    <div class="section" id="section4">
      <div id="block5">
      	<p>section</p>
      </div>
    </div>
    <div class="section" id="section5">
      <div id="block6">
       <p>section</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>