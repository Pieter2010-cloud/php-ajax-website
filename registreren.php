<?php

if ( isset($_GET["Voornaam"]) && isset($_GET["Achternaam"]) && isset($_GET["gebruikersnaam"]) && isset($_GET["wachtwoord"]) && isset($_GET["wachtwoord_herhaald"]) && isset($_GET["email"]) ) {
	$opgestuurde_Voornaam = $_GET["Voornaam"];
	$opgestuurde_Achternaam = $_GET["Achternaam"];
	$opgestuurde_gebruikersnaam = $_GET["gebruikersnaam"];
	$opgestuurde_wachtwoord = $_GET["wachtwoord"];
	$opgestuurde_wachtwoord_herhaald = $_GET["wachtwoord_herhaald"];
	$opgestuurde_email = $_GET["email"];

	$bericht = "Hoi $opgestuurde_Voornaam, leuk dat je je registreert. Helaas werkt het nog niet op dit moment, maar dit is wat je opgestuurd hebt: Naam = $opgestuurde_naam, gebruikersnaam = $opgestuurde_gebruikersnaam";
} else {
	$bericht = "Hallo, hoe heet je?";
}

?><!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">

<body>

<div class="w3-card-4">
  <div class="w3-container w3-highway-red">
    <h2>Account aanmaken</h2>
  </div>
  <form class="w3-container">
    <p>      
    <label class="w3-highway-text-red"><b>Voornaam</b></label>
    <input class="w3-input w3-border w3-white" name="Voornaam" type="text"></p>
    <p>      
    <label class="w3-text-highway-red"><b>Achternaam</b></label>
    <input class="w3-input w3-border w3-white" name="Achternaam" type="text"></p>
	<p>      
    <label class="w3-text-highway-red"><b>Gebruikersnaam</b></label>
    <input class="w3-input w3-border w3-white" name="Gebruikersnaam" type="text"></p>
	<p>      
    <label class="w3-text-highway-red"><b>Wachtwoord</b></label>
    <input class="w3-input w3-border w3-white" name="Wachtwoord" type="Password"></p>
	<p>      
    <label class="w3-text-highway-red"><b>Wachtwoord herhalen</b></label>
    <input class="w3-input w3-border w3-white" name="Wachtwoord-herhalen" type="Password"></p>
	<p>      
    <label class="w3-text-highway-red"><b>E-mail</b></label>
    <input class="w3-input w3-border w3-white" name="E-mail" type="text"></p>
	<p>
    <input type="submit" class="w3-button w3-black" value="registreren">
  </form>
</div>

</body>
</html> 
