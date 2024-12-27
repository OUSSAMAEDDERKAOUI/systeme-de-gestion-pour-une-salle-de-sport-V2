<?php
session_start();
require_once '../membre.php';
$membre=new Membre("","","","","","");
$id_membre=  $_SESSION['user_id'];
$id_activity=$_POST['select-activity'];
$date=$_POST['date'];
$membre->bookActivity($id_membre, $id_activity, $date);
header('Location: ../../views/dashboard_membre.php');

?>