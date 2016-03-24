<?php
    $name = $_GET["name"];
    $thema= $_GET["thema"];
    $cake= $_GET["cake"];
    $mail = $_GET["mail"];

    // Mail functie 
    if (isset $_GET["name"]){
       
        mail($mail,"Fondanti Order","
        Hierbij een bevesteging van uw bestelling:
    
        Thema: " + $thema + 
        "Cake: " + $cake + ,Beste " + $name + ");
    }

?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="trouwtaarten, trouwen, taart, kindertaart, cupcakes, feest, custom, mooi, handgemaakt, kwaliteit, lekker, heerlijk, fondanti, ijlst, friesland">
    <meta name="description" content="Fondanti maakt unieke taarten en cupcakes die er niet alleen fantastisch uit zien maar ook heerlijk smaken.">
    <meta id="myViewport" name="viewport" content="width=device-width, initial-scale=1">

    <title>Fondanti - Fabulous cakes</title>

    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/fondanti.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div id="top-header">
        <div class="content-center">
            <div id="header-logo"><img src="img/fondanti-logo.png" alt="Fondanti logo"/></div>
            <div id="header-phone-number"><p><a href="order.cshtml"><img src="img/image.png" alt="Bestellen"></a><a href="http://www.facebook.com/fondanti"><img src="img/facebook_logo.png" alt="Fondanti on Facebook"/></a><a href="tel:+31616064485"><img src="img/white_phone.png" alt="white phone"/><span>0616064485</span></a></p></div>
        </div>
    </div>

    <div class="content-box" id="fondanti-content-box">
        <div class="main-background-image" id="fondanti-main-background"><img src="img/bg_verjaardag_taart_bep.jpg" alt="verjaardagstaart"/></div>
        <div class="content-center">
            <div class="text-box" id="fondanti-text">
                <h2>Fondanti</h2>
                <p>Fondanti maakt unieke taarten en cupcakes die er niet alleen fantastisch uit zien maar ook heerlijk smaken.</p>
                <p>Elke taart is uniek en <a href="https://www.facebook.com/fondanti/photos_albums">alles is mogelijk.</a></p>
            </div>
        </div>
    </div>

    <div class="content-box" id="wedding-cake-content-box">
        <div class="main-background-image" id="wedding-cake-main-background"><img src="img/bg_wedding_cake.jpg" alt="trouwtaart"/></div>
        <div class="content-center">
            <div class="text-box" id="wedding-cake-text">
                <h2>Trouwtaarten</h2>
                <p>De mooiste taart voor de mooiste dag. Onze trouwtaarten zijn niet alleen om naar te kijken maar ook om van te smullen.</p>
                <p>Alles is mogelijk: van strak tot extravagant en van Champagneroom met verse frambozen tot gele room met Oreo vulling.</p>
            </div>
        </div>
    </div>

    <div class="content-box" id="kids-cake-content-box">
        <div class="main-background-image" id="kids-cake-main-background"><img src="img/bg_kindertaart.jpg" alt="Princessen kindertaart"/></div>
        <div class="content-center">
            <div class="text-box" id="kids-cake-text">
                <h2>Kindertaarten</h2>
                <p>Elk kind heeft zijn eigen droom. Wij maken van deze droom een mooie taart. Niks is te gek: een <a href="https://www.facebook.com/media/set/?set=a.265948366906727.1073741848.149619215206310&type=3">stoere Troetelbeertjes taart</a>, <a href="https://www.facebook.com/media/set/?set=a.287998528035044.1073741857.149619215206310&type=3">een piratentaart met schatkaart</a>, <a href="https://www.facebook.com/media/set/?set=a.280738755427688.1073741853.149619215206310&type=3">prinsessen</a>, <a href="https://www.facebook.com/media/set/?set=a.270813389753558.1073741849.149619215206310&type=3">zeemeerminnen</a>, etc.</p>
                <p>De taarten zijn genoeg voor 20 tot 25 stukken maar kunnen op verzoek groter gemaakt worden. Glutenvrij behoort ook tot de opties.</p>
            </div>
        </div>
    </div>

    <div class="content-box" id="workshops-content-box">
        <div class="main-background-image" id="workshops-main-background"><img src="img/bg_workshops.jpg" alt="Workshops"/></div>
        <div class="content-center">
            <div class="text-box" id="workshops-text">
                <h2>Workshops</h2>
                <p>Wil je je eigen gemaakte taarten een keer versieren met een mooie topper van fondant maar weet je niet waar je moet beginnen? Kom dan naar een workshop van Fondanti! Tijdens de workshop leer je alle tips en tricks voor het maken van de mooiste toppers. Figuurtjes, dieren, objecten, alles is mogelijk. Neem een foto mee om na te maken of werk aan bekende figuurtjes zoals Nijntje of Woezel en Pip.</p>
                <p>Al het materiaal is aanwezig en je gaat naar huis met je eigen gemaakte topper.</p>
                <p>De workshop duurt ongeveer 2 uur, is voor 4 tot 6 personen en kost v.a. &#8364;35,- per persoon. Bij workshops op locatie worden reiskosten in rekening gebracht.</p>
            </div>
        </div>
    </div>

    <div class="content-box" id="cupcakes-content-box">
        <div class="main-background-image" id="cupcakes-main-background"><img src="img/bg_cupcakes.jpg" alt="Boerderij cupcakes"/></div>
        <div class="content-center">
            <div class="text-box" id="cupcakes-text">
                <h2>Cupcakes</h2>
                <p>Mini taartjes waar iedereen individueel van kan genieten. Een leuke variatie op de 'standaard' trouwtaart of gewoon leuk om iemand kado te geven.</p>
                <p>Ook met <a href="https://www.facebook.com/media/set/?set=a.223874931114071.1073741843.149619215206310&type=3">onze cupcakes</a> is elke topping en cake variant mogelijk. Red Velvet, Carrot Cake, etc.</p>
            </div>
        </div>
    </div>

    <div class="content-box" id="feesttaart-content-box">
        <div class="main-background-image" id="feesttaart-main-background"><img src="img/bg_feesttaart.jpg" alt="Feesttaart"/></div>
        <div class="content-center">
            <div class="text-box" id="feesttaart-text">
                <h2>Feesttaarten</h2>
                <p>Bij een groot feest of jubileum hoort een mooie taart.</p>
                <p>Een verjaardagstaart voor iemand die helemaal gek is van <a href="https://www.facebook.com/media/set/?set=a.254901334678097.1073741846.149619215206310&type=3">schaatsen</a>. Een taart omdat iemand voor het werk naar <a href="https://www.facebook.com/media/set/?set=a.161848027316762.1073741830.149619215206310&type=3">Aruba</a> vertrekt. Of gewoon iemand die de <a href="https://www.facebook.com/media/set/?set=a.285050018329895.1073741856.149619215206310&type=3">lente wil vieren</a>.</p>
            </div>
        </div>
    </div>

    <div class="content-box" id="contactus-content-box">
        <div class="main-background-image" id="contactus-main-background"><img src="img/bg_contact.jpg" alt="bijtjes lente taart"/></div>

        <div class="content-center">
            <div class="text-box" id="contactus-text">
                <h2>Neem contact op</h2>
                <p>Fondanti<br/>IJlst</p>
                <p><img src="img/white_phone.png" width="34" alt="white phone"/><a href="tel:+31616064485">0616064485</a></p>
                <p><img src="img/email_icon.png" alt="email icon"/><a href="javascript:void(0);" class="email-link obfuscate">ten.sneleiw@cin</a></p>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/fondanti.js"></script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-39370485-1', 'auto');
      ga('send', 'pageview');
    
    </script>
</body>
</html>

