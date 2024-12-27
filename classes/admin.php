<?php
require_once __DIR__ .'/users.php';
// require __DIR__ .'/../config/db.php';

class Admin extends User{
     
    public function allMembers(){
        $stmt = $this->database->getConnection()->prepare("SELECT users.prenom, users.nom , activites.nom_activite, reservations.date_reservation ,reservations.statut
                                                            FROM reservations 
                                                                 JOIN users on users.id_user=reservations.id_membre 
                                                                 JOIN activites on reservations.id_activite= activites.id_activite  ;");

        if ($stmt->execute()) {
            echo "L'affichage des membres a été realisée avec succès.";
        } else {
            echo "Erreur lors de L'affichage des membres " . implode(", ", $stmt->errorInfo());
        }
        $members = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $members;
    }
     
     public function confirmReservation($id){
        $stmt = $this->database->getConnection()->prepare("UPDATE  reservations SET reservations.statut='Confirmé' WHERE reservations.id_reservation = :id ");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        if ($stmt->execute()) {
            echo "La confirmation de la reservation a été realisée avec succès.";
        } else {
            echo "Erreur lors de La confirmation de la  reservation" . implode(", ", $stmt->errorInfo());
        }        $confirmReservation= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return  $confirmReservation ;
     }
     

}

?>