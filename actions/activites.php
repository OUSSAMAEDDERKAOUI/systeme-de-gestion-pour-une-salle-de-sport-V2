<?php
class Activite {
    public $nom_activite;
    public $description;
    public $capacite ;
    public $date_debut ;
    public $date_fin ;
    public $disponibilite ;
    protected $database ;

    public function __construct($nom_activite, $description, $capacite, $date_debut, $date_fin, $disponibilite){

        $this->nom_activite=$nom_activite;

        $this->description=$description;

        $this->capacite=$capacite;

        $this->date_debut=$date_debut;

        $this->date_fin=$date_fin;

        $this->disponibilite=$disponibilite;

        $this->database=new Database();
    }
    public function addActivite(){

        $sql="INSERT INTO activites( nom_activite, description, capacite, date_debut, date_fin, disponibilite) 
        VALUES (:nom_activite,:description,:capacite,:date_debut,:date_fin,:disponibilite)";

        $stmt=$this->database->getConnection()->prepare($sql);

        $stmt->bindParam(':nom_activite',$this-> nom_activite, PDO::PARAM_STR);
        $stmt->bindParam(':description', $this-> description, PDO::PARAM_STR);
        $stmt->bindParam(':capacite',$this-> capacite, PDO::PARAM_INT); 
        $stmt->bindParam(':date_debut',$this-> date_debut ,PDO::PARAM_STR); 
        $stmt->bindParam(':date_fin',$this-> date_fin,PDO::PARAM_STR); 
        $stmt->bindParam(':disponibilite',$this-> disponibilite , PDO::PARAM_BOOL); 

        if ($stmt->execute()) {
            echo "L'activité a été ajoutée avec succès.";
        } else {
            echo "Erreur lors de l'ajout de l'activité: " . implode(", ", $stmt->errorInfo());
        }
    }
    
    public function modifyActivite($id){
            $sql = "UPDATE activites 
                    SET `nom_activite` = :nom_activite,
                        `description` = :description,
                        `capacite` = :capacite,
                        `date_debut` = :date_debut,
                        `date_fin` = :date_fin,
                        `disponibilite` = :disponibilite
                    WHERE id_activite = :id_activite;";
    
            $stmt = $this->database->getConnection()->prepare($sql);
    
            $stmt->bindParam(':nom_activite',$this-> nom_activite, PDO::PARAM_STR);
            $stmt->bindParam(':description', $this-> description, PDO::PARAM_STR);
            $stmt->bindParam(':capacite',$this-> capacite, PDO::PARAM_INT); 
            $stmt->bindParam(':date_debut',$this-> date_debut ,PDO::PARAM_STR); 
            $stmt->bindParam(':date_fin',$this-> date_fin,PDO::PARAM_STR); 
            $stmt->bindParam(':disponibilite',$this-> disponibilite , PDO::PARAM_BOOL); 

            if ($stmt->execute()) {
                echo "L'activité a été mise à jour avec succès.";
            } else {
                echo "Erreur lors de la mise à jour de l'activité: " . implode(", ", $stmt->errorInfo());
            }    

    }

    public function deleteActivite($id){

        $sql="DELETE FROM activites WHERE activites.id_activite=:id";

        $stmt=$this->database->getConnection()->prepare($sql);

        $stmt->bindParam(":id",$id,PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "L'activité a été supprimée avec succès.";
        } else {
            echo "Erreur lors de la suppression de l'activité: " . implode(", ", $stmt->errorInfo());
        }
    }
}

?>


<!-- try {
    $nouvelleActivite = new Activite('Nom de l activité', 'Description de l activité', 50, '2023-10-01', '2023-10-10', 'Oui');
    $nouvelleActivite->addActivite();
} catch (Exception $e) {
    echo "Erreur: " . $e->getMessage();
} -->