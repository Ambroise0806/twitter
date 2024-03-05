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
            echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    }

    function connect($nom, $pseudo, $email, $mdp, $jour, $mois, $annee) {
        $date = "$annee-$mois-$jour";
        if ($nom != "" && $pseudo != "" && $email != "" && $mdp != "" && $date != "") {
            $hash = hash('ripemd160', $this->salt . $mdp);
            try {
                $con = $this->base->prepare("INSERT INTO user (username, at_user_name, profile_picture, banner, mail, password, birthdate) VALUES (:nom, :pseudo,'flemme', 'reflemme', :email, :mdp, :date)");
                $con->bindParam(':nom', $nom);
                $con->bindParam(':pseudo', $pseudo);
                $con->bindParam(':email', $email);
                $con->bindParam(':mdp', $hash);
                $con->bindParam(':date', $date);
                $con->execute();
                echo "Utilisateur inséré avec succès.";
            } catch (Exception $e) {
                echo "Erreur lors de l'insertion de l'utilisateur : " . $e->getMessage();
            }
        } else {
            echo "Tous les champs sont obligatoires.";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form = new Connection();
    $form->connect(
        $_POST['nom'],
        $_POST['pseudo'],
        $_POST['email'],
        $_POST['mdp'],
        $_POST['jour_naissance'],
        $_POST['mois_naissance'],
        $_POST['annee_naissance']
    );
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="inscription.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="inscription.js"></script>
        <title>Page de connexion</title>
    </head> 
    <body>  
    <form action="" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br>
    <label for="email">email :</label>
    <input type="text" id="email" name="email"><br>
    <label for="mdp">Mot de passe :</label>
    <input type="password" id="mdp" name="mdp" required><br>
    <label for="pseudo">pseudo :</label>
    <input type="text" id="pseudo" name="pseudo"><br>
    <label for="date_naissance" id="">Date de naissance : </label>
    <input type="text" name="annee_naissance" id="annee" size="4"/><br/>
    <input type="text" name="mois_naissance" id="mois" size="2"/>
    <input type="text" name="jour_naissance" id="jour" size="2"/>
    <input type="submit" value="Envoyer">
</form>

