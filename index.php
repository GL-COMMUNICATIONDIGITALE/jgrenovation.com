<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entreprise Julien Gras | Tous vos travaux de rénovation</title>
    <meta name="description" content="Gras Julien Entreprise de rénovation dans la région de Tôtes, effectuant tout type de rénovation, carrelage, maçonnerie, isolation, terrasses, plomberie et électricité..Devis Gratuit sur demande. Basé en Seine-maritime">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.Css">
    <script src="https://kit.fontawesome.com/17b8851c36.js" crossorigin="anonymous"></script>
   <!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?v=quarterly
        &key=1pDxocP_qNxckyFyDny37y0f65jw0ZiKz&callback=initMap">
</script>-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136436421-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-136436421-2');
    </script>
</head>

<body>
    <div class="loader" display="none"></div> <!--CHRGT DE LA PAGE-->

      <!---------------------NAVIGATION BAR MENU---------------------------->
    <header id="headerbar" class="topbar">
        <a href="#"><img src="img/logoju12.png" alt="logo julien gras entreprise"  class="logo"></a>
        <nav id="menu">
            <ul>
                <li><a href="#slideraccueil" class="bigsize">Accueil</a><a href="#slideraccueil" class="menurspv"><i class="fas fa-home"></i></a></li>
                <li><a href="#prestations" class="bigsize">Prestations</a><a href="#prestations" class="menurspv"><i class="fas fa-camera"></i></a></li>
                <li><a href="#contactform" class="bigsize">Contact</a><a href="#contactform" class="menurspv"><i class="fas fa-envelope"></i></a></li>     
            </ul>
        </nav>
    </header>

<!--<div class="clear"></div>-->

<!---------------------SLIDER ACCUEIL ---------------------------->

<div id="slideraccueil"> 
  <div id="opacity">
    <!--<img src="img/carrelage.jpg" srcset="img/carrelagepetit.jpg 600w" alt="carrelage faïence 76 renovation">-->
        <div class="textdiapo">
            <h1><span class="bigtitle">Un projet de rénovation en Normandie ?</span><br>Choisissez votre entrepreneur de confiance !</h1>
        </div>
        <div class="devis">
            <a href="#contactform"><input type="button" value="DEVIS GRATUIT"></a>
        </div>
  </div>
</div>
           
<div class="clear"></div>

<!--PARTIE PRESENTATION CHANTIERS REALISES PAR JULIEN GRAS-->
<div id="prestations">
    <div id="titrepresta">
        <h2>Mes Prestations</h2>
    </div>
</div>

<div class="clear"></div>

<div class="categories" id="liste">
    <ul>
        <li><button class="tablinks" id="defaultOpen" onclick="openTab('maçonnerie')">Maçonnerie</button></li>
        <li><button class="tablinks" onclick="openTab('essai')">Electricité</button></li>
        <li><button class="tablinks" onclick="openTab('plomberie')">Plomberie</button></li>
        <li><button class="tablinks" onclick="openTab('carrelage')">Carrelage & Faïences</button></li>
        <li><button class="tablinks" onclick="openTab('isolation')">Isolation</button></li>
        <li><button class="tablinks" onclick="openTab('terrasses')">Terrasses</button></li>
    </ul>
</div>
<div class="clear"></div>

