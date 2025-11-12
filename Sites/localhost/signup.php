<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link href="sign.css" rel="stylesheet" type="text/css"> 
	
	<title>Inscription pour rejoindre l'association</title>
</head>
<body>
	<!--
    Formulaire pour l'inscritpion, avec la foncton check() en onsubmit afin de vérifier la validité des mots de passes
    -->
	<form  method="POST" action ="Singn_serveur.php" onsubmit="return check()" class="whatsapp-form">
		<div class="datainput">
			<select id="wa_select" name="genre">
				<option value="1">Monsieur</option>
				<option value="2">Madame</option>
			</select>
		</div>
		<div class="datainput">
			<input class="validate" name="name" required="" type="text" value=''/>
			<span class="highlight"></span><span class="bar"></span>
			<label>Nom</label>
		</div>
		<div class="datainput">
			<input class="validate" name="prenom" required="" type="text" value="">
			<span class="highlight"></span><span class="bar"></span>
			<label>Prénom</label>
		</div>
		<div class="datainput">
			<input class="validate" name="pwd" required="" type="password" value=''/>
			<span class="highlight"></span><span class="bar"></span>
			
			<label>Mot de passe</label>
		</div>
		<div class="datainput">
			<input class="validate" name="motdepasse2" required="" type="password" value=''/>
			<span class="highlight"></span><span class="bar"></span>
			<label>Confirmer le mot de passe</label>
		</div>
		<div class="datainput">
			<input tpye="number" class="validate" id="wa_email" name="tel" required="" type="tel" value=''/>
			<span class="highlight"></span><span class="bar"></span>
			<label>Numéro de tel</label>
		</div> 
		<div class="datainput">
			<input class="validate" id="wa_email" id="mail" name="mail" required="" type="email" value=''/>
			<span class="highlight"></span><span class="bar"></span>
			<label>Adresse E-mail</label>
		</div>
		<div class="datainput">
			<input type="hidden" name="roleid" value="2" class="validate">
		</div>
		<input class="send_form" type="submit" value="Register"></input>
		<div id="text-info"></div>
</form>
	

</body>
</html>

