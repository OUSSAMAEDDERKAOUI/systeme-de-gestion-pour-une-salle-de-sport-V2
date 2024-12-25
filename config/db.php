<?php

class Database {
    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;
    private $pdo;

    
    public function __construct($host, $db, $user, $pass, $charset = 'utf8mb4') {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
        $this->charset = $charset;

        $this->connect();
    }

    private function connect() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}

?>

<!-- MySQL utilise des codes comme :

1045 : "Access denied for user" (Accès refusé pour l'utilisateur - erreur d'authentification).
2002 : "Connection refused" (Connexion refusée - le serveur n'est pas accessible).
42S02 : "Table not found" (Table introuvable - la table que vous essayez d'interroger n'existe pas). -->