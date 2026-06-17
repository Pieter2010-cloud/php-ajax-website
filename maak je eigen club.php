<html>
<title>W3.CSS Combined</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- W3.CSS + kleuren -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
/* AJAX paneel styling */
#panel, #flip {
padding: 5px;
font-size: 18px;
text-align: center;
background-color: #555;
color: white;
border: solid 1px #666;
border-radius: 3px;
}
#panel {
padding: 50px;
display: none;
text-align: left;
}
</style>
<body>

<div class="w3-highway-red">
<button class="w3-button w3-hide-large w3-highway-red w3-xlarge" onclick="w3_open()">☰</button>
<div class="w3-container">
<h1>Ajax opstelling maken</h1>
</div>
</div>

<div class="w3-sidebar w3-hide-large w3-bar-block w3-border-right" style="display:none" id="mySidebar">
<button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
<a href="Index.php" class="w3-bar-item w3-button">Home</a>
<a href="Ajax.php" class="w3-bar-item w3-button">Ajax/geschiedenis</a>
<a href="Index.php" class="w3-bar-item w3-button">uitloggen</a>
</div>

<div class="w3-row-padding" style="margin-top:20px;">

<div class="w3-half">
<button id="stop" class="w3-button w3-black w3-margin-bottom">stop lijst</button>
<div id="flip">Klikken om spelers weer te geven</div>
<div id="panel">
<h2> AJAX SPELERSLIJST</h2>
<h3> KEEPERS</h3>
Edwin van der Sar<br>
Andre Onana<br>
Maarten Stekelenburg<br>
Stanley Menzo<br>
Kenneth Vermeer<br>
Jasper Cillessen<br>
Bogdan Lobont<br>
Sjoerd van Gorp<br>
Heinz Stuy<br>
Remko Pasveer<br><br>
<h3> VERDEDIGING</h3>
Matthijs de Ligt<br>
Daley Blind<br>
Nicolás Tagliafico<br>
Joël Veltman<br>
Jan Vertonghen<br>
Toby Alderweireld<br>
Thomas Vermaelen<br>
Sébastien Haller<br>
Owen Wijndal<br>
Jurrien Timber<br><br>
<h3> MIDDENVELD</h3>
Frenkie de Jong<br>
Christian Eriksen<br>
Clarence Seedorf<br>
Edgar Davids<br>
Davy Klaassen<br>
Donny van de Beek<br>
Frank Rijkaard<br>
Sofyan Amrabat <br>
Wim Jonk<br>
Zlatan Labyad<br><br>
<h3> AANVAL</h3>
Johan Cruijff<br>
Marco van Basten<br>
Patrick Kluivert<br>
Dusan Tadić<br>
Hakim Ziyech<br>
Antony<br>
Luís Suárez<br>
Kasper Dolberg<br>
Finidi George<br>
Memphis Depay <br>
</div>
</div>

<div class="w3-half w3-center">
<!-- Rij 1 -->
<div class="w3-cell-row">
<div class="w3-container w3-green w3-cell w3-cell-middle">
<span contenteditable="true" class="w3-badge w3-xlarge w3-padding w3-grey">Neres</span>
</div>
<div class="w3-container w3-green w3-cell w3-cell-middle">
<span contenteditable="true" class="w3-badge w3-xlarge w3-padding w3-grey">Tadic</span>
</div>
<div class="w3-container w3-green w3-cell w3-cell-middle">
<span contenteditable="true" class="w3-badge w3-xlarge w3-padding w3-grey">Ziyech</span>
</div>
</div>

<div class="w3-cell-row">
<div class="w3-container w3-green w3-cell w3-cell-middle">
<span contenteditable="true" class="w3-badge w3-xlarge w3-padding w3-grey">FdeJong</span>
</div>
<div class="w3-container w3-green w3-cell w3-cell-middle">
<span contenteditable="true" class="w3-badge w3-xlarge w3-padding w3-grey">VandeBeek</span>
</div>
<div class="w3-container w3-green w3-cell w3-cell-middle">
<span contenteditable="true" class="w3-badge w3-xlarge w3-padding w3-grey">Schone</span>
</div>
</div>

<div class="w3-cell-row">
<div class="w3-container w3-green w3-cell w3-cell-middle">
<span contenteditable="true" class="w3-badge w3-xlarge w3-padding w3-grey">Mazraoui</span>
</div>
<div class="w3-container w3-green w3-cell w3-cell-middle">
<span contenteditable="true" class="w3-badge w3-xlarge w3-padding w3-grey">Blind</span>
</div>
<div class="w3-container w3-green w3-cell w3-cell-middle">
<span contenteditable="true" class="w3-badge w3-xlarge w3-padding w3-grey">DeLigt</span>
</div>
<div class="w3-container w3-green w3-cell w3-cell-middle">
<span contenteditable="true" class="w3-badge w3-xlarge w3-padding w3-grey">Veltman</span>
</div>
</div>

<div class="w3-cell-row">
<div class="w3-container w3-green w3-cell w3-cell-middle">
<span contenteditable="true" class="w3-badge w3-xlarge w3-padding w3-grey">Onana</span>
</div>
</div>
</div>
</div>

<script>
$(document).ready(function(){
$("#flip").click(function(){
$("#panel").slideDown(5000);
});
$("#stop").click(function(){
$("#panel").stop();
});
});
</script>
<script>
function w3_open() {
document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>