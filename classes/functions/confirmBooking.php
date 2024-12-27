<?php
    require_once '../admin.php';

    $id=$_GET['id'];

    $admin = new Admin("","","","","","");

    $admin->confirmReservation($id);

    header('Location: ../../views/dashboard_admin.php');

?>