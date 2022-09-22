<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idUtilisateur = $_SESSION['idUtilisateur'];
switch ($action) {
    case 'voirValiderFrais': {
            $lesVisiteurs = $pdo->getVisiteurs();
            $lesMois = $pdo->getLesMoisDisponibles('a55');
            include("vues/v_validerFrais.php");
        }
}
$lesVisiteurs = $pdo->getVisiteurs();
