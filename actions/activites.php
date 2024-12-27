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
        $stmt->bindParam(':nom_activite', $nom_activite, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':capacite', $capacite, PDO::PARAM_INT); 
        $stmt->bindParam(':date_debut', $date_debut ,PDO::PARAM_STR); 
        $stmt->bindParam(':date_fin', $date_fin,PDO::PARAM_STR); 
        $stmt->bindParam(':disponibilite', $disponibilite , PDO::PARAM_BOOL); 
        $stmt->execute();

    }
}

?>