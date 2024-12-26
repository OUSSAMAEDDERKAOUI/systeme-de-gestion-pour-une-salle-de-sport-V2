<?php
require __DIR__.'/../config/db.php';
// include __DIR__ .'/admin.php' ;

class User{
    protected int $id;
    protected string  $nom;
    protected string $prenom;
    protected string $telephone;
    protected string $email;
    protected string $password;
    protected string $role;
    protected $database ;


    public function __construct($new_nom, $new_prenom, $new_telephone, $new_email, $new_password, $role){
        $this->nom = $new_nom;
        $this->prenom = $new_prenom;
        $this->telephone = $new_telephone;
        $this->email = $new_email;
        $this->password = password_hash($new_password, PASSWORD_DEFAULT);
        $this->role = $role;
        $this->database= new Database(); 
    }

    ////----------> getters :

    function get_id():int{
        return $this->id;

    }
    function get_nom():string{
        return $this->nom;

    } 
    function get_prenom():string{
        return $this->prenom;

    } 
    function get_telephone():string{
        return $this->telephone;

    } 
    function get_email():string{
        return $this->email;

    } 
    function get_password():string{
        return $this->password;

    }
    function get_role():string{
        return $this->role;

    }

    ///------> setters

    function set_nom(string $new_nom):void{
        $this->nom=$new_nom;
    }
    function set_id(int $new_id):void{
        $this->id=$new_id ;
    }
    function set_prenom(string $new_prenom):void{
        $this->prenom=$new_prenom;
    }
    function set_telephone(string $new_telephone):void{
        $this->telephone=$new_telephone ;
    }
    function set_email(string $new_email):void{
        $this->email=$new_email;
    }
    function set_password(string $new_password):void{
        $this->password=password_hash($new_password,PASSWORD_DEFAULT);
    }


    // LOGIN FUNCTION
    public function login($email, $password) {
        $stmt = $this->database->getConnection()->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }

    // READ USER INFOS
    public function showInfos($id) {
        $stmt = $this->database->getConnection()->prepare("SELECT * FROM users WHERE id_user = :id");
    
        $stmt->bindValue(":id", (int)$id, PDO::PARAM_INT); 
    
        $stmt->execute();
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC); 
    
        if ($result) {
            return $result;
        } else {
            return null; 
        }
    }

    // READ ACTIVITIES FUNCTION
    public function showActivities() {
        $stmt = $this->database->getConnection()->prepare("SELECT * FROM activites");
    
        $stmt->execute();
    
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    
        if ($result) {
            return $result;
        } else {
            return null; 
        }
    }
    public function reservationCancel($id){
        $stmt = $this->database->getConnection()->prepare("UPDATE  reservations SET reservation.statut='Annulé' WHERE reservations.id_reservation = :id ");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        $reservationCancel= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $reservationCancel ;
     }

}
 

?>
