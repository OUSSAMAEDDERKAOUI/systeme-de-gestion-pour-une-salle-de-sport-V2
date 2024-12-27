<?php
require_once '../membre.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['signup'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $membre= new Membre("","","","","","");

        $membre->signup($prenom,$nom,$phone,$email,$password);
    }else{
        echo "failed hhhhh";
    }
}else{
    echo "failed REQUEST";
}



?>