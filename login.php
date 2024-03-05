<?php
session_start();
if (!isset($_SESSION['mail'])) {
    header("Location: connexion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
</head>
<body>
    <h1>Bienvenue sur votre compte <?php echo $_SESSION['nom']; ?></h1>
    <p>Votre adresse e-mail : <?php echo $_SESSION['mail']; ?></p>
    <p>Votre pseudo : <?php echo $_SESSION['pseudo']; ?></p>
    <p>Vous êtes né le : <?php echo $_SESSION['born']; ?></p>
    <a href="connexion.php">Se déconnecter</a>
</body>
</html>

