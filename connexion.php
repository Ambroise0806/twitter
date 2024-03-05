<?php
ob_start();
session_start();
class connection {
    private $base;
    private $email;
    private $mdp;
    private $host = "localhost";
    private $dbName = "twitterForAll";
    private $user = "ambroise";
    private $password = "youhou";
    public function __construct() {
        try {
            $this->base = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->password);
            $this->base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "". $e->getMessage();
        }
    }

    function connect($email, $mdp) {
        if( $email != "" || $mdp != "") {
            try { 
                $con = $this->base->prepare("SELECT * FROM user WHERE mail LIKE '$email' AND password LIKE '$mdp'");
                $con->execute(); 
                $user = $con->fetchAll();
                if ($user) {
                    $_SESSION ['mail'] = $_POST ['mail'];
                    $_SESSION ['mdp'] = $_POST ['mdp'];
                    $_SESSION ['nom'] = $_POST ['username'];
                    print_r($user[1]);
                    // header("Location: login.php");
                    exit();
                } else {
                    echo "Le compte n'existe pas";
                }
            }   catch (Exception $e) {
                echo "Erreur lors de l'insertion de l'utilisateur : " . $e->getMessage();
            }
        }
    } 
}
    $form = new connection();
    $form->connect(
        $_POST['mail'],
        $_POST['mdp'],
    );
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="">
        <script src="inscription.js"></script>
        <title>Page de connexion</title>
    </head> 
    <body>
    <form action="" method="post">
    <label for="email">E-mail :</label>
    <input type="email" id="mail" name="mail" required><br>

    <label for="mdp">Mot de passe :</label>
    <input type="password" id="mdp" name="mdp" required><br>

    <input type="submit" value="Se connecter">
    <a href="inscrription.php">Vous n'êtes pas encore inscrit ?</a>
    </form>
    </body>
</html>


