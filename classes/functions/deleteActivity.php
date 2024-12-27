<?php
require_once  "../activites.php";

$id = $_GET['id'];

$activite = new Activite("", "", "", "", "", "");

$activite->deleteActivite($id);

header("Location: ../../views/dashboard_admin.php");

?>