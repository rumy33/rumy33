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
      <h2>Fj??llr??ven Vidda Pro jakke, herre</h2>
    <img src="jakke1.jpg" width="360" height="350" alt="">

  <p>Viva la Vidda
Hvad matcher bedre med dine Vidda Pro-bukser end en Vidda Pro-jakke?

Fj??llr??vens Vidda Pro-jakke best??r naturligvis af G-1000 Eco, som p?? forh??nd er afvisende over for b??de vind og vand uden at give afkald p?? en sublim ??ndbarhed.

G-1000 Eco best??r af 65% genanvendt polyester og 35% ??kologisk bomuld. Jakken er voksbehandlet, men du kan sagtens selv g??re den mere vejrbestandig ved hj??lp af Fj??llr??vens Gr??nlandsvoks.

Skuldrene er uden generende s??mme, og s?? er de endda forst??rket med et dobbelt lag G-1000, s?? jakken med sikkerhed holder til mange ??rs slid.

Drop den store rygs??k
Vidda Pro-jakken er udstyret med hele otte lommer. To af dem er brystlommer med flapper og lynl??se i siderne, s?? du nemt kan komme til tingene. De to sidelommer har ogs?? flapper og lynl??se, men disse har samtidig stropper, som du kan bruge til at fastg??re en dolk eller andre ting, du hurtigt skal kunne f?? fat p??.

Den rummelige h??tte afsk??rmer for vinden. og 2-vejs lynl??sen er beskyttet af en vindflap.

Fj??llr??vens Vidda Pro jakke er designet til det h??rde friluftsliv i norden - om det s?? er vandring, bushcraft, lejrbrug eller bare til br??ndehugning derhjemme i indk??rslen.

Detaljer
Materiale: G-1000 Eco: 65% genanvendt polyester, 35% ??kologisk bomuld
Vind - og vandafvisende
Beregnet til overlevelsesture, trekking, bushcraft og et alsidigt friluftsliv
Rummelig h??tte
I alt otte lommer
Brystlommer og sidelommer med lynl??s og flap
Udstyrsl??kker i sidelommerne
V??gt: 850 gram (str.M)
Farve: Sort.</p>   <h2><p class="price">2.299,00 kr
</p></h2>
  <p><button>TILF??J TIL KURV</button></p>
   <div class="main">
    <h2>Salomon Escape jakke, herre
</h2>
     </div>
<div class="card">
    <img src="jakke2.jpg" width="360" height="350" alt="">
   
  <p>Salomon Escape herre jakke er perfekt n??r tiden igen er til af opleve vinterlandskabet p?? langrend. Om det bliver i de smukke norske fjelde eller en heldig dag med sne i lille Danmark.

Jakken har et rent og teknisk udseende, h??ndlommer og 40 g isolering, hvilket g??r den lige s?? behageligt til ski som hverdagen.

Jakken er vindt??t, varm og med stretch. Salomons Advanced Skin Warm Insulated 40g/m2 - holder dig varm og komfortabel ved at regulerer dit kropsvarme. Det er en fiber isolering, som holder dig varm selvom bekl??dningen bliver v??d.

Detaljer:
 SMART SKIN???   
AdvancedSkin Warm   
Matriale: Advanced Skin Warm Insulated 40g/m2   
Ripstop 
Taffeta  
Pasform: Regular fit</p><h2><p class="price">699,30 kr

</p></h2>
  <p><button>TILF??J TIL KURV</button></p>
</div>
   <div class="main">
    <h2>Bergans Microlight vindjakke, herre

</h2>
     </div>
<div class="card">
    <img src="jakke3.jpg" width="360" height="350" alt="">
   
  <p>Man kan ogs?? f?? det for varmt
Derfor er det vigtigt at have en ??ndbar vindjakke i situationer, der ogs?? kan risikere at byde p?? let regn.

Bergans har med Microlight fremtryllet en vindjakke med en v??gt p?? 260 gram til letv??gteren, der ikke g??r p?? kompromis med kvaliteten.

Microlight er lavet i et 4-vejs stretch-materiale, som giver maksimal bev??gelsesfrihed. Den t??rrer hurtigt og kan nemt pakkes ned i den ene sidelomme, s?? den fylder n??sten ingenting.

Microlight er en fantastisk ??ndbar vindjakke til de dage, hvor pulsen stiger til vejrs.

Vi bruger den som supplement til skaljakken p?? de dage, hvor beskyttelse mod vinden og maksimal ??ndbarhed er de st??rste krav til overt??jet.

