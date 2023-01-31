<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<title>Homepage</title>
</head>
<body>

	<?php require_once("header.php"); ?>

	<!-- START eigen code -->
	<main class="wrapper">
			<h2>Marjon Déco</h2>
			<p class="text">
				Liefde voor Frankrijk, creativiteit en vakmanschap zijn de basis voor Marjon Déco woonaccessoires. 
				Elk stuk is uniek en met de hand gemaakt van kwalitatief hoogwaardige producten.  
				Alles wordt ontworpen en gemaakt in mijn atelier, met passie en aandacht voor detail.<img class="alignedImg" width="250px" src="img/staand-1.jpg" alt="Placeholder"/>
				<button class="prod-desc-btn" onclick = "document.getElementById('readMore').innerHTML='De Marjon Déco collectie wordt met hart en ziel gemaakt, vandaar het hartje op de labels. De collectie omvat verschillende kleurlijnen die elk een eigen naam hebben zoals Gigi, Malou, Elise en Fabienne.' ">Lees meer</button> 
			</p>
			
			<p id="readMore" class="text"></p>
			<p>
				<br/><img class="defaultImg"src="img/DSC_7487.JPG" width="350" alt="Overzicht collecties glaswerk"/>	
				<br/>
				<br/>Het assortiment bestaat uit:
				<br/>*Glaswerk  
				<br/>*Textiel (tafelkleden, servetten, kussens, gastendoekjes) 
				<br/>*Lampen
				<br/>*Cadeau-artikelen (zeepjes en kaarsen in bijpassende box)
				<br/><img class="defaultImg" src="img/bloemen-glaswerk.jpg" width="350px" alt="ProductImage" />
			</p>

	</main>
	<?php require_once("footer.php"); ?>
	
</body>
</html>