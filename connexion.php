<?php
ob_start();
session_start();

class Connection {
    private $base;
    private $host = "localhost";
    private $dbName = "twitterForAll";
    private $user = "ambroise";
    private $password = "youhou";
    private $salt = "vive le projet tweet_academy";

    public function __construct() {
        try {
            $this->base = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->password);
            $this->base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "" . $e->getMessage();
        }
    }

    function connect($email, $mdp) {
        if ($email != "" && $mdp != "") {
            try {
                $con = $this->base->prepare("SELECT * FROM user WHERE mail = :email");
                $hash = hash('ripemd160', $this->salt . $mdp);
                $con->bindParam(':email', $email);
                $con->execute();
                $user = $con->fetch(PDO::FETCH_ASSOC);
                if ($user) {
                    if ($hash === $user['password']) {
                        $_SESSION['mail'] = $_POST['mail'];
                        $_SESSION['mdp'] = $_POST['mdp'];
                        $_SESSION['nom'] = $user['username'];
                        $_SESSION['pseudo'] = $user['at_user_name'];
                        $_SESSION['born'] = $user['birthdate']; 
                        header("Location: login.php");
                        exit();
                    } else {
                        echo 'Mot de passe incorrect.';
                    }
                } else {
                    echo "Le compte n'existe pas.";
                }
            } catch (Exception $e) {
                echo "Erreur lors de la connexion : " . $e->getMessage();
            }
        } else {
            echo "Veuillez fournir une adresse e-mail et un mot de passe.";
        }
    } 
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form = new Connection();
    $form->connect($_POST['mail'], $_POST['mdp']);
}
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


