<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <!-- Définition de l'encodage -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <!-- Titre de la page -->
        <title>Agence Kepler 186-f</title>
        
        <!-- Liaison vers la feuille de style -->
        <link rel="stylesheet" href="css/kepler.css" type="text/css"/>

    </head>

    <body>

        <!-- En-tête -->
        <div id="header">
            Agence Kepler 186-f
            <img src="images/planete.jpg"></img>
        </div>

        <!-- Contenu -->
        <div id="content">
            
            <!-- Paragraphe de présentation -->
            <p>L'agence Kepler 186-f vous propose un voyage vers la fameuse planète Kepler 186-f.</p>
            
            <!-- Titre de niveau 1 -->
            <h1>Nos offres :</h1>
            
            <!-- Liste à puces -->
            <ul>
                <li><a id="gen" href="registration.php?type=generation" onmouseover="processLi(this)">Forfait 100 générations (5000 ans)</a></li>
                <li><a id="hyp" href="registration.php?type=hypersleep" onmouseover="processLi(this)">Forfait hyper sommeil (5000 ans)</a></li>
                <li><a id="lig" href="registration.php?type=lightspeed" onmouseover="processLi(this)">Forfait hyper sommeil et vitesse de la lumière (500 ans)</a></li>
            </ul>
            
        </div>
        
        <!-- Boite contenant (ou non) une image de l'offre -->
        <div id="imageOffre">
            <img id="image" src=""></img>
        </div>

        <!-- Lien vers le fichier javascript -->
        <script type="text/javascript" src="js/kepler.js"></script>

    </body>

</html>
