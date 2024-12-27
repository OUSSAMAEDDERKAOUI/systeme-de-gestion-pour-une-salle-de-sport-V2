<?php
echo 'holaaaaaaaaaaa';
require_once '../membre.php';

$user= new User("","","","","","");

$id_reservation= $_GET['id'];
echo $id_reservation;
$user->reservationCancel($id_reservation);




header('Location: ../../views/dashboard_membre.php');

?>