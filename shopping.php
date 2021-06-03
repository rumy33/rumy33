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
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
 
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 22px;
}

.card button:hover {
  opacity: 0.7;
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
  


<div class="card">
      <h2>Fjällräven Vidda Pro jakke, herre</h2>
    <img src="jakke1.jpg" width="360" height="350" alt="">

  <p>Viva la Vidda
Hvad matcher bedre med dine Vidda Pro-bukser end en Vidda Pro-jakke?

Fjällrävens Vidda Pro-jakke består naturligvis af G-1000 Eco, som på forhånd er afvisende over for både vind og vand uden at give afkald på en sublim åndbarhed.

G-1000 Eco består af 65% genanvendt polyester og 35% økologisk bomuld. Jakken er voksbehandlet, men du kan sagtens selv gøre den mere vejrbestandig ved hjælp af Fjällrävens Grønlandsvoks.

Skuldrene er uden generende sømme, og så er de endda forstærket med et dobbelt lag G-1000, så jakken med sikkerhed holder til mange års slid.

Drop den store rygsæk
Vidda Pro-jakken er udstyret med hele otte lommer. To af dem er brystlommer med flapper og lynlåse i siderne, så du nemt kan komme til tingene. De to sidelommer har også flapper og lynlåse, men disse har samtidig stropper, som du kan bruge til at fastgøre en dolk eller andre ting, du hurtigt skal kunne få fat på.

Den rummelige hætte afskærmer for vinden. og 2-vejs lynlåsen er beskyttet af en vindflap.

Fjällrävens Vidda Pro jakke er designet til det hårde friluftsliv i norden - om det så er vandring, bushcraft, lejrbrug eller bare til brændehugning derhjemme i indkørslen.

Detaljer
Materiale: G-1000 Eco: 65% genanvendt polyester, 35% økologisk bomuld
Vind - og vandafvisende
Beregnet til overlevelsesture, trekking, bushcraft og et alsidigt friluftsliv
Rummelig hætte
I alt otte lommer
Brystlommer og sidelommer med lynlås og flap
Udstyrsløkker i sidelommerne
Vægt: 850 gram (str.M)
Farve: Sort.</p>   <h2><p class="price">2.299,00 kr
</p></h2>
  <p><button>TILFØJ TIL KURV</button></p>
   <div class="main">
    <h2>Salomon Escape jakke, herre
</h2>
     </div>
<div class="card">
    <img src="jakke2.jpg" width="360" height="350" alt="">
   
  <p>Salomon Escape herre jakke er perfekt når tiden igen er til af opleve vinterlandskabet på langrend. Om det bliver i de smukke norske fjelde eller en heldig dag med sne i lille Danmark.

Jakken har et rent og teknisk udseende, håndlommer og 40 g isolering, hvilket gør den lige så behageligt til ski som hverdagen.

Jakken er vindtæt, varm og med stretch. Salomons Advanced Skin Warm Insulated 40g/m2 - holder dig varm og komfortabel ved at regulerer dit kropsvarme. Det er en fiber isolering, som holder dig varm selvom beklædningen bliver våd.

Detaljer:
 SMART SKIN™   
AdvancedSkin Warm   
Matriale: Advanced Skin Warm Insulated 40g/m2   
Ripstop 
Taffeta  
Pasform: Regular fit</p><h2><p class="price">699,30 kr

</p></h2>
  <p><button>TILFØJ TIL KURV</button></p>
</div>
   <div class="main">
    <h2>Bergans Microlight vindjakke, herre

</h2>
     </div>
<div class="card">
    <img src="jakke3.jpg" width="360" height="350" alt="">
   
  <p>Man kan også få det for varmt
Derfor er det vigtigt at have en åndbar vindjakke i situationer, der også kan risikere at byde på let regn.

Bergans har med Microlight fremtryllet en vindjakke med en vægt på 260 gram til letvægteren, der ikke går på kompromis med kvaliteten.

Microlight er lavet i et 4-vejs stretch-materiale, som giver maksimal bevægelsesfrihed. Den tørrer hurtigt og kan nemt pakkes ned i den ene sidelomme, så den fylder næsten ingenting.

Microlight er en fantastisk åndbar vindjakke til de dage, hvor pulsen stiger til vejrs.

Vi bruger den som supplement til skaljakken på de dage, hvor beskyttelse mod vinden og maksimal åndbarhed er de største krav til overtøjet.

Detaljer:
Materiale: Stunner® Stretch 100 % Polyamid (Nylon)
Vindtæt og vandafvisende
Justerbar hætte med afstivet skygge
Manchetter med velcro
Lang i ryggen
Vægt: 260 gram (str. L)
Farve: Blå (ClassicBlue)</p><h2><p class="price">839,30 kr

</p></h2>
  <p><button>TILFØJ TIL KURV</button></p>
</div>
   <div class="main">
    <h2>Salomon Escape jakke, herre
</h2>
     </div>
<div class="card">
    <img src="jakke4.jpg" width="360" height="350" alt="">
  
  <p>Vinterbæstet er landet
Fjällräven har med sin Singi Anorak skabt et sublimt stykke overtøj til de hårde dage i vinterfjeldet.

Singi Anorakken er fremstillet af den kraftige metervare G-1000, som kan stå model til lidt af hvert. Der er sågar et ekstra lag G-1000 på skuldrene, som sørger for yderligere beskyttelse mod vand og slitage, når du stormer derudaf med rygsækken. Derudover er G-1000 et meget åndbart materiale, så du ikke er gennemblødt, når du holder pause undervejs.

Nem at tage på og af
Lange lynlåse i siderne sikrer, at du ikke behøver at bakse med at få anorakken af og på. Derudover kan de bruges til at få luftet lidt ud, hvis du føler dig meget varm under anorakken.

Undgå kold knold
Prikken over i'et bliver dog stormhætten, som Singi Anorakken også er udstyret med. Skyggen kan justeres så den enten yder maksimal beskyttelse mod vejret eller giver et bredere udsyn til siderne. Den syntetiske pelskant kan tages af og på efter behov.

Anorakken kan strammes forneden, så den kolde luft ikke slipper igennem. Anorakken er forsynet med en kængurulomme og sidelommer, som du kan bruge til opbevaring af smågrej.

Alt i alt er den beregnet til den aktive vinter - om det er på ski, snesko eller vandring i mindre sneramte egne.

Detaljer:
Materiale: G-1000® Original: 65% polyester/35% bomuld.
Justerbar stormhætte med aftagelig syntetisk pelskant.
Kængurulomme og sidelommer.
Kan strammes ind med elastik forneden og velcro i ærmerne.
Farve: NavyStorm.
Vægt: 960 gram (str. M).
PFC-fri</p><h2><p class="price">2.199,00 kr


</p></h2>
  <p><button>TILFØJ TIL KURV</button></p> 
</div>
   <div class="main">
    <h2>Salomon Escape jakke, herre
</h2>
     </div>
<div class="card">
    <img src="jakke5.jpg" width="360" height="350" alt="">
   
  <p>Klassisk anorak
Fjällräven Vardag Anorak er en klassisk anorak, der både holder til hverdagsbrug og vinteraktiviteter.

Vardag anorakken er fremstillet af den kraftig G-1000 Eco, der kan stå model til lidt af hvert og er godt åndbart materiale, så du ikke er gennemblødt af sved når du holder pause undervejs på vandreturen.

De små detaljer gør forskellen
Selvom anorakken er i et simpelt og klassisk design, har den alligevel et væld af gode detaljer, som du nok ikke umiddelbart bemærker, men som du helt sikkert vil sætte pris på i brug.

Læg derfor mærke til:

Stor og rummelig hætte med gode mulighed for justering
Lange lynlåse i siderne, de sikrer, at du ikke behøver at bakse med at få anorakken af og på. Derudover kan de bruges til at få luftet lidt ud, hvis du får det for varmt under anorakken.
Stor kængurulomme og sidelommer til opbevaring af smågrej.
Skåret med raglan ærmer, der giver en god pasform og bevægelsesfrihed, samtidig med, at der ikke ligger en generende syning lige under skulderremmen, når du går med rygsæk
Indsnøring i bunden, der effektivt holder kold træk ude.
Rummelig pasform, der giver god plads til en uldsweater eller fleece under.
Alt i alt en funktionel klassiker, der aldrig går helt af mode og derfor både kan bruges til tur og hverdag året rundt.

Detaljer:
Materiale: G-1000® Eco: 65% polyester/35% bomuld.
Vægt: 620 gram (str. M).
PFC-fri
Farve: Blå (Storm)</p><h2><p class="price">1.699,00 kr


</p></h2>
  <p><button>TILFØJ TIL KURV</button></p>
</div>
  
</div>

<div class="footer">
  <h2>created by Abdalla & Roudi.</p></h2>
</div>

    
</body>
</html>
