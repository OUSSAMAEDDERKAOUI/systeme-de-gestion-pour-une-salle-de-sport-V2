<?php
require __DIR__ .'/users.php';

class Membre extends User{
    public $path = "./";
    
    // SIGNUP FUNCTION
    public function signup($firstName, $lastName, $phone, $email, $password) {
        if (empty($firstName) || empty($lastName) || empty($phone) || empty($email) || empty($password)) {
            return "Tous les champs sont obligatoires";
        }

        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->database->getConnection()->prepare($sql);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return "User Already Exist";
        }
    
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        try {
            $stmt = $this->database->getConnection()->prepare("INSERT INTO users (prenom, nom, phone, email, password) VALUES (:prenom, :nom, :phone, :email, :pw)");

            $stmt->bindParam(":prenom", $firstName, PDO::PARAM_STR);
            $stmt->bindParam(":nom", $lastName, PDO::PARAM_STR);
            $stmt->bindParam(":phone", $phone, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":pw", $hashedPassword, PDO::PARAM_STR);
    
            $stmt->execute();
    
            header("location: {$this->path}/login.php");
    
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

}

?>