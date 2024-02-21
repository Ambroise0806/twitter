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
    <label for="email">email:</label>
    <input type="text" id="email" name="email"><br>
    <label for="date_naissance" id="">Date de naissance : </label>
    <input type="text" name="jour_naissance" id="jour" size="2"/>
    <input type="text" name="mois_naissance" id="mois" size="2"/>
    <input type="text" name="annee_naissance" id="annee" size="4"/><br />
    <input type="submit" value="Envoyer">
</form>
    <?php

    $form = $_POST;
    class connection {
    private $nom;
    private $date;
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
            echo "" . $e->getMessage();
        }
    }

    function connect($email, $mdp, $date) {
        $con = $this->base->prepare("");
        $con->execute(); 
        $user = $con->fetchAll();
        echo "hello";
        // print_r($user);
        if ($user) {
            echo "email existe";
        } else {
            echo "email n'existe pas";
        }
    } 
}
    $form = new connection();
    $form->connect(
    $_POST['nom'],
    $_POST['email'],
    $_POST['date'],
    );
?>