<div class="main" class="tabcontent" id="maçonnerie">
    <div class="row">
      <div class="column">
        <div class="content">
          <figure>
            <img src="img/maçonnerietab2.jpg" class="list-image" width="250px" height="250px" alt="Mountains" style="width:100%">
            <figcaption>Légende associée</figcaption>
          </figure>
        </div>
      </div>
      <div class="column">
        <div class="content">
        <figure>
          <img src="img/maconnerie3redim.jpg" class="list-image" width="250px" height="250px"  alt="Lights" style="width:100%">
          <figcaption>Légende associée</figcaption>
        </figure>
      </div>
      </div>
      <div class="column">
        <div class="content">
          <figure>
            <img src="img/appuisredim.jpg" class="list-image" width="250px" height="250px"  alt="Nature" style="width:100%">
            <figcaption>Légende associée</figcaption>
          </figure> 
      </div>
      </div>
      <div class="column">
        <div class="content">
          <figure>
            <img src="img/maconnerie2rsz.jpg" class="list-image" width="250px" height="250px"  alt="Mountains" style="width:100%">
            <figcaption>Légende associée</figcaption>
          </figure>
        </div>
      </div>
    </div>
 

    <div class="textpresta">
        <p class="descripresta">
        Je réalise vos travaux de maçonnerie, comme l'ouverture de mur, le murage de portes/fenêtres,
        la construsction de vos cloisons (brique, agglos, plâtre, panneaux alvéolaires), la construsction
        d'escalier en bêton, vos appuis de fenêtres... Contactez-moi pour + d'informations.
        </p>
        <p class="descri-devis"><a class="btn">CONTACT</a></p> 
    </div>
    <div class="ba-slider">
        <div>
          <img src="img/placo1.jpg" width="200px" height="300px" alt="">
        </div>       
        <div class="resize">
        <img src="img/placo1avant.jpg" width="200px" height="300px" alt=""> 
        </div>
        <span class="handle"></span>
    </div>
    
</div> 
    
<!--main2 Carrelage/Faience--->

