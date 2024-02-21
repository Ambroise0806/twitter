<?php

class Database {
    
    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $pdo;

    public function __construct($db_name, $db_host = "localhost", $db_user = "guillaume", $db_pass ="Loulou97133") {
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

    private function verifyTweetLength($content){
        return mb_strlen($content, 'utf8') <= 140;
    }

    public function addNewTweet($userId, $content)
    {
        if (!$this->verifyTweetLength($content)) {
            throw new InvalidArgumentException("Votre tweet ne peut pas dépasser 140 charactères !");
        }

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
    }

    public function getLastTweet($userId){
        try {
            $sql = "SELECT username, AtUsername, time, content FROM tweet INNER JOIN user ON tweet.id_user = user.id WHERE id_user = :id_user ORDER BY tweet.id DESC LIMIT 1;";
            $statement = $this->getPDO()->prepare($sql);
            $statement->bindParam(':id_user', $userId);
            $statement->execute();
            $result = $statement->fetchAll();
            if(!empty($result)){
                $filename = "tweet.json";
                $data =json_encode($result);
                if (is_writable($filename)) {
                    if (!$stream = fopen($filename, 'w+')) {
                        throw new InvalidArgumentException("Impossible d'ouvrir le fichier ($filename)");
                        exit;
                    }
                    if (fwrite($stream, $data) === FALSE) {
                        throw new InvalidArgumentException("Impossible d'écrire dans le fichier ($filename)");
                        exit;
                    }
                    throw new InvalidArgumentException("L'écriture de ($data) dans le fichier ($filename) a réussi");
                    fclose($stream);
                
                } else {
                    throw new InvalidArgumentException("Le fichier $filename n'est pas accessible en écriture.");
                }
            }else{
                throw new InvalidArgumentException("le tableau est vide !");
            }
        } catch(PDOException $e) {
            echo "Database error: " . $e->getMessage();
            throw $e;
        }
    }
}
?>