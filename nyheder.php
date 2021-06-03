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
  <div class="side">
    <h2>5 aktiviteter til den nye udviklingsplan</h2>

    <img src="5.jpg" width="222" height="200" alt="">
    <p>I marts kunne korpsledelsen præsentere et første udkast til korpsets næste udviklingsplan. I planen er der identificeret fem temaer, som skal have særligt fokus nationalt og lokalt i 2020-2024. Men kan planen bruges på det enkelte møde? Vi har fundet nogle konkrete aktiviteter frem.
LÆS MERE.</p>

    <img src="4.jpg" width="222" height="240"><br>
    <img src="3.jpg" width="222" height="240"><br>
    <img src="2.jpg" width="222" height="240"><br>
  </div>
  <div class="main">
    <h2>Fang strandkrabber om natten
</h2>
    <img src="strandkrabber.jpg" width="360" height="350" alt="">
    <p> <h3>Vejledning</h3>
    <h5>Forberedelse:</h5>

Tag ud i dagslys og undersøg om der lever krabber i området. Brug evt. en snor med en klemme med madding til at lokke dem frem.

<p>Om natten:</p>

Om dagen gemmer strandkrabben sig, men om natten er den på jagt. Derfor er det lettere at fange krabber om natten. Krabberne kan fanges med de bare nævner. Tag fat om krabberne bagfra med tommelfingeren på undersiden og to fingre på oversiden. Brug evt. havehandsker.

<p>Pas på krabberne, når de er fanget, der kan sagtens være flere krabber i samme spand. Krabberne har behov for vand ellers vil deres gæller udtørre. Sørg derfor for at fylde vand i spanden de opbevares i.</p>

<p>På undersiden af krabben, kan du se om det er en han eller hun. Hvis bagkroppen har en bred trekant er det en hun, er trekanten smal og spidst er det en ham. </p>

Brug evt. krabberne til at lave krabbesuppe, krabbesalat eller krabberisotto.

Sørg for at banke på kløerne inden du tilbereder dem, lyder de hule, er det ofte fordi krabben har været død og kødet er væk eller rådnet. Så skal de kasseres.

Kog kløerne, slå dem itu med en spiseske og pil kødet ud for at bruge det i retterne.

Foto: PHK

Materialer
Pandelamper

Gummistøvler eller waders

evt. havehandsker

spand

Reflektionsspørgsmål
Hvordan har aktiviteten udfordret spejderne?

Hvordan har aktiviteten udfordret dig?</p>
  
    <br>
    <h2>9 tips til at bruge mørket
</h2>
    <img src="morket.jpg" width="360" height="350" alt="">
  
    <p> <p>1. Location:</p>
Den nemmeste måde at give en aktivitet den rigtige kulisse, er at finde den i virkeligheden. Ring rundt og spørg pænt, de fleste er faktisk overraskende villige til at lade jer låne en bygning eller en plads, især hvis I finder noget der står tomt. Erhvervsejendomsmæglere er et sandt shoppingcenter for fede postlokationer.

<p>2. Lyssætning:</p>
Brug hvad I har for hånden. Farvet lys er kanon til at skabe stemning, levende lys og ild ligeså, mens arbejdslamper er rigtig gode til at lyse kulisser og omgivelser op. Deltagerne har ofte selv pandelamper med, så hovedformålet med lyssætningen er kulisse. Tænk over, at hele området I er i, er jeres kulisse. De ting, der skal skabe rammen, skal lyses op, mens ting, der skal være ”usynlige” forbliver mørke. Derudover kan en smule røg i luften give nogle vildt fede effekter.

<p>3. Lyd:</p>
Har du nogensinde prøvet at se en god film uden lyd på? Lydmiljøet på jeres aktivitet, er næsten lige så vigtigt som lyssætningen. Skal I have en hektisk stemning? Prøv at spille soundtracket fra en thriller eller actionfilm. Skal I have noget til at ligne en fabrik? Man kan finde tusindvis af optagelser af fabrikslyde på nettet. Ligeså med alt fra kirker til krigszoner.

<p>4. Brug stedet:</p>
Når nu I alligevel har fået lov til at være i den gamle lagerhal til jeres detektivpost, så brug da den gamle døde gaffeltruck ovre i hjørnet som en del af historien og alle de gamle papkasser til en aktivitet. Jeres aktivitet bliver bedre og sjovere for jer selv, hvis der er plads til at improvisere.

OM ASCEND
Ascend er et team unge spejdere, der bl.a. specialiserer sig i at arrangere vilde poster på forskellige adventurespejd-løb. Ascend står bl.a. bag udfordrende og spektakulære poster på Solaris, Apokalypseløbet, Coco Crazy Monkey Race, Invictus m.m.

Teamet:
<p>5. Mennesker:</p>
Det vigtigste element på næsten alle typer aktiviteter er teamet. Sørg for, at alle er sat grundigt ind i rammerne – gerne før de ankommer. På den måde er det meget nemmere for postmandskabet at leve sig ind i det, der sker, og man har bedre mulighed for at forberede udklædning og rekvisitter.

<p>6. Årstiden:</p>
Det er koldt at stå på post om natten – især om vinteren. Tænk over temaet for posten i forhold til at kunne have udklædning på ud over et lag varmt tøj. Et beach party som kulisse bliver en kold fornøjelse om vinteren.

<p>7. Aktivt mandskab:</p>
Har I mandskab til det, er der sjældent nogen bedre kulisse end mennesker. Handler jeres aktivitet om en mordgåde, så lad et par stykker fra teamet gå rundt som kriminalteknikere, uden nogen fast opgave ud over at skabe stemning. Gør plads til, at alle i teamet kan improvisere. Det er de skøre idéer og skæve personligheder, man husker efter posten – og det er sjovere for teamet.



<p>8. Helhedsindtrykket:</p>
Forsøg at gennemgå aktiviteten, som en deltager ville opleve den, og bemærk, hvilke indtryk der bryder helheden. Det kan være små ting, som at teamet har et par biler holdene lidt for tæt på middelalderaktiviteten, eller at der skal mere minestrimmel og et par advarselsblink rundt om den nedstyrtede rumraket, for at den ikke bliver alt for diskret.

<p>9. Interaktion:</p>
Lad deltagerne være en del af kulissen. Skal deltagerne køre sæbekasserace eller løbe igennem en forhindringsbane, så giv dem hjelm på, også selvom det ikke er en vild aktivitet. Det er sjovt og får aktiviteten til at virke langt mere gennemført. Hvis man som deltager bliver udstyret med knæklys og selvlysende maling, når man skal ind til festposten, føler man sig mere som en del af det, der foregår.</p>
   
  </div>
</div>

<div class="footer">
  <h2>created by Abdalla & Roudi.</p></h2>
</div>

</body>
</html>