<div class="main" class="tabcontent" id="carrelage">
    <div class="row">
      <div class="column">
        <div class="content">
          <img src="img/carrelage1.jpg" class="list-image" width="250px" height="250px" alt="Mountains" style="width:100%">
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/carrelage6.jpg" class="list-image" width="250px" height="250px"  alt="Lights" style="width:100%">
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/carrelage4.jpg" class="list-image" width="250px" height="250px"  alt="Nature" style="width:100%">
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/carrelage5.jpg" class="list-image" width="250px" height="250px"  alt="Mountains" style="width:100%">
        </div>
      </div>
    </div>
 

    <div class="textpresta">
        <p class="descripresta">
        Je réalise tous vos travaux de carrelage sur support neuf ou en rénovation, à l'intérieur comme à l'extérieur. 
        (habillage de baignoire, crédence, douche à l'italienne, terrasses carrelées, mosaïque, faïence...).
        Contactez-moi pour plus d'informations!
        </p>
        <p class="descri-devis"><a class="btn">CONTACT</a></p> 
    </div>
    <div class="ba-slider">
      <img src="img/carrelagerecent6jpg.jpg" width="200px" height="300px" alt="">        
        <div class="resize">
        <img src="img/carrelagerecentavant.jpg" width="200px" height="300px" alt=""> 
        </div>
        <span class="handle"></span>
    </div>
</div> 
  
<!--main3 Terrasses--->

<div class="main" class="tabcontent" id="terrasses">
    <div class="row">
      <div class="column">
        <div class="content">
          <img src="img/terrasseapres.jpg" class="list-image" width="250px" height="250px" alt="Mountains" style="width:100%">
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/dalle.jpg" class="list-image" width="250px" height="250px"  alt="Lights" style="width:100%">
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/carrelage1.jpg" class="list-image" width="250px" height="250px"  alt="Nature" style="width:100%">
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="" class="list-image" width="250px" height="250px"  alt="Mountains" style="width:100%">
        </div>
      </div>
    </div>
 

    <div class="textpresta">
        <p class="descripresta">
        Je réalise vos travaux de carrelage, salle de bains, douche à l'italienne, terrasses carrelées, mosaique...
        </p>
        <p class="descri-devis"><a class="btn">CONTACT</a></p> 
    </div>
    <div class="ba-slider">
      <img src="img/carrelagemaison2.jpg" width="200px" height="300px" alt="">        
        <div class="resize">
        <img src="img/terrassemaisonavant.jpg" width="200px" height="300px" alt=""> 
        </div>
        <span class="handle"></span>
    </div>
</div> 

<!--main4 ISOLATION--->

<div class="main" class="tabcontent" id="isolation">
    <div class="row">
      <div class="column">
        <div class="content">
          <img src="img/placo1rsz2.jpg" class="list-image" width="250px" height="250px" alt="Mountains" style="width:100%">
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/sdb.jpg" class="list-image" width="250px" height="250px"  alt="Lights" style="width:100%;">
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/carrelage4.jpg" class="list-image" width="250px" height="250px"  alt="Nature" style="width:100%">
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/carrelage5.jpg" class="list-image" width="250px" height="250px"  alt="Mountains" style="width:100%">
        </div>
      </div>
    </div>
 

    <div class="textpresta">
        <p class="descripresta">
        Je réalise vos travaux de carrelage, salle de bains, douche à l'italienne, terrasses carrelées, mosaique...
        </p>
        <p class="descri-devis"><a class="btn">CONTACT</a></p> 
    </div>
    <div class="ba-slider">
      <img src="img/placo1.jpg" width="200px" height="300px" alt="">        
        <div class="resize">
        <img src="img/placo1avant.jpg" width="200px" height="300px" alt=""> 
        </div>
        <span class="handle"></span>
    </div>
</div> 

<!--main5 Electricite--->

<div class="main" class="tabcontent" id="essai">
    <div class="textpresta">
        <p class="descripresta">
        Mise aux normes de l'installation électrique
Remplacement de tableau électrique
Mise à la terre
Remplacement de disjoncteur
Dépannage électrique
Remplacement d'un interrupteur différentiel 30mA
Réparation d'interrupteur et de prise de courant
Installation de plafonnier, lustre ou suspension
Installation de radiateur électrique
Installation de luminaire
Ajout ou déplacement de prise de courant
        </p>
        <p class="descri-devis"><a class="btn">CONTACT</a></p> 
    </div>

    <div class="right" style="width:50%; float:right;">
      <img src="img/elec6.jpg" class="elec">
    </div>
</div> 
   

<!--main6 Plomberie--->

<div class="main" class="tabcontent" id="plomberie">

    <div class="textpresta">
        <p class="descripresta">
Votre artisan plombier installe, rénove et dépanne vos systèmes de plomberie et ce, quelle que soit votre demande : repérage de fuites d'eau, débouchage haute pression, rénovation de salle de bain, installation de douche à l'italienne, changement de chauffe-eau...
        </p>
        <p class="descri-devis"><a class="btn">CONTACT</a></p> 
    </div>
    <div class="right" style="width:50%; float:right;">
      <img src="img/plomberie.jpg" class="elec">
    </div>
</div> 
</div>
<div class="clear"></div>
<div class="backliste">
     <a href="#liste"><input type="button" value="Revenir à la liste"></a>
</div>

<!-------PARTIE FORMULAIRE DE CONTACT ET INFORMATIONS---------->
<div id="prestations">
    <div id="titrepresta">
        <h2>Contactez-moi</h2>
    </div>
</div>

<div class="clear"></div>

<div id="banniere">
    <div class="pubdevis">
    <div id="opacity2">
        <i class="far fa-clipboard"></i>
        <h3>Besoin d'un devis pour vos travaux ?</h3>
        <p>Pour tous vos travaux de <span class="plusgros">maçonnerie, isolation, électricité, plomberie, carrelage et d'aménagement extérieur</span>, besoin d’un renseignement ou d’un devis ?
          Appelez-moi ou écrivez-moi, je vous répondrai dans les meilleurs délais.</p>
    </div>
    </div>
</div>
<div class="logocheck" style="width:100%;text-align:center;">
    <i class="fas fa-check" style="font-size:90px;padding-top:30px;padding:0;"></i>
</div>
<div class="temoignages">
    <h3>Ils m'ont fait confiance ...</h3>
        <i class="fas fa-quote-left"></i>
        <i class="fas fa-quote-right"></i>
        <p class="quoteslide"><span class="quotes">"</span>Monsieur Gras fait preuve de professionnalisme et de perfectionnisme pour mes travaux d'agrandissement.
        Je ferai, sans hesitation, de nouveau appel à ses services pour de futurs projets.Louis.G<span class="quotes">"</span>
        </p>
        <p class="quoteslide"><span class="quotes">"</span>professionnalisme et rigueur dans le travail !<span class="quotes">"</span>
        </p>
        <p class="quoteslide"><span class="quotes">"</span>Nous avons fait appel à M.Gras pour la réalisation de notre terrasse.Il nous a donné 
        entière satisfaction. I.Delcourt<span class="quotes">"</span>
        </p>
</div>

<div class="clear"></div>

<div id="sectioncontact"> 
    <div id="contactform">
             <?php 
             if(array_key_exists('errors',$_SESSION)): ?>
            <div class="alert">
                <?= implode('<br>', $_SESSION['errors']); ?>
            </div>
            <?php    endif; ?>
      
            <?php 
            if(array_key_exists('success',$_SESSION)): ?>
            <div class="alertsuccess">
                Votre message a bien été envoyé ! 
            </div>
            <?php    endif; ?>
        <div class="contain">  
            <form id="contact" action="contact.php" method="post">
                <h3>Contact</h3>
                <h4>Une question, Un projet ? Contactez-moi pour établir le devis!</h4>
                    <fieldset>
                        <input placeholder="Nom" type="text" name="name" tabindex="1" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name']:'';?>" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Email" type="email" name="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Votre numéro de télephone" name="tel" type="text"  tabindex="3" required>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="Ecrivez votre message ici ..." tabindex="5" name="message" required><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message']:'';?></textarea>
                    </fieldset>
                    <fieldset>
                        <input type="checkbox" name="rgpd" value="rgpd" required>
                        <label for="rgpd"><h4 style="display:inline">En cochant cette case, j'affirme avoir pris connaissance de la politique de confidentialité du site</h4></label>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
                    </fieldset>
            </form>
        </div>
    </div>   
    <div id="coordonnees">
        <div id="titrepresta">
            <h3 class="titrecoord">Coordonnées</h3>
        </div>
        <div id="adresse1">
            <span>Fresnay-le-long (76)</span>
            <i class="fas fa-map-marker-alt"></i>
        </div>
        <div id="adresse">
            <a href="tel:+33623296993"><span>06.23.29.69.93</span></a>
            <i class="fas fa-phone"></i>
        </div>
        <div id="adresse">
            <span>ent.grasjulien@gmail.com</span>
            <i class="fas fa-at"></i>
        </div>
        <div id="adresse">
            <a href="https://www.facebook.com/julien.gras.104">
              <span>Joignez-moi sur Facebook</span>
              <i class="fab fa-facebook"></i>
            </a>
        </div>
    </div>  
