<?php

class Hashtag
{

    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $pdo;

    public function __construct($db_name, $db_host = "127.0.0.1", $db_user = "aymeric", $db_pass = "V12345maj")
    {
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }

    private function getPDO()
    {
        if ($this->pdo === NULL) {
            try {
                $dsn = "mysql:host=$this->db_host;dbname=$this->db_name";
                $this->pdo = new PDO($dsn, $this->db_user, $this->db_pass);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new InvalidArgumentException("Database error: " . $e->getMessage());

            }
        }
        return $this->pdo;
    }

    public function getHashtag_list(){
        try {
            $sql = "SELECT id, content FROM tweet;";
            $statement = $this->getPDO()->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
        } catch (PDOException $e) {
            throw new InvalidArgumentException("Query error: " . $e->getMessage());
        }
        $hashtag_list = [];
        foreach ($result as $value) {
            $regex = "/\#(.*?)(\s|$)/";
            if(preg_match_all($regex, $value[1], $matches)){
                $hashtag = ['id' => $value[0], 'hashtag' => $matches[0][0]];
                array_push($hashtag_list, $hashtag);
            }
        }
        echo json_encode($hashtag_list);
    }
}