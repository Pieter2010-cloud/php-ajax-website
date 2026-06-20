<?php
include "dbconn.php";

$bericht = "Vul het formulier in";

if (
    isset($_GET["Voornaam"]) &&
    isset($_GET["Achternaam"]) &&
    isset($_GET["Gebruikersnaam"]) &&
    isset($_GET["Wachtwoord"]) &&
    isset($_GET["E-mail"])
) {

    $voornaam = $_GET["Voornaam"];
    $achternaam = $_GET["Achternaam"];
    $username = $_GET["Gebruikersnaam"];
    $wachtwoord = $_GET["Wachtwoord"];
    $email = $_GET["E-mail"];

    $naam = $voornaam . " " . $achternaam;

    $query = "INSERT INTO accounts (username, password, name, email)
              VALUES ('$username', '$wachtwoord', '$naam', '$email')";

    if (mysqli_query($con, $query)) {
        $bericht = "Account is succesvol aangemaakt.";
    } else {
        $bericht = "Account kon niet worden gemaakt omdat de gebruikersnaam of het e-mailadres al door een ander account in gebruik is.";
    }
}
?>

<!DOCTYPE html>
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

  <form class="w3-container" method="get">

    <p>
    <label>Voornaam</label>
    <input type="text" name="Voornaam"></p>

    <p>
    <label>Achternaam</label>
    <input type="text" name="Achternaam"></p>

    <p>
    <label>Gebruikersnaam</label>
    <input type="text" name="Gebruikersnaam"></p>

    <p>
    <label>Wachtwoord</label>
    <input type="password" name="Wachtwoord"></p>

    <p>
    <label>Wachtwoord herhalen</label>
    <input type="password" name="Wachtwoord-herhalen"></p>

    <p>
    <label>E-mail</label>
    <input type="text" name="E-mail"></p>

    <input type="submit" class="w3-button w3-black" value="registreren">
  </form>

  <p><?php echo $bericht; ?></p>

</div>

</body>
</html>