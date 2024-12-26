<?php
require __DIR__ .'/users.php';
// require __DIR__ .'/../config/db.php';

class Admin extends User{
     
    public function allMembers(){
        $stmt = $this->database->getConnection()->prepare("SELECT users.prenom, users.nom , activites.nom_activite, reservations.date_reservation ,reservations.statut
                                                            FROM reservations 
                                                                 JOIN users on users.id_user=reservations.id_membre 
                                                                 JOIN activites on reservations.id_activite= activites.id_activite  ;");

        $stmt->execute();

        $members = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $members;
    }
     
     public function confirmReservation($id){
        $stmt = $this->database->getConnection()->prepare("UPDATE  reservations SET reservation.statut='Annulé' WHERE reservations.id_reservation = :id ");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        $confirmReservation= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return  $confirmReservation ;
     }
     

}

?>