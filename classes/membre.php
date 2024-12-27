<?php
require_once __DIR__ .'/users.php';

class Membre extends User{
    
    // SIGNUP FUNCTION
    public function signup($firstName, $lastName, $phone, $email, $password) {
        if (empty($firstName) || empty($lastName) || empty($phone) || empty($email) || empty($password)) {
            echo "Tous les champs sont obligatoires";
        }

        
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->database->getConnection()->prepare($sql);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        
        if($stmt->rowCount() > 0){
            echo "User Already Exist";
        }
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        try {
            echo "start !<br>";
            $test = $this->database->getConnection();
            echo "db !<br>";
            $stmt = $test->prepare("INSERT INTO users (prenom, nom, telephone, email, password) VALUES (:prenom, :nom, :phone, :email, :pw)");
            echo "hash !<br>";
            $stmt->bindParam(":prenom", $firstName, PDO::PARAM_STR);
            $stmt->bindParam(":nom", $lastName, PDO::PARAM_STR);
            $stmt->bindParam(":phone", $phone, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":pw", $hashedPassword, PDO::PARAM_STR);
    
            $stmt->execute();
    
            header("location: ../../views/login.php");
    
        } catch (PDOException $e) {
            return "Erreur lors de l'inscription : " . $e->getMessage();
        }
    }


    // BOOKING FUNCTION
    public function bookActivity($id_membre, $id_activity, $date){
        if (empty($id_membre) || empty($id_activity) || empty($date)) {
            return "Tous les champs sont obligatoires";
        }
    
        try {
            $stmt = $this->database->getConnection()->prepare("INSERT INTO reservations(id_membre, id_activite, date_reservation) VALUES (:membre, :activity, :book_date)");
    
            $stmt->execute([
                ':membre' => $id_membre,
                ':activity' => $id_activity,
                ':book_date' => $date
            ]);
    
            return "Réservation Effectué Avec Succées"; 
    
        } catch (PDOException $e) {
            return "Erreur lors de la Réservation : " . $e->getMessage();
        }
    }

    public function allReservationsMembre($id){
            $stmt = $this->database->getConnection()->prepare("SELECT * 
                                        FROM users U
                                        JOIN reservations R ON R.id_membre = U.id_user
                                        JOIN activites A ON A.id_activite = R.id_activite
                                        WHERE id_membre=:id;");
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        
            if ($stmt->execute()) {
                // echo "La selection des reservations a été realisée avec succès.";
            } else {
                echo "Erreur lors de La selection des reservations  reservation" . implode(", ", $stmt->errorInfo());
            }   
                return $stmt;
            
        // } catch (Exception $e) {
        //     echo "Erreur lors de l'affichage des réservations: " . $e->getMessage();
        //     return null;
        // }
    

}
}

?>