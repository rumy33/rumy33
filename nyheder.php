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
    <p>I marts kunne korpsledelsen pr??sentere et f??rste udkast til korpsets n??ste udviklingsplan. I planen er der identificeret fem temaer, som skal have s??rligt fokus nationalt og lokalt i 2020-2024. Men kan planen bruges p?? det enkelte m??de? Vi har fundet nogle konkrete aktiviteter frem.
L??S MERE.</p>

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

Tag ud i dagslys og unders??g om der lever krabber i omr??det. Brug evt. en snor med en klemme med madding til at lokke dem frem.

<p>Om natten:</p>

Om dagen gemmer strandkrabben sig, men om natten er den p?? jagt. Derfor er det lettere at fange krabber om natten. Krabberne kan fanges med de bare n??vner. Tag fat om krabberne bagfra med tommelfingeren p?? undersiden og to fingre p?? oversiden. Brug evt. havehandsker.

<p>Pas p?? krabberne, n??r de er fanget, der kan sagtens v??re flere krabber i samme spand. Krabberne har behov for vand ellers vil deres g??ller udt??rre. S??rg derfor for at fylde vand i spanden de opbevares i.</p>

<p>P?? undersiden af krabben, kan du se om det er en han eller hun. Hvis bagkroppen har en bred trekant er det en hun, er trekanten smal og spidst er det en ham. </p>

Brug evt. krabberne til at lave krabbesuppe, krabbesalat eller krabberisotto.

S??rg for at banke p?? kl??erne inden du tilbereder dem, lyder de hule, er det ofte fordi krabben har v??ret d??d og k??det er v??k eller r??dnet. S?? skal de kasseres.

Kog kl??erne, sl?? dem itu med en spiseske og pil k??det ud for at bruge det i retterne.

Foto: PHK

Materialer
Pandelamper

Gummist??vler eller waders

evt. havehandsker

spand

Reflektionssp??rgsm??l
Hvordan har aktiviteten udfordret spejderne?

Hvordan har aktiviteten udfordret dig?</p>
  
    <br>
    <h2>9 tips til at bruge m??rket
</h2>
    <img src="morket.jpg" width="360" height="350" alt="">
  
    <p> <p>1. Location:</p>
Den nemmeste m??de at give en aktivitet den rigtige kulisse, er at finde den i virkeligheden. Ring rundt og sp??rg p??nt, de fleste er faktisk overraskende villige til at lade jer l??ne en bygning eller en plads, is??r hvis I finder noget der st??r tomt. Erhvervsejendomsm??glere er et sandt shoppingcenter for fede postlokationer.

<p>2. Lyss??tning:</p>
Brug hvad I har for h??nden. Farvet lys er kanon til at skabe stemning, levende lys og ild liges??, mens arbejdslamper er rigtig gode til at lyse kulisser og omgivelser op. Deltagerne har ofte selv pandelamper med, s?? hovedform??let med lyss??tningen er kulisse. T??nk over, at hele omr??det I er i, er jeres kulisse. De ting, der skal skabe rammen, skal lyses op, mens ting, der skal v??re ???usynlige??? forbliver m??rke. Derudover kan en smule r??g i luften give nogle vildt fede effekter.

<p>3. Lyd:</p>
Har du nogensinde pr??vet at se en god film uden lyd p??? Lydmilj??et p?? jeres aktivitet, er n??sten lige s?? vigtigt som lyss??tningen. Skal I have en hektisk stemning? Pr??v at spille soundtracket fra en thriller eller actionfilm. Skal I have noget til at ligne en fabrik? Man kan finde tusindvis af optagelser af fabrikslyde p?? nettet. Liges?? med alt fra kirker til krigszoner.

<p>4. Brug stedet:</p>
N??r nu I alligevel har f??et lov til at v??re i den gamle lagerhal til jeres detektivpost, s?? brug da den gamle d??de gaffeltruck ovre i hj??rnet som en del af historien og alle de gamle papkasser til en aktivitet. Jeres aktivitet bliver bedre og sjovere for jer selv, hvis der er plads til at improvisere.

OM ASCEND
Ascend er et team unge spejdere, der bl.a. specialiserer sig i at arrangere vilde poster p?? forskellige adventurespejd-l??b. Ascend st??r bl.a. bag udfordrende og spektakul??re poster p?? Solaris, Apokalypsel??bet, Coco Crazy Monkey Race, Invictus m.m.

Teamet:
<p>5. Mennesker:</p>
Det vigtigste element p?? n??sten alle typer aktiviteter er teamet. S??rg for, at alle er sat grundigt ind i rammerne ??? gerne f??r de ankommer. P?? den m??de er det meget nemmere for postmandskabet at leve sig ind i det, der sker, og man har bedre mulighed for at forberede udkl??dning og rekvisitter.

<p>6. ??rstiden:</p>
Det er koldt at st?? p?? post om natten ??? is??r om vinteren. T??nk over temaet for posten i forhold til at kunne have udkl??dning p?? ud over et lag varmt t??j. Et beach party som kulisse bliver en kold forn??jelse om vinteren.

<p>7. Aktivt mandskab:</p>
Har I mandskab til det, er der sj??ldent nogen bedre kulisse end mennesker. Handler jeres aktivitet om en mordg??de, s?? lad et par stykker fra teamet g?? rundt som kriminalteknikere, uden nogen fast opgave ud over at skabe stemning. G??r plads til, at alle i teamet kan improvisere. Det er de sk??re id??er og sk??ve personligheder, man husker efter posten ??? og det er sjovere for teamet.



<p>8. Helhedsindtrykket:</p>
Fors??g at gennemg?? aktiviteten, som en deltager ville opleve den, og bem??rk, hvilke indtryk der bryder helheden. Det kan v??re sm?? ting, som at teamet har et par biler holdene lidt for t??t p?? middelalderaktiviteten, eller at der skal mere minestrimmel og et par advarselsblink rundt om den nedstyrtede rumraket, for at den ikke bliver alt for diskret.

<p>9. Interaktion:</p>
Lad deltagerne v??re en del af kulissen. Skal deltagerne k??re s??bekasserace eller l??be igennem en forhindringsbane, s?? giv dem hjelm p??, ogs?? selvom det ikke er en vild aktivitet. Det er sjovt og f??r aktiviteten til at virke langt mere gennemf??rt. Hvis man som deltager bliver udstyret med kn??klys og selvlysende maling, n??r man skal ind til festposten, f??ler man sig mere som en del af det, der foreg??r.</p>
   
  </div>
</div>

<div class="footer">
  <h2>created by Abdalla & Roudi.</p></h2>
</div>

</body>
</html>
