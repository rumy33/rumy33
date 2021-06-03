<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Spejdersport </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style for body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1a8bbc;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;

  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #1a8bbc;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Spejdersport</h1>
  
</div>

<div class="navbar">
    <a href="/spejdersport/index.php" class="active">Forside</a>
  <a href="/spejdersport/nyheder.php">aktiviteter</a>
  <a href="/spejdersport/shopping.php">Shopping</a>
  <a href="/spejdersport/4medarbejder.php">For medarbejderne</a>
  <a href="/spejdersport/kontaktos.php" class="right">Kontakt os</a>
</div>

<div class="row">

  <div class="main">
    <h2>Bag om Spejder Sport</h2>
    <h5>Spejder Sport en mere end bare en butik. Vi er et medlemsdrevet projekt, som handler om at bidrage bæredygtigt til dansk friluftsliv og medlemmerne i det Det Danske Spejderkorps. Her kan du læse om vores drivkraft og kigge nærmere på seneste regnskab.

</h5>
    <img src="forside1.jpg" class="fakeimg" width="auto" height="auto">

  
    <h1>Vores mission</h1>
        <ul>
  <li>At skabe langsigtet, økonomisk afkast til Det Danske Spejderkorps.</li>
  <li>Spejder Sport skal bidrage positivt til Korpsets profil.</li>
  <li>Vi forsyner spejdere og friluftsfolk med det rette kvalitetsudstyr.</li>
</ul>  

    <br>
    <h2> Spejder Sport
</h2>
    <h5>Danmarks største leverandør af Udstyr til eventyr</h5>
  <img src="forside1.jpg" class="fakeimg" width="auto" height="auto">
    
    <p>I efteråret 1945, hvor ressourcer var knappe, besluttede en flok ildsjæle i Det Danske Spejderkorps sig for at starte en butik, hvor spejdere kunne købe stof til telte og uniformer. Hurtigt kom flere slags grej og nye kunder til og uden at vide det, havde vores grundlæggere skabt Danmarks første outdoor-butik.

Siden den hårde start i 40’erne, har vi haft vokseværk. Spejder Sport er i dag Danmarks største kæde af butikker med friluftsudstyr til alle slags ture og aktiviteter. Hos os finder du også Spejder Sports eget mærke Asivik, der siden 1987 har stået for enkelt og gennemarbejdet grej, der er bygget til friluftsliv i det omskiftelige, danske klima.</p>
  </div>
</div>

<div class="footer">
  <h2>created by Abdalla & Roudi.</p></h2>
</div>

</body>
</html>