</div>

<div class="clear"></div>

<div class="map">
    <iframe src="https://www.google.com/maps/d/embed?mid=1pDxocP_qNxckyFyDny37y0f65jw0ZiKz" scrolling="no" scroll="no" style="overflow: hidden;" width="100%" height="100%"></iframe>
</div>

<div class="clear"></div>

<!----------------------------FOOTER------------------------------>
<div id="footer">
    <a href="mentionslegales.html">Mentions légales</a><span> - Site réalisé par <a href="https://www.facebook.com/graslouis.conceptionweb/">Gras Louis</a></span>
    <p class="copy">COPYRIGHT 2020 - GRAS Julien entreprise - Maçonnerie, rénovation, isolation, électricité, plomberie - Haute-Normandie(76) - Dieppe/Rouen/Tôtes</p>
    <img src="img/logoju12.png">
</div>
<a id="scroll-top" class="scroll-top-right" href="#" style="display: block;"><span class="fa fa-angle-up" aria-label="Scroll to the top of the page"></span></a>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="preloader.js"></script>
<script src="lightbox.js"></script>
<script src="comparaison.js"></script>
<script src="quoteslide.js"></script>
<script>

function openTab(tabName) {
  var i;
  var x = document.getElementsByClassName("main");
  for(i = 0; i < x.length; i++) {
    x[i].style.display = "none";
    }
document.getElementById(tabName).style.display = "block";

}
document.getElementById("defaultOpen").click();
$('.tablinks').click(function(){
  $('.tablinks').removeClass('active');
    $(this).toggleClass('active');
    });
$("#defaultOpen").addClass('active');
</script>
</body>
</html>

<?php 
unset($_SESSION['inputs']);
unset($_SESSION['errors']); 
unset($_SESSION['success']);
?>
