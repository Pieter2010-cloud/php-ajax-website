<?php

if ( isset($_GET["naam"]) && isset($_GET["gebruikersnaam"]) && isset($_GET["wachtwoord"]) && isset($_GET["wachtwoord_herhaald"]) && isset($_GET["email"]) ) {
	$opgestuurde_naam = $_GET["naam"];
	$opgestuurde_gebruikersnaam = $_GET["gebruikersnaam"];
	$opgestuurde_wachtwoord = $_GET["wachtwoord"];
	$opgestuurde_wachtwoord_herhaald = $_GET["wachtwoord_herhaald"];
	$opgestuurde_email = $_GET["email"];

	$bericht = "leuk dat je je registreert. Helaas werkt het nog niet op dit moment, maar dit is wat je opgestuurd hebt: Naam = $opgestuurde_naam, gebruikersnaam = $opgestuurde_gebruikersnaam";
} else {
	$bericht = "hoe heet je?";
}

?><!DOCTYPE HTML>
<html>
<head>
<title>Formulier 1 versie 2</title>
</head>
<body>
	<p>Hallo, <?=$bericht?></p>
	<form>
		<p>
			<label>Naam: </label>
			<input type="text" name="naam">
		</p>
		<p>
			<label>Gebruikersnaam: </label>
			<input type="text" name="gebruikersnaam">
		</p>
		<p>
			<label>Wachtwoord: </label>
			<input type="password" name="wachtwoord">
		</p>
		<p>
		<p>
			<label>Herhaal wachtwoord: </label>
			<input type="password" name="wachtwoord_herhaald">
		</p>
		<p>
			<label>E-mailadres: </label>
			<input type="text" name="email">
		</p>
		<input type="submit">
	</form>
</body>
</html>