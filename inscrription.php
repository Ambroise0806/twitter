<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="form.css">
        <title>Page de connexion</title>
    </head> 
    <body>
    <form action="" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br>
    <label for="date_naissance">Date de naissance : </label>
     <input type="text" name="jour_naissance" id="jour_naissance" size="2" />
     <input type="text" name="mois_naissance" id="mois_naissance" size="2" />
     <input type="text" name="annee_naissance" id="annee_naissance" size="4" /><br />
    
    <?php
//     class connection {
//     private $base;
//     private $email;
//     private $mdp;
//     private $host = "localhost";
//     private $dbName = "meetic";
//     private $user = "ambroise";
//     private $password = "youhou";
//     public function __construct() {
//         try {
//             $this->base = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->password);
//             $this->base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         } catch (Exception $e) {
//             echo "" . $e->getMessage();
//         }
//     }

//     function connect($email, $mdp) {
//         // $pd = password_verify($mdp, $hash);
//         // var_dump($hash);
//         $con = $this->base->prepare("SELECT * FROM user WHERE email LIKE '$email' AND mdp LIKE '$mdp'");
//         $con->execute(); 
//         $user = $con->fetchAll();
//         print_r($user);
//         if ($user) {
//             echo "email existe";
//         } else {
//             echo "email n'existe pas";
//         }
//     } 
// }
//     $form = new connection();
//     $form->connect(
//         $_POST['email'],
//         $_POST['mdp'],
//     );
?>