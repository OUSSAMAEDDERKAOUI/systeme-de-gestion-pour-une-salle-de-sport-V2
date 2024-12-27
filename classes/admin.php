<?php
require_once __DIR__ .'/users.php';

class Admin extends User{
     
    public function allMembers(){
        $stmt = $this->database->getConnection()->prepare("SELECT * FROM users WHERE role='membre' ;");

        if (!$stmt->execute()) {
            echo " Erreur lors de L'affichage des membres " . implode(", ", $stmt->errorInfo());
        }    
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

        if ($result) {
            return $result;
        }else{
            echo "Erreur lors de la récupération des membres hhhhhh.";
            return null;;
        }
    }
     
    public function confirmReservation($id){
        $stmt = $this->database->getConnection()->prepare("UPDATE  reservations SET reservations.statut='confirmé' WHERE reservations.id_reservation = :id ");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        if ($stmt->execute()) {
            echo "La confirmation de la reservation a été realisée avec succès.";
        } else {
            echo "Erreur lors de La confirmation de la  reservation" . implode(", ", $stmt->errorInfo());
        }
    }
     

}

?>