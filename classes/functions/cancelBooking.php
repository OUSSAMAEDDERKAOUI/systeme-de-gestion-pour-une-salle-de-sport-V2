<?php
    require_once '../users.php';

    $id=$_GET['id'];

    $user = new User("","","","","","");

    $user->reservationCancel($id);

    header('Location: ../../views/dashboard_admin.php');

?>