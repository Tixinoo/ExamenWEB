<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <!-- Définition de l'encodage -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <!-- Titre de la page -->
        <title>Agence Kepler 186-f - <?php echo $_GET["type"] ?></title>

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

            <!-- Titre de niveau 1 -->
            <h1>
                <?php
                    /* Soit le type se trouve dans le tableau $_GET, soit dans le tableau
                     * $_POST. La justification de ce choix se trouve en commentaires
                     * dans le formulaire (lignes 64-67).
                     */
                    if (isset($_GET["type"])) {
                        echo ucfirst($_GET["type"]);
                    } else if (isset($_POST["type"])){
                        echo ucfirst($_POST["type"]);
                    }
                ?>
            </h1>

            <!-- Titre de niveau 2 -->
            <h2>Inscription</h2>

            <!-- Formulaire d'inscription -->
            <form action="registration.php" method="POST">
                <div class="block">
                    <span class="label">Nom :</span>
                    <input type="text" name="nom" size="30"/>
                </div>
                <div class="block">
                    <span class="label">Adresse email :</span>
                    <input type="mail" name="mail" size="30"/>
                </div>
                <div class="block">
                    <span class="label">Adresse postale :</span>
                    <input type="text" name="adresse" size="30"/>
                </div>
                <div class="block">
                    <input type="submit" value="Envoyer"/>
                </div>
                <!-- Afin de transmettre avec le formulaire l'offre choisi, on utilise un 'input' de type 'hidden'.
                     Ainsi, le type sera transmis à l'envoi du formulaire et on pourra l'afficher dans tous les cas.
                     Une autre solution aurait été de continuer de l'ajouter dans le lien (et donc de le passer dans
                     l'action du formulaire, pour qu'il continue d'être présent dans le tableau $_GET.-->
                <input type="hidden" name="type" value="<?php echo $_GET["type"] ?>"/>
            </form>
            
        <?php
        // Affichage du message en fonction de l'offre choisi
        if (isset($_POST)) {
            if (isset($_POST["nom"])) {
                // On switch sur le type pour afficher le bon message
                switch ($_POST["type"]) {
                    case "generation":
                        echo "Votre titre de transport sera envoyé à votre descendance.";
                        break;
                    case "hypersleep":
                        echo "Un formulaire de choix de votre hyper-lit vous a été envoyé par email.";
                        break;
                    case "lightspeed":
                        echo "Votre navette vous attends devant chez vous.";
                        break;
                }
            }
        }
        ?>

        </div>

        <!-- Lien vers le fichier javascript -->
        <script type="text/javascript" src="js/kepler.js"></script>

    </body>

</html>
