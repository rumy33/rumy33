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
    <h2>Tjek om din e-mail overholder kravene</h2>

<div class="container">  
  <form id="contact" <a href="mailto:email@address.com?subject=Hello world&body=Line one%0DLine two"
 method="post">

    <fieldset>
      <input placeholder="indsæt din E-mail" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  tabindex="2" required minlength="7" maxlength="30">
    </fieldset>
   
   
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">tjek</button>
    </fieldset>
  </form>
</div>
  </div>
</div>

<div class="footer">
  <h2>created by Abdalla & Roudi.</p></h2>
</div>

</body>
</html>
