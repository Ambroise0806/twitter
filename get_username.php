<?php
    session_start();
    include 'connexion.php';
    $connexion = new Connexion('twitter');
    $sql = "SELECT username FROM user";
    $statement = $connexion->getPDO()->prepare($sql);
    if($statement) {
        $statement->execute();

    if($statmement->rowCount() > 0) {
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo "<li>" . $row['username'] . "</li>";
            }
        } else {
            echo "No users found";
        }
    } else {
        echo "Error preparing statement";
    }