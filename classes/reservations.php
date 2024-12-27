<?php
    require_once __DIR__.'./../config/db.php';

    class Reservation{

        // PROPERTIES
        private $id;
        private $id_membre;
        private $id_activite;
        private $date;
        private $statut;
        private $database ;

        // CONSTRUCTOR

        public function __construct($id, $id_membre, $id_activite, $date, $statut){
            $this->id = $id;
            $this->id_membre = $id_membre;
            $this->id_activite = $id_activite;
            $this->date = $date;
            $this->statut = $statut;
            $this->database = new Database();
        }


        // GETTERS

        public function getId(){
            return $this->id;
        }

        public function getIdMembre(){
            return $this->id_membre;
        }

        public function getIdActivite(){
            return $this->id_activite;
        }
        
        public function getDate(){
            return $this->date;
        }

        public function getStatut(){
            return $this->statut;
        }



        // SETTERS

        public function setId($id){
            $this->id = $id;
        }

        public function setIdMembre($id_membre){
            $this->id_membre = $id_membre;
        }

        public function setIdActivite($id_activite){
            $this->id_activite = $id_activite;
        }

        public function setDate($date){
            $this->date = $date;
        }

        public function setStatut($statut){
            $this->statut = $statut;
        }


        // METHODS
        public function allReservations(){
            try {
                $stmt = $this->database->getConnection()->prepare("SELECT * 
                                            FROM `users` U
                                            JOIN `reservations` R ON R.id_membre = U.id_user
                                            JOIN `activites` A ON A.id_activite = R.id_activite;");
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ($result) {
                    return $result;
                } else {
                    throw new Exception("Aucune réservation trouvée.");
                }
            } catch (Exception $e) {
                echo "Erreur lors de l'affichage des réservations: " . $e->getMessage();
                return null;
            }
        }

        public function confirmedReservation(){
            try {
                $stmt = $this->database->getConnection()->prepare("SELECT COUNT(reservations.id_reservation) AS nbr_reservations_confirme
                                                                    FROM reservations
                                                                    WHERE reservations.statut = 'Confirmé';");
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($result) {
                    return $result;
                } else {
                    throw new Exception("Aucune réservation confirmée trouvée.");
                }
            } catch (Exception $e) {
                echo "Erreur : ". $e->getMessage();
                return null;
            }
        }

        public function rejectedReservation(){
            try {
                $stmt = $this->database->getConnection()->prepare("SELECT COUNT(reservations.id_reservation) AS nbr_reservations_annule
                                                                    FROM reservations
                                                                    WHERE reservations.statut = 'Annulé';");
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($result) {
                    return $result;
                } else {
                    throw new Exception("Aucune réservation annulée trouvée.");
                }
            } catch (Exception $e) {
                echo "Erreur : ". $e->getMessage();
                return null;
            }
        }

        public function nbrMembersReserved(){
            try {
                $stmt = $this->database->getConnection()->prepare("SELECT COUNT(reservations.id_membre) AS nbr_membres
                                                                FROM reservations
                                                                GROUP BY reservations.id_membre");
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($result) {
                    return $result;
                } else {
                    throw new Exception("Aucun membre trouvé.");
                }
            } catch (Exception $e) {
                echo "Erreur : ". $e->getMessage();
                return null;
            }
        }

        public function mostReserved(){
            try {
                $stmt = $this->database->getConnection()->prepare("SELECT activites.nom_activite, COUNT(reservations.id_activite) AS nbr_reservation
                                                                FROM activites JOIN reservations ON activites.id_activite = reservations.id_activite
                                                                GROUP BY activites.nom_activite
                                                                ORDER BY nbr_reservation DESC
                                                                LIMIT 3;");
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($result) {
                    return $result;
                } else {
                    throw new Exception("Aucune activité trouvée.");
                }
            } catch (Exception $e) {
                echo "Erreur : ". $e->getMessage();
                return null;
            }
        }
    }
?>