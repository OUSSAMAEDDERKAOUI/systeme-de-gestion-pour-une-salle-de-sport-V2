<?php
require_once '../admin.php';
$Admin= new Admin("","","","","","");
$id_reservation= $_GET['id'];

$Admin->confirmReservation($id_reservation);


header('Location: ../../views/dashboard_membre.php');

?>