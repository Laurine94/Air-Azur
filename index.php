<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/cssGeneral.css" rel="sylesheet" type="text/css"/>
    </head>

    <?php
    if (!isset($_REQUEST['action']))
        $action = 'accueil';
    else
        $action = $_REQUEST['action'];

// vue qui crée l’en-tête de la page
    include("vues/v_entete.php");

    switch ($action) {
        case 'accueil':
            // vue qui crée le contenu de la page d’accueil
            include("vues/v_accueil.php");
            break;
        case 'voirVols':
            // vue qui crée le contenu de la page d’accueil
            include("vues/v_voirVols.php");
            break;
        case 'voirReservations':
            // vue qui crée le contenu de la page d’accueil
            include("vues/v_voirReservation.php");
            break;
    }

// vue qui crée le pied de page
    include("vues/v_pied.php");
    ?>
</html>