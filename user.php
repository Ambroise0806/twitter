<?php
session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: connexion.php");
    exit;
    }

class Database {

    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $pdo;

    public function __construct($db_name = "twitter", $db_host = "localhost", $db_user = "zoewac", $db_pass ="dykehqb9") {
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
                throw new InvalidArgumentException("Database error:" . $e->getMessage());
            }
        }
        return $this->pdo;
    }
    

    public function getUserData() {
        try{
            $username = $_POST['username'];
            $sql = "SELECT username, at_user_name, profile_picture, bio, banner, birthdate, private, creation_time, city FROM user WHERE at_user_name LIKE '$username'";
            $stmt = $this->getPDO()->prepare($sql);
            $stmt->execute();
        }catch(PDOException $e) {
            echo "Database error: " . $e->getMessage();
            throw $e;
        }
    }
}
?>
