<!DOCTYPE html>
<html>

<head>
	<title>Yourway - <?php if(isset($_GET['state'])){ echo $_GET['state'];} else echo 'Alle Universit&auml;ten';?></title>

	<meta charset="ISO-8859-1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="">

	<link href="style/style.css" type="text/css" rel="stylesheet">
	<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon">
</head>
<body>

	<div id="wrapper">
		<div id="header">
		 	<div class="logo"><img src="img/yourway_logo_web.png" alt="Yourway Logo" height="120px"/></div>
		 	<div class="navi">
			 	<ul>
				 	<li class="active">Insgesamt</li>
				 	<li>N&auml;he</li>
				 	<li>Lebensqualit&auml;t</li>
				 	<li>Infrastruktur</li>
			   <!-- <li>Wohnungspreise</li> -->
				 	<li>Verf&uuml;gbarkeit</li>
				 </ul>
			 </div>
		</div>
		<div class="clearfix"></div>
		<div id="map"><iframe src="http://yourway.launchzone.de/c/Map.php?<?php if(isset($_GET['state'])){if($_GET['state'] != ""){$state = str_replace("ue", "&uuml;", $_GET['state']); echo 'BN='.$state;}} ?>" width="100%" height="360px" style="border: none;"></iframe></div>
		<div style="margin: 0 auto"><img src="img/line.png" align="divider" height="2px" width="980px" /></div>

		<div id="content">
<?php 
include("relevanz.php");
Relevanz::sucheTop(); 
?>
		</div>
	</div>
	
</body>
</html>