Detaljer:
Materiale: Stunner?? Stretch 100 % Polyamid (Nylon)
Vindt??t og vandafvisende
Justerbar h??tte med afstivet skygge
Manchetter med velcro
Lang i ryggen
V??gt: 260 gram (str. L)
Farve: Bl?? (ClassicBlue)</p><h2><p class="price">839,30 kr

</p></h2>
  <p><button>TILF??J TIL KURV</button></p>
</div>
   <div class="main">
    <h2>Salomon Escape jakke, herre
</h2>
     </div>
<div class="card">
    <img src="jakke4.jpg" width="360" height="350" alt="">
  
  <p>Vinterb??stet er landet
Fj??llr??ven har med sin Singi Anorak skabt et sublimt stykke overt??j til de h??rde dage i vinterfjeldet.

Singi Anorakken er fremstillet af den kraftige metervare G-1000, som kan st?? model til lidt af hvert. Der er s??gar et ekstra lag G-1000 p?? skuldrene, som s??rger for yderligere beskyttelse mod vand og slitage, n??r du stormer derudaf med rygs??kken. Derudover er G-1000 et meget ??ndbart materiale, s?? du ikke er gennembl??dt, n??r du holder pause undervejs.

Nem at tage p?? og af
Lange lynl??se i siderne sikrer, at du ikke beh??ver at bakse med at f?? anorakken af og p??. Derudover kan de bruges til at f?? luftet lidt ud, hvis du f??ler dig meget varm under anorakken.

Undg?? kold knold
Prikken over i'et bliver dog stormh??tten, som Singi Anorakken ogs?? er udstyret med. Skyggen kan justeres s?? den enten yder maksimal beskyttelse mod vejret eller giver et bredere udsyn til siderne. Den syntetiske pelskant kan tages af og p?? efter behov.

Anorakken kan strammes forneden, s?? den kolde luft ikke slipper igennem. Anorakken er forsynet med en k??ngurulomme og sidelommer, som du kan bruge til opbevaring af sm??grej.

Alt i alt er den beregnet til den aktive vinter - om det er p?? ski, snesko eller vandring i mindre sneramte egne.

Detaljer:
Materiale: G-1000?? Original: 65% polyester/35% bomuld.
Justerbar stormh??tte med aftagelig syntetisk pelskant.
K??ngurulomme og sidelommer.
Kan strammes ind med elastik forneden og velcro i ??rmerne.
Farve: NavyStorm.
V??gt: 960 gram (str. M).
PFC-fri</p><h2><p class="price">2.199,00 kr


</p></h2>
  <p><button>TILF??J TIL KURV</button></p> 
</div>
   <div class="main">
    <h2>Salomon Escape jakke, herre
</h2>
     </div>
<div class="card">
    <img src="jakke5.jpg" width="360" height="350" alt="">
   
  <p>Klassisk anorak
Fj??llr??ven Vardag Anorak er en klassisk anorak, der b??de holder til hverdagsbrug og vinteraktiviteter.

Vardag anorakken er fremstillet af den kraftig G-1000 Eco, der kan st?? model til lidt af hvert og er godt ??ndbart materiale, s?? du ikke er gennembl??dt af sved n??r du holder pause undervejs p?? vandreturen.

De sm?? detaljer g??r forskellen
Selvom anorakken er i et simpelt og klassisk design, har den alligevel et v??ld af gode detaljer, som du nok ikke umiddelbart bem??rker, men som du helt sikkert vil s??tte pris p?? i brug.

L??g derfor m??rke til:

Stor og rummelig h??tte med gode mulighed for justering
Lange lynl??se i siderne, de sikrer, at du ikke beh??ver at bakse med at f?? anorakken af og p??. Derudover kan de bruges til at f?? luftet lidt ud, hvis du f??r det for varmt under anorakken.
Stor k??ngurulomme og sidelommer til opbevaring af sm??grej.
Sk??ret med raglan ??rmer, der giver en god pasform og bev??gelsesfrihed, samtidig med, at der ikke ligger en generende syning lige under skulderremmen, n??r du g??r med rygs??k
Indsn??ring i bunden, der effektivt holder kold tr??k ude.
Rummelig pasform, der giver god plads til en uldsweater eller fleece under.
Alt i alt en funktionel klassiker, der aldrig g??r helt af mode og derfor b??de kan bruges til tur og hverdag ??ret rundt.

Detaljer:
Materiale: G-1000?? Eco: 65% polyester/35% bomuld.
V??gt: 620 gram (str. M).
PFC-fri
Farve: Bl?? (Storm)</p><h2><p class="price">1.699,00 kr


</p></h2>
  <p><button>TILF??J TIL KURV</button></p>
</div>
  
</div>

<div class="footer">
  <h2>created by Abdalla & Roudi.</p></h2>
</div>

    
</body>
</html>
