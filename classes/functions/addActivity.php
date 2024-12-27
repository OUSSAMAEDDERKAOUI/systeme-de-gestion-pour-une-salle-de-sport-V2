<?php
require_once  "../activites.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['save'])) {
        $nom_activite = $_POST['activity-name'];
        $description = $_POST['description'];
        $capacite = $_POST['capacite'];
        $date_debut = $_POST['start-date'];
        $date_fin = $_POST['end-date'];

        $activite = new Activite($nom_activite, $description, $capacite, $date_debut, $date_fin, 1);
        $activite->addActivite();
        header('Location: ../../views/dashboard_admin.php');
    } else {
        echo "Invalid request method.";
    }
} else {
    echo "Invalid request method.";
}
?>