<?php

class Database {

    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $pdo;

    public function __construct($db_name, $db_host = "localhost", $db_user = "zoe", $db_pass ="dykehqb9") {
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }

    private function getPDO(){
        if($this->pdo === NULL){
            try {
                $dsn = "mysql:host=$this->db_host;dbname=$this->db_name";
                $this->pdo = new PDO($dsn, $this->db_user, $this->db_pass);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "Database error: " . $e->getMessage();
                throw $e;
            }
        }
        return $this->pdo;
    }
}
//POUR FAIRE UNE REQUETE SQL
try {
            $sql = "INSERT INTO tweet (id_user, content) VALUES (:id_user, :content)";
            $statement = $this->getPDO()->prepare($sql);
            $statement->bindParam(':id_user', $userId);
            $statement->bindParam(':content', $content);
            $statement->execute();
        } catch(PDOException $e) {
            echo "Database error: " . $e->getMessage();
            throw $e;
        }
throw new InvalidArgumentException;
throw new InvalidArgumentException("Database error: " . $e->getMessage());
    
